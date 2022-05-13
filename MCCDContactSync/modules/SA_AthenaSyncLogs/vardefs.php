<?php
$dictionary['SA_AthenaSyncLogs'] = array(
    'table' => 'sa_athenasynclogs',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'start_date' => [
            'name' => 'start_date',
            'vname' => 'LBL_START_DATE',
            'type' => 'datetime'
        ],
        'end_date' => [
            'name' => 'end_date',
            'vname' => 'LBL_END_DATE',
            'type' => 'datetime'
        ],
        'records_processed' => [
            'name' => 'records_processed',
            'vname' => 'LBL_RECORDS_PROCESSED',
            'type' => 'int'
        ],
        'unique_records_processed' => [
            'name' => 'unique_records_processed',
            'vname' => 'LBL_UNIQUE_RECORDS_PROCESSED',
            'type' => 'int'
        ],
    
    ),
    'indices' => array(
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true
);
if (! class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('SA_AthenaSyncLogs', 'SA_AthenaSyncLogs', array(
    'basic',
    'assignable',
    'security_groups'
));
