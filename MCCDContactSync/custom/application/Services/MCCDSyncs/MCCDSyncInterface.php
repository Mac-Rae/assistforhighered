<?php

interface MCCDSyncInterace{

    public function getFields($table);
    public function getSingleResult($table, $mappingInfo, $id);
    public function getResults(&$runLog, $table, $mappingInfo, $lastRunInfo, $limit);
}