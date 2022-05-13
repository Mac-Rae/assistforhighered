<?php
require_once 'custom/application/Services/MCCDSyncs/MCCDSyncInterface.php';
require_once 'custom/include/MCCD/MCCDMySQLClient.php';
class MCCDMySQLSyncImpl implements MCCDSyncInterace
{
    /**
     * @var MCCDMySQLClient
     */
    private $client;

    public function __construct(){
        $this->client = new MCCDMySQLClient();
    }

    public function getFields($table){
        return $this->client->runQuery("SELECT * FROM $table LIMIT 1");
    }

    public function getSingleResult($table,$mappingInfo, $id)
    {
        global $db;
        $key = !empty($mappingInfo['id_field']) ? $mappingInfo['id_field'] : 'id';
        $lastUpdateField = !empty($mappingInfo['last_updated_field']) ? $mappingInfo['last_updated_field'] : "date_modified";
        $lastUpdateField = $this->cleanIdentifier($lastUpdateField);
        $keyField = $this->cleanIdentifier($key);
        $id = $db->quoted($id);
        $query = "SELECT * FROM $table WHERE $keyField = $id ORDER BY $lastUpdateField DESC LIMIT 1;";
        return $this->client->runQuery($query);
    }

    private function cleanIdentifier($ident){
        return preg_replace("/[^A-Za-z0-9_]/", '', $ident);
    }

    public function getResults(&$runLog, $table, $mappingInfo, $lastRunInfo, $limit){
        global $db;
        $lastUpdateFieldSQL = $this->cleanIdentifier($mappingInfo['last_updated_field']);
        $keySQL = $this->cleanIdentifier($mappingInfo['id_field']);
        $lastUpdateSQL = $db->quoted($lastRunInfo['last_update']);
        $lastIdSQL = $db->quoted($lastRunInfo['last_id']);
        $query = "SELECT * FROM $table WHERE ($lastUpdateFieldSQL = $lastUpdateSQL AND $keySQL > $lastIdSQL) OR $lastUpdateFieldSQL > $lastUpdateSQL ORDER BY $lastUpdateFieldSQL,$keySQL LIMIT $limit";
        $runLog->description .= "Query ran was " . $query . "\n";
        return $this->client->runQuery($query);
    }
}