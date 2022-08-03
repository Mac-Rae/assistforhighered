<?php
class ASSISTFieldRestriction{

    public static function processSearchFields($searchFields)
    {
        $assistField = new ASSISTFieldRestriction();
        foreach ($searchFields as $module => $defs) {
            $bean = BeanFactory::getBean($module);
            if (!$bean->assist_field_checks_done) {
                $assistField->setFieldFlags($bean);
            }
            foreach ($defs as $fieldName => $fieldDef) {
                if ($bean->field_defs[$fieldName]['assist_field_hidden']) {
                    unset($searchFields[$module][$fieldName]);
                }
                if ($fieldDef['db_field']) {
                    foreach ($fieldDef['db_field'] as $key => $dbField) {
                        if ($bean->field_defs[$dbField]['assist_field_hidden']) {
                            unset($searchFields[$module][$fieldName]['db_field'][$key]);
                        }
                    }
                    if (empty($searchFields[$module][$fieldName]['db_field'])) {
                        #unset($searchFields[$module][$fieldName]);
                        $searchFields[$module][$fieldName]['assist_field_hidden'] = true;
                    }
                }
            }
        }
        return $searchFields;
    }
    public static function checkHidden($fieldName, $bean, $searchField){
        if($bean->field_defs[$fieldName]['assist_field_hidden']){
            return true;
        }
        if($searchField && $searchField['assist_field_hidden']){
            return true;
        }
        return false;
    }
    public static function processSearchDefs($searchDefs){
        $assistField = new ASSISTFieldRestriction();
        foreach($searchDefs as $module => $defs){

            $bean = BeanFactory::getBean($module);
            if(!$bean->assist_field_checks_done){
                $assistField->setFieldFlags($bean);
            }
            require_once "custom/modules/".$bean->module_dir."/metadata/SearchFields.php";
            foreach($defs['layout'] as $searchType => $layout){
                if($searchType == 'basic_search'){
                    foreach($layout as $key => $layout) {
                            $fieldName = $layout['name'];

                            if (self::checkHidden($fieldName,$bean,$searchFields[$module][$fieldName])) {
                                $searchDefs[$module]['layout'][$searchType][$key][$fieldName]['assist_field_hidden'] = true;
                            }
                    }
                }else{
                    foreach($layout as $fieldName => $def){
                        if (self::checkHidden($fieldName,$bean,$searchFields[$module][$fieldName])) {
                            $searchDefs[$module]['layout'][$searchType][$fieldName]['assist_field_hidden'] = true;
                        }
                    }
                }
            }
        }
        return $searchDefs;
    }

    public function checkChanges(SugarBean $bean){
        global $current_user;
        if($current_user->is_admin){
            return;
        }
        foreach($bean->field_defs as $name => $def){
            if(empty($def['assist_field_restricted']) && empty($def['assist_field_hidden'])){
                continue;
            }
            if(empty($def['function'])){
                $bean->$name = $bean->fetched_row[$name];
            }else{
                if(substr($bean->module_dir,0,3) == 'AOS'){
                    unset($_POST['group_group_number']);
                    unset($_POST['product_name']);
                    unset($_POST['service_name']);
                }
            }
        }
    }
    private function getBeanForRequest($bean){
        global $app;
        if(!$bean || is_string($bean)) {
            $bean = false;
            if ($_REQUEST['module'] == 'Calendar' && $_REQUEST['action'] == 'QuickEdit') {
                $bean = BeanFactory::newBean($_REQUEST['current_module']);
            } elseif (!empty($app->controller->bean)) {
                $bean = $app->controller->bean;
            }
        }
        return $bean;
    }

    public function isFieldRestricted($report, $field){
        $field_module = $report->report_module;
        $path = unserialize(base64_decode($field->module_path));
        foreach($path as $rel){
            $field_module = getRelatedModule($field_module, $rel);

        }
        $tmpBean = BeanFactory::getBean($field_module);
        $this->setFieldFlags($tmpBean);
        if($tmpBean->field_defs[$field->field]['assist_field_hidden']){
            return true;
        }
        return false;
    }
    public function isReportRestricted($report){
        global $current_user;
        if($current_user->is_admin){
            return false;
        }


        foreach($report->get_linked_beans('aor_fields') as $field){
            if($this->isFieldRestricted($report, $field)){
                return true;
            }
        }
        foreach($report->get_linked_beans('aor_conditions') as $field){
            if($this->isFieldRestricted($report, $field)){
                return true;
            }
        }
        return false;
    }

    public function checkScheduledReport($bean, $event, $args){
        if(empty($bean->aor_report_id)){
            return;
        }
        $report = BeanFactory::getBean('AOR_Reports', $bean->aor_report_id);
        if($this->isReportRestricted($report)){
            $bean->aor_report_id = '';
        }
    }

    public function cleanMassUpdate($bean){
        if($GLOBALS['app']->controller->action != 'MassUpdate'){
            return;
        }
        $bean = $this->getBeanForRequest($bean);
        if(empty($bean)){
            return;
        }
        foreach ($bean->field_defs as $name => $def){
            if(!empty($def['assist_field_hidden']) || !empty($def['assist_field_restricted'])){
                unset($_REQUEST[$def['name']]);
                unset($_GET[$def['name']]);
                unset($_POST[$def['name']]);
            }
        }
    }

    public function setFieldFlags($bean=null){
        global $db, $current_user,$app;
        $accessList = [];
        $viewList = [];
        $bean = $this->getBeanForRequest($bean);
        if(empty($bean)){
            return;
        }
        if($bean->module_dir == 'Alerts'){
            return;
        }
        if($bean->assist_field_checks_done){
            return;
        }
        if(!$current_user->is_admin){
            $idQuoted = $db->quoted($current_user->id);
            $accessModule = $db->quoted($bean->module_dir);
            $query = <<<EOF
SELECT fa.access_type, fa.view_type, fa.access_field,fa.access_role 
FROM sa_fieldaccess fa
INNER JOIN acl_roles r ON fa.access_role = r.id AND r.deleted = 0
LEFT JOIN acl_roles_users ru ON (ru.role_id = r.id AND ru.deleted = 0 AND ru.user_id = $idQuoted)
LEFT JOIN securitygroups_acl_roles sr ON (sr.role_id = r.id AND sr.deleted = 0)
LEFT JOIN securitygroups_users su ON (sr.securitygroup_id = su.securitygroup_id AND su.deleted = 0 AND su.user_id = $idQuoted)
WHERE fa.deleted = 0 AND fa.access_module = $accessModule AND (ru.id IS NOT NULL OR su.id IS NOT NULL)
EOF;
            $ret = $db->query($query);

            while($row = $db->fetchByAssoc($ret)){
               // print_r($row);
                if(empty($accessList[$row['access_field']])){
                    $accessList[$row['access_field']] = [];
                }
                $accessList[$row['access_field']][] = $row['access_type'];

                if(empty($viewList[$row['access_field']])){
                    $viewList[$row['access_field']] = [];
                }
                $viewList[$row['access_field']][] = $row['view_type'];
            }
        }

        $isOwner = $bean->isOwner($current_user->id);
        $isGroup = SecurityGroup::groupHasAccess($bean->module_dir,$bean->id);


        foreach($bean->field_defs as $key => $def){
            $bean->field_defs[$key]['assist_field_restricted'] = true;
            if(empty($accessList[$key])){
                $bean->field_defs[$key]['assist_field_restricted'] = false;
            }else{
                $access = false;
                $accessList[$key] = array_unique($accessList[$key]);
                foreach($accessList[$key] as $accessType){
                    switch($accessType){
                        case "":
                            if(count($accessList[$key]) == 1){
                                $access = true;
                            }
                            break;
                        case "All":
                            $access = true;
                            break;
                        case "Group":
                            $access = $access || $isGroup;
                            break;
                        case "Owner":
                            $access = $access || $isOwner;
                            break;
                        case "None":
                            $access = $access || false;
                            break;

                    }
                }

                $bean->field_defs[$key]['assist_field_restricted'] = !$access;
                if(!$access && $key == 'currency_id'){
                    $bean->field_defs[$key]['function']['name'] = 'getCurrencyDropDownASSISTCustom';
                }
            }
        }

        foreach($bean->field_defs as $key => $def){
            $bean->field_defs[$key]['assist_field_hidden'] = true;
            if(empty($viewList[$key])){
                $bean->field_defs[$key]['assist_field_hidden'] = false;
            }else{
                $access = false;
                $viewList[$key] = array_unique($viewList[$key]);
                foreach($viewList[$key] as $accessType){
                    switch($accessType){
                        case "":
                            if(count($viewList[$key]) == 1){
                                $access = true;
                            }
                            break;
                        case "All":
                            $access = true;
                            break;
                        case "Group":
                            $access = $access || $isGroup;
                            break;
                        case "Owner":
                            $access = $access || $isOwner;
                            break;
                        case "None":
                            $access = $access || false;
                            break;

                    }
                }

                $bean->field_defs[$key]['assist_field_hidden'] = !$access;
                if(!$access && $key == 'currency_id'){
                    $bean->field_defs[$key]['function']['name'] = 'getCurrencyDropDownASSISTCustom';
                }
            }
            if($bean->field_defs[$key]['assist_field_hidden']){
                $bean->field_name_map[$key]['exportable'] = false;
                if($bean->field_defs[$key]['function']){
                    if(is_array($bean->field_defs[$key]['function'])){
                        $bean->field_defs[$key]['function']['name'] = 'assistRedactedField';
                    }else{
                        $bean->field_defs[$key]['function'] = 'assistRedactedField';
                    }
                }
            }elseif ($bean->field_defs[$key]['assist_field_restricted']){
                if($bean->field_defs[$key]['function']){
                    $bean->field_defs[$key]['old_function'] = $bean->field_defs[$key]['function'];
                    if(is_array($bean->field_defs[$key]['function'])){
                        $bean->field_defs[$key]['function']['name'] = 'assistRestrictedField';
                    }else{
                        $bean->field_defs[$key]['function'] = 'assistRestrictedField';
                    }

                }
            }
        }
        //Clean up Id Fields
        foreach($bean->field_defs as $key => $def){
            if(empty($def['id_name'])){
                continue;
            }
            $bean->field_defs[$key]['assist_field_restricted'] = $bean->field_defs[$def['id_name']]['assist_field_restricted'];
            $bean->field_defs[$key]['assist_field_hidden'] = $bean->field_defs[$def['id_name']]['assist_field_hidden'];
        }
        $bean->assist_field_checks_done = true;
    }
}