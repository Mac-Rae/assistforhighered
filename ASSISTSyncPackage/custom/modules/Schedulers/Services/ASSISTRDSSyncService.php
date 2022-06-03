<?php

require_once 'custom/application/Services/ASSISTSyncs/ASSISTRDSSyncImpl.php';
require_once 'custom/application/Services/ASSISTSyncs/ASSISTAthenaSyncImpl.php';
require_once 'custom/application/Services/ASSISTSyncs/ASSISTMySQLSyncImpl.php';

class ASSISTRDSSyncService
{

    private $recordCount = 0;
    const RESULT_SUCCESS = 1;
    const RESULT_NO_RECORD_KEY = 2;
    const RESULT_NO_RECORD = 3;

    const MAPPING_NO_RESULT = 1;

    private function getSyncClient(){
        global $sugar_config;
        if(empty($sugar_config['assist_athena']['sync_type'])){
            throw new Exception("Error: Empty Sync Type in config");
        }
        if($sugar_config['assist_athena']['sync_type'] == 'RDS'){
            return new ASSISTRDSSyncImpl();
        }elseif($sugar_config['assist_athena']['sync_type'] == 'Athena'){
            return new ASSISTAthenaSyncImpl();
        }elseif($sugar_config['assist_athena']['sync_type'] == 'DB'){
            return new ASSISTMySQLSyncImpl();
        }else{
            throw new Exception("Unknown Sync Type in config [".$sugar_config['assist_athena']['sync_type']);
        }
    }

    public function checkMapping($mapping){
        global $app_strings;
        try {
            $client = $this->getSyncClient();
            $ret = [];
            foreach($mapping as $table => $mappingInfo){
                $tableMapping = $mappingInfo['mapping'];
                $relMapping = $mappingInfo['mapping_rel'];
                $mappingModule = $mappingInfo['module'];
                $mappingLastUpdated = $mappingInfo['last_updated_field'];
                $mappingId = $mappingInfo['id_field'];
                $table = $this->cleanTableName($table);
                $results = $client->getFields($table);
                if(empty($results)){
                    return [
                        'error' => $table.": ".self::MAPPING_NO_RESULT
                    ];
                }
                $row = $results->current();
                if(empty($row)){
                    return [
                        'error' =>  $table.": ".self::MAPPING_NO_RESULT
                    ];
                }

                if(empty($mappingModule)){
                    $ret[] = $table.": ".$app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_NO_MAPPING_MODULE'];
                }
                if(empty($mappingLastUpdated)){
                    $ret[] = $table.": ".$app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_NO_LAST_UPDATED'];
                }
                if(empty($mappingId)){
                    $ret[] = $table.": ".$app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_NO_ID'];
                }
                if(!array_key_exists($mappingLastUpdated,$row)){
                    $ret[] = $table.": ".$app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_LAST_UPDATED_DOESNT_EXIST'];
                }
                if(!array_key_exists($mappingId,$row)){
                    $ret[] = $table.": ".$app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_ID_DOESNT_EXIST'];
                }
                if(!array_key_exists($mappingId,$tableMapping)){
                    $ret[] = $table.": ".$app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_ID_HAS_NO_MAPPED_FIELD'];
                }
                $recordBean = BeanFactory::getBean($mappingModule);

                foreach($tableMapping as $rdsField => $crmField){
                    if(empty($recordBean->field_defs[$crmField])){
                        $ret[] = $table.": ".sprintf($app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_NO_CRM_FIELD'],$crmField);
                    }
                    if(!array_key_exists($rdsField,$row)){
                        $ret[] = $table.": ".sprintf($app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_NO_RDS_FIELD'],$rdsField);
                    }
                }
                foreach($relMapping as $link => $def){
                    if(empty($recordBean->field_defs[$link]) || $recordBean->field_defs[$link]['type'] != 'link'){
                        $ret[] = $table.": ".sprintf($app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_REL_FIELD_NOT_FOUND'],$link);
                        continue;
                    }
                    $recordBean->load_relationship($link);
                    if(empty($recordBean->$link)){
                        $ret[] = $table.": ".sprintf($app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_REL_FIELD_NOT_FOUND'],$link);
                        continue;
                    }

                    if(empty($recordBean->field_defs[$def['main']])){
                        $ret[] = $table.": ".sprintf($app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_REL_FIELD_NO_MAIN'],$def['main']);
                    }
                    $relBean = BeanFactory::getBean($recordBean->$link->getRelatedModuleName());
                    if(empty($relBean->field_defs[$def['secondary']])){
                        $ret[] = $table.": ".sprintf($app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_REL_FIELD_NO_MATCHED'],$def['secondary']);
                    }
                }
            }
            return $ret;
        }catch(Exception $ex){
            $GLOBALS['log']->error("Failed to check mapping. [".$ex->getMessage()."]");
            return ['error' => -1];
        }
    }

    public function syncRecord($id){
        $contact = BeanFactory::getBean('Contacts',$id);
        if(empty($contact->id)){
            return [
                "error" => self::RESULT_NO_RECORD
            ];
        }
        $tableMappings = $this->getMapping();
        try{
            $syncClient = $this->getSyncClient();
        }catch(Exception $ex){
            $GLOBALS['log']->error("Failed to sync single contact. [" . $ex->getMessage() . "]");
            return [
                "error" => -1,
                "message" => "Could not retrieve sync client."
            ];
        }

        foreach($tableMappings as $table => $mappingInfo) {
            if(empty($mappingInfo['module']) || $mappingInfo['module'] != 'Contacts'){
                continue;
            }
            $key = !empty($mappingInfo['id_field']) ? $mappingInfo['id_field'] : 'EMPLID';
            if(empty($contact->{$mappingInfo['mapping'][$key]})){
                continue;
            }

            $keyId = $contact->{$mappingInfo['mapping'][$key]};

            try {
                $results = $syncClient->getSingleResult($table,$mappingInfo,$keyId);
            } catch (Exception $ex) {
                $GLOBALS['log']->error("Failed to sync single contact. [" . $ex->getMessage() . "]");
                return [
                    "error" => -1,
                    "message" => "There was an error calling RDS. Please check the SuiteCRM logs."
                ];
            }
            foreach ($results as $row) {
                $this->addOrUpdateRecord('Contacts', $row,$mappingInfo);
            }
        }
        return [
            'success' => self::RESULT_SUCCESS];
    }

    public function getLastHistoricId(){
        global $sugar_config;
        $default = 0;
        return !empty($sugar_config['assist_athena']['last_historic_id']) ? $sugar_config['assist_athena']['last_historic_id'] : $default;
    }

    /**
     * @return string
     */
    public function getLastHistoricRunDate(){
        global $sugar_config, $timedate;
        $default = "2010-01-01 00:00:00";
        $lastRunConfig = !empty($sugar_config['assist_athena']['last_historic_run']) ? $sugar_config['assist_athena']['last_historic_run'] : $default;
        return $this->getConfigDate($lastRunConfig,$default);
    }

    private function getConfigDate($date, $default){
        global $timedate;
        $dateFormat = "Y-m-d H:i:s.u";
        $configDate = DateTime::createFromFormat($dateFormat,$date);
        if(!$configDate){
            $configDate = DateTime::createFromFormat($timedate->get_db_date_time_format(),$date);
            if(!$configDate) {
                return $default;
            }
        }
        return $configDate->format($dateFormat);
    }

    public function getLastRunInfo($table){
        global $sugar_config;
        $info = [];
        $defaultDate = "2010-01-01 00:00:00";
        $lastRun = !empty($sugar_config['assist_athena']['last_run_info'][$table]['last_run']) ? $sugar_config['assist_athena']['last_run_info'][$table]['last_run'] : $defaultDate;
        $info['last_run'] = $this->getConfigDate($lastRun, $defaultDate);

        $defaultId = 0;
        $info['last_run_id'] = !empty($sugar_config['assist_athena']['last_run_info'][$table]['last_run_id']) ? $sugar_config['assist_athena']['last_run_info'][$table]['last_run_id'] : $defaultId;
        return $info;
    }

    /**
     * @param $field
     * @param $value
     * @return bool|SugarBean
     */
    private function getOrMakeRecordByField($module,$field,$value){
        $record = BeanFactory::getBean($module);
        $record = $record->retrieve_by_string_fields([$field => $value],true,false);
        if(!empty($record->id)){
            return $record;
        }
        return BeanFactory::newBean($module);
    }

    /**
     * @return array
     */
    private function getMapping(){
        global $sugar_config;
        if(empty($sugar_config['assist_athena']['field_mapping'])){
            return [];
        }
        return $sugar_config['assist_athena']['field_mapping'];
    }
    /**
     * @return array
     */
    private function getSQLMapping(){
        global $sugar_config;
        return !empty($sugar_config['assist_athena']['historic_field_mapping']) ? $sugar_config['assist_athena']['historic_field_mapping'] : [];
    }
    /**
     * @return array
     */
    private function getSQLMappingRel(){
        global $sugar_config;
        return !empty($sugar_config['assist_athena']['historic_field_mapping_rel']) ? $sugar_config['assist_athena']['historic_field_mapping_rel'] : [];
    }

    private function getRelationshipDef(SugarBean $bean, $linkName){
        global $dictionary;
        if(empty($bean->$linkName)){
            $bean->load_relationship($linkName);
            if(empty($bean->$linkName)){
                return false;
            }
        }
        $relName = $bean->field_defs[$linkName]['relationship'];
        if(empty($relName)){
            return false;
        }
        if(!empty($dictionary[$bean->object_name]['relationships'][$relName])){
            return $dictionary[$bean->object_name]['relationships'][$relName];
        }
        $relBean = BeanFactory::getBean($bean->$linkName->getRelatedModuleName());
        if(!empty($dictionary[$relBean->object_name]['relationships'][$relName])){
            return $dictionary[$relBean->object_name]['relationships'][$relName];
        }

        if(!empty($dictionary[$relName]['relationships'][$relName])){
            return $dictionary[$relName]['relationships'][$relName];
        }
        return false;
    }


    /**
     * @param $row
     * @return bool
     */
    public function addOrUpdateRecordSQL($row, SugarBean $recordBean, $key, $mappingInfo){
        global $db;
        $fieldDefs = $recordBean->field_defs;
        $targetTable = $recordBean->table_name;
        $mapping = $mappingInfo['mapping'];
        $mappingRel = $mappingInfo['mapping_rel'];
        if(empty($mapping[$key])){
            $this->error("Invalid Mapping - No Mapping Key");
            return false;
        }
        $existing = $db->fetchOne('SELECT id FROM '.$db->quoteIdentifier($targetTable). ' WHERE '.$mapping[$key]." = ".$db->quoted($row[$key]));
        if(!empty($existing['id'])){
            $id = $existing['id'];
        }else{
            $id = create_guid();
        }

        $fields = [
            'id' => $id,
            'deleted' => 0,
        ];
        $customFields = [
            'id_c' => $id,
        ];
        $emails = [];
        $emplId = false;
        foreach($mapping as $rowKey => $crmField){
            if(!array_key_exists($crmField,$fieldDefs)){
                continue;
            }
            if($crmField == 'email'){
                if(!empty($row[$rowKey])){
                    $emails[] = $row[$rowKey];
                }
                continue;
            }
            if(array_key_exists('source',$fieldDefs[$crmField]) && $fieldDefs[$crmField]['source'] == 'custom_fields'){
                $customFields[$crmField] = $row[$rowKey];
            }else{
                $fields[$crmField] = $row[$rowKey];
            }
            if($rowKey == 'EMPLID'){
                $emplId = $row[$rowKey];
            }

        }
        $fieldSQL = "(";
        $customFieldSQL = "(";
        $valueSQL = "(";
        $customValueSQL = "(";
        $dupeSQL = "";
        $customDupeSQL = "";
        foreach($fields as $field => $val){
            $identifier = $db->quoteIdentifier($field);
            $fieldSQL .= $identifier.",";
            $valueSQL .= $db->quoted($val).",";
            $dupeSQL .= " ".$identifier." = VALUES(".$identifier."), ";
        }
        foreach($customFields as $field => $val){
            $identifier = $db->quoteIdentifier($field);
            $customFieldSQL .= $identifier.",";
            $customValueSQL .= $db->quoted($val).",";
            $customDupeSQL .= " ".$identifier." = VALUES(".$identifier."),";
        }
        $fieldSQL = $fieldSQL." date_entered,date_modified)";
        $valueSQL = $valueSQL." NOW(),NOW())";
        $dupeSQL = $dupeSQL . " date_modified = NOW()";

        $customFieldSQL = trim($customFieldSQL,",").")";
        $customValueSQL = trim($customValueSQL,",").")";
        $customDupeSQL = trim($customDupeSQL,",");

        $sql = "INSERT INTO ".$db->quoteIdentifier($targetTable)." $fieldSQL VALUES $valueSQL ON DUPLICATE KEY UPDATE $dupeSQL;";
        $customSQL = "INSERT INTO ".$db->quoteIdentifier($targetTable."_cstm")." $customFieldSQL VALUES $customValueSQL ON DUPLICATE KEY UPDATE $customDupeSQL;";
        $db->query($sql,true);
        if(count($customFields) > 1) {
            $db->query($customSQL, true);
        }
        if($emails){
            foreach($emails as $email) {
                $emailRow = $db->fetchOne('SELECT id FROM email_addresses WHERE email_address_caps = ' . $db->quoted(strtoupper($email)),true);
                if(!$emailRow){
                    $emailId = create_guid();
                    $emailAddrInsert = "INSERT INTO email_addresses (id,email_address,email_address_caps,date_created,date_modified) VALUES ('$emailId', " .$db->quoted($email).",".$db->quoted(strtoupper($email)).",NOW(),NOW())";
                    $db->query($emailAddrInsert,true);
                }else{
                    $emailId = $emailRow['id'];
                }

                $emailRelRow = $db->fetchOne('SELECT id FROM email_addr_bean_rel WHERE email_address_id = ' . $db->quoted($emailId) .' AND bean_id = '.$db->quoted($id) .' AND bean_module = "'.$recordBean->module_name.'"',true);
                if(!$emailRelRow){
                    $emailRelRowInsert = "INSERT INTO email_addr_bean_rel (id,email_address_id,bean_id,bean_module,date_created,date_modified) VALUES ('"
                                            . create_guid()."',"
                                            .$db->quoted($emailId).", "
                                            .$db->quoted($id).", "
                                            ."'".$recordBean->module_name."', "
                                            ."NOW(), "
                                            ."NOW())";
                    $db->query($emailRelRowInsert,true);
                }
            }
        }
        foreach ($mappingRel as $link => $relInfo){

            $loaded = $recordBean->load_relationship($link);
            if(!$loaded){
                continue;
            }
            $main = $relInfo['main'];
            $secondary = $relInfo['secondary'];
            $relRecords = $this->findRelRecords($recordBean->$link->getRelatedModuleName(),$secondary, $fields[$main]);

            if($relRecords){
                $relRecords = array_unique($relRecords);
                $relDef = $this->getRelationshipDef($recordBean, $link);
                if(!$relDef){
                    $GLOBALS['log']->fatal("Sync: Failed to load relationship for $link");
                    continue;
                }
                $quotedId = $db->quoted($id);
                switch($relDef['relationship_type']){
                    case 'many-to-many':
                        $middleTable = $db->quoteIdentifier($relDef['join_table']);
                        if($recordBean->$link->getSide() == 'LHS'){
                            $mainId = $db->quoteIdentifier($relDef['join_key_lhs']);
                            $sideId = $db->quoteIdentifier($relDef['join_key_rhs']);
                        }else{
                            $mainId = $db->quoteIdentifier($relDef['join_key_rhs']);
                            $sideId = $db->quoteIdentifier($relDef['join_key_lhs']);
                        }

                        $query = <<<EOF
SELECT $sideId AS id FROM $middleTable WHERE deleted = 0 AND $mainId = $quotedId;
EOF;
                        $res = $db->query($query);
                        while($row = $db->fetchByAssoc($res)){
                            $key = array_search($row['id'], $relRecords);
                            if ($key !== false) {
                                unset($relRecords[$key]);
                            }
                        }
                        if($relRecords) {
                            $query = "INSERT INTO $middleTable (id,date_modified,deleted,$mainId,$sideId) VALUES ";
                            $queryParts = [];
                            foreach ($relRecords as $relId) {
                                $quotedRelId = $db->quoted($relId);
                                $queryParts[] = " (UUID(),UTC_TIMESTAMP(),0,$quotedId,$quotedRelId)";
                            }
                            $query .= implode(",",$queryParts);
                            $query .= ";";
                            $db->query($query);
                        }

                        break;
                    case 'one-to-many':
                        $targetTable = $db->quoteIdentifier($relDef['rhs_table']);
                        $targetField = $db->quoteIdentifier($relDef['rhs_key']);
                        if($recordBean->$link->getSide() == 'LHS') {
                            $targetId = $quotedId;
                            $idMatches = [];
                            foreach($relRecords as $relId){
                                $idMatches[] = $db->quoted($relId);
                            }
                            $idMatches = implode(",",$idMatches);
                        }else{
                            $targetId = $db->quoted($relRecords[0]);
                            $idMatches = $quotedId;
                        }
                        $query = "UPDATE $targetTable SET $targetField = $targetId WHERE id IN ($idMatches) AND deleted = 0";
                        $db->query($query);
                        break;
                    default:
                        $GLOBALS['log']->fatal("Sync: Unhandled relationship type ".$relDef['relationship_type']." for $link");
                        break;

                }
            }
        }
        return true;
    }

    /**
     * @param $row
     * @return bool
     */
    public function addOrUpdateRecord($module, $row, $mappingInfo){
        global $timedate, $db;
        $mapping = $mappingInfo['mapping'];
        $key = !empty($mappingInfo['id_field']) ? $mappingInfo['id_field'] : 'EMPLID';

        if(empty($mapping[$key])){
            $this->error("Invalid Mapping - No Mapping ID");
            return false;
        }
        $record = $this->getOrMakeRecordByField($module, $mapping[$key],$row[$key]);
        $record->in_workflow = true;
        $record->deleted = 0;
        $emails = [];
        $emplId = false;
        foreach($row as $field => $value){
            if(empty($mapping[$field])){
                continue;
            }
            if($field == 'EMPLID'){
                $emplId = $value;
            }
            $crmField = $mapping[$field];
            if($crmField == 'id'){
                continue;
            } 
            if($crmField == 'email'){
                if(!empty($value)){
                    $emails[] = $value;
                }
                continue;
            }
            if(empty($record->field_defs[$crmField])){
                continue;
            }
            if($record->field_defs[$crmField]['type'] == 'date'){
                $dateOb = $timedate->fromDb($value);
                if($dateOb){
                    $value = $timedate->asDbDate($dateOb);
                }
            }
            $record->$crmField = $value;
        }


        if($emails){
            $oldEmails = $record->emailAddress->getAddressesByGUID($record->id,$record->module_dir);
            foreach($oldEmails as $oldEmail){
                $emails[] = $oldEmail['email_address'];
            }
            $record->email_addresses_non_primary = $emails;
        }
        $record->save();

        if(empty($mappingInfo['mapping_rel'])){
            return true;
        }
        $relMapping = $mappingInfo['mapping_rel'];

        foreach ($relMapping as $link => $relInfo){
            $loaded = $record->load_relationship($link);
            if(!$loaded){
                continue;
            }
            $main = $relInfo['main'];
            $secondary = $relInfo['secondary'];
            $relRecords = $this->findRelRecords($record->$link->getRelatedModuleName(),$secondary, $record->$main);
            if($relRecords){
                echo "Linking {$record->id} to ".implode($relRecords)."\n";
                $record->$link->add($relRecords);
            }
        }
        return true;
    }

    private function findRelRecords($module, $field, $value){
        global $db;
        $bean = BeanFactory::getBean($module);
        $where = $bean->get_where([$field=>$value]);
        $sql = "SELECT id FROM ".$bean->getTableName()." ".$where;
        $res = $db->query($sql);
        $ids = [];
        while($row = $db->fetchByAssoc($res)){
            $ids[] = $row['id'];
        }
        return $ids;
    }
    
    private function relateByEmplId($record, $table, $relationship){
        global $db;
        if(!$record->load_relationship($relationship)){
            return;
        }
        $res = $db->query("SELECT id FROM ".$db->quoteIdentifier($table)." WHERE deleted = 0 AND contacts_id IS NULL AND emplid = ".$db->quoted($record->emplid),true);
        $relateRecords = [];
        while($row = $db->fetchByAssoc($res)){
            $relateRecords[] = $row['id'];
        }
        if($relateRecords){
            $record->$relationship->add($relateRecords);
        }
    }
    private function error($message){
        echo $message."\n";
        $GLOBALS['log']->error(__CLASS__.": $message");
    }
    private function log($message){
        echo $message."\n";
        $GLOBALS['log']->info(__CLASS__.": $message");
    }
    /**
     * @return bool
     * @throws Exception
     */
    public function historicRun()
    {
        //TODO: Add linking to relationships
        global $timedate, $sugar_config;
        $start = microtime(true);
        $this->log("Starting Historic Athena Sync");

        $limit = !empty($sugar_config['assist_athena']['per_run_limit']) ? $sugar_config['assist_athena']['per_run_limit'] : 5000;
        $lastRunDate = $this->getLastHistoricRunDate();
        $runLog = BeanFactory::getBean('SA_AthenaSyncLogs');
        $historicSyncDisplayTime = $timedate->getNow()->format("d/m/Y h:i A");
        $runLog->start_date = $lastRunDate;
        $runLog->records_processed = 0;
        $runLog->unique_records_processed = 0;
        $runLog->description = "";
        if(empty($sugar_config['assist_athena']['historic_table'])){
            $runLog->name = "Historic Athena Sync Error [$historicSyncDisplayTime]";
            $runLog->description = "No table defined for historic sync. Please set the config variable.";
            $runLog->save();
            return false;
        }
        $loops = 0;

        $historicModule = !empty($sugar_config['assist_athena']['historic_module']) ? $sugar_config['assist_athena']['historic_module'] : "Contacts";
        $lastUpdateField = !empty($sugar_config['assist_athena']['historic_updated_field']) ? $sugar_config['assist_athena']['historic_updated_field'] : "LAST_UPDATED";

        $recordBean = BeanFactory::newBean($historicModule);
        $historicTable = $this->cleanTableName($sugar_config['assist_athena']['historic_table']);
        $key = $sugar_config['assist_athena']['historic_id_field'];
        $mapping = $this->getSQLMapping();
        $mappingRel = $this->getSQLMappingRel();
        $fullMapping = [
            $historicTable => [
                'module' => $historicModule,
                'last_updated_field' => $lastUpdateField,
                'id_field' => $key,
                'mapping' => $mapping,
                'mapping_rel' => $mappingRel
            ]
        ];
        $check = $this->checkMapping($fullMapping);
        if(!empty($check['error'])){
            $runLog->name = "Historic Athena Sync Error [$historicSyncDisplayTime]";
            $runLog->description .= "Mapping error:\n".print_r($check,1);
            $runLog->save();
            return false;
        }
        try{
            $syncClient = $this->getSyncClient();
        }catch(Exception $ex){
            $runLog->name = "Historic Athena Sync Error [$historicSyncDisplayTime]";
            $runLog->description .= "Failed to get sync client: ".$ex->getMessage()."\n";
            $runLog->save();
            return false;
        }
        while(true) {
            $lastRunDate = $this->getLastHistoricRunDate();
            $lastId = $this->getLastHistoricId();

            $params = ['last_update' => $lastRunDate, 'last_id' => $lastId];
            $runLog->description .= "Parameters were " . print_r($params, 1) . "\n";
            try {
                $results = $syncClient->getResults($runLog,$historicTable,$fullMapping[$historicTable],$params, $limit);
                $this->log("Ran query");
            } catch (Exception $ex) {
                $this->error("Failed to run Athena Sync. Error was [" . $ex->getMessage() . "]");
                $runLog->name = "Historic Athena Sync Error [$historicSyncDisplayTime]";
                $runLog->description .= "Failed. [" . $ex->getMessage() . "]\n";
                $runLog->save();
                return false;
            }
            $latestDate = $lastRunDate;
            $latestId = $lastId;
            $thisCount = 0;
            foreach ($results as $row) {
                $suc = $this->addOrUpdateRecordSQL($row,$recordBean, $key, $fullMapping[$historicTable]);
                $runLog->records_processed++;
                if ($suc) {
                    $runLog->unique_records_processed++;
                    $this->recordCount++;
                }
                $latestDate = $row[$lastUpdateField];
                $latestId = $row[$key];
                $thisCount++;
            }
            $cfg = new Configurator();
            $cfg->config['assist_athena']['last_historic_run'] = $latestDate;
            $cfg->config['assist_athena']['last_historic_id'] = $latestId;
            $cfg->saveConfig();
            if($thisCount < $limit){
                break;
            }
            $loops++;
            if($loops >= 20){
                break;
            }
        }
        $runLog->name = "Historic Athena Sync [$historicTable] $historicSyncDisplayTime After ".$lastRunDate . " (".number_format($runLog->records_processed,0).")";
        $runLog->end_date = $latestDate;
        $end = microtime(true);
        $runLog->description .= "Took [" . ($end - $start) . "]s\n";
        $runLog->save();
        $cfg->saveConfig();

        $this->log("Athena sync ran from $lastRunDate to $latestDate. Took [".($end-$start)."]s Ran on {$this->recordCount} records.");

        return true;
    }
    private function cleanTableName($table){
        return preg_replace("/[^A-Za-z0-9_]/", '', $table);
    }
    /**
     * @return bool
     * @throws Exception
     */
    public function run()
    {
        //TODO: Add linking to relationships
        global $timedate, $sugar_config,$db;
        $start = microtime(true);
        $this->log("Starting Athena Sync");
        $limit = !empty($sugar_config['assist_athena']['per_run_limit']) ? $sugar_config['assist_athena']['per_run_limit'] : 5000;

        $runLog = BeanFactory::getBean('SA_AthenaSyncLogs');
        $runLog->name = "Athena Sync on ".$timedate->now();
        $runLog->start_date = $timedate->now();
        $runLog->records_processed = 0;
        $runLog->unique_records_processed = 0;
        $runLog->description = "";
        $tableMappings = $this->getMapping();

        $check = $this->checkMapping($tableMappings);
        if(!empty($check)){
            $this->error("Mapping error: ".print_r($check,1));
            $runLog->description .= "Mapping error:\n".print_r($check,1);
            $runLog->save();
            return false;
        }
        try {
            $syncClient = $this->getSyncClient();
        }catch(Exception $ex){
            $this->error($ex->getMessage());
            $runLog->description .= $ex->getMessage()."\n";
            $runLog->save();
            return false;
        }

        foreach($tableMappings as $table => $mappingInfo){
            $table = $this->cleanTableName($table);
            $mappingModule = $mappingInfo['module'];
            $lastUpdateField = !empty($mappingInfo['last_updated_field']) ? $mappingInfo['last_updated_field'] : "LAST_UPDATED";
            $key = !empty($mappingInfo['id_field']) ? $mappingInfo['id_field'] : 'EMPLID';
            $lastRunInfo = $this->getLastRunInfo($table);
            $params = ['last_update' => $lastRunInfo['last_run'], 'last_id' => $lastRunInfo['last_run_id']];
            $runLog->description .= "Parameters were ".print_r($params,1)."\n";
            try {
                $this->log("Athena sync running on $table. Syncing to Module [$mappingModule] Using Key [$key] Params are ".print_r($params,1));
                $results = $syncClient->getResults($runLog,$table,$mappingInfo,$params,$limit);
            }catch(Exception $ex){
                $this->error("Failed to run Athena Sync. Error was [".$ex->getMessage()."]");
                $runLog->description .= "Failed. [".$ex->getMessage()."]\n";
                $runLog->save();
                return false;
            }
            $latestDate = "2000-01-01 00:00:00";
            $latestId = 0;
            $hasResults = false;
            foreach($results as $row){
                $hasResults = true;
                $suc = $this->addOrUpdateRecord($mappingModule, $row,$mappingInfo);
                $runLog->records_processed++;
                if($suc){
                    $runLog->unique_records_processed++;
                    $this->recordCount++;
                }
                if($latestDate < $row[$lastUpdateField]) {
                    $latestDate = $row[$lastUpdateField];
                }
                if($latestId < $row[$key]) {
                    $latestId = $row[$key];
                }
            }
            if($hasResults) {
                $this->storeLastRunInfo($table, $latestDate, $latestId);
            }
        }

        $runLog->end_date = $latestDate;
        $end = microtime(true);
        $runLog->description .= "Took [".($end-$start)."]s\n";
        $runLog->save();


        $this->log("Athena sync ran. Took [".($end-$start)."]s Ran on {$this->recordCount} records.");
        return true;
    }

    protected function storeLastRunInfo($table,$date,$id){
        $cfg = new Configurator();
        $cfg->config['assist_athena']['last_run_info'][$table]['last_run'] = $date;
        $cfg->config['assist_athena']['last_run_info'][$table]['last_run_id'] = $id;
        $cfg->saveConfig();
    }

}
