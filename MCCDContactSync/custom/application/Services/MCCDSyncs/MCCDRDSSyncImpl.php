<?php
require_once 'custom/application/Services/MCCDSyncs/MCCDSyncInterface.php';
require_once 'custom/include/MCCD/MCCDRDSClient.php';
class MCCDRDSSyncImpl implements MCCDSyncInterace
{
    /**
     * @var MCCDRDSClient
     */
    private $client;

    public function __construct(){
        $this->client = new MCCDRDSClient();
    }

    public function getFields($table){
        return $this->client->runQuery("SELECT * FROM $table LIMIT 1");
    }

    public function getSingleResult($table,$mappingInfo, $id)
    {
        global $db;
        $key = !empty($mappingInfo['id_field']) ? $mappingInfo['id_field'] : 'EMPLID';
        $lastUpdateField = !empty($mappingInfo['last_updated_field']) ? $mappingInfo['last_updated_field'] : "LAST_UPDATED";
        $lastUpdateField = $db->quoteIdentifier($lastUpdateField);
        $query = "SELECT * FROM $table WHERE $key = :id ORDER BY $lastUpdateField DESC LIMIT 1;";
        return $this->client->runQuery($query, ['id' => $id]);
    }

    public function getResults(&$runLog, $table, $mappingInfo, $lastRunInfo, $limit){
        global $db;
        $lastUpdateFieldSQL = $db->quoteIdentifier($mappingInfo['last_updated_field']);
        $keySQL = $db->quoteIdentifier($mappingInfo['id_field']);

        $query = "SELECT * FROM $table WHERE ($lastUpdateFieldSQL = :last_update AND $keySQL > :last_id) OR $lastUpdateFieldSQL > :last_update ORDER BY $lastUpdateFieldSQL,$keySQL LIMIT $limit";
        $runLog->description .= "Query ran was " . $query . "\n";
        return $this->client->runQuery($query, $lastRunInfo);
    }
}