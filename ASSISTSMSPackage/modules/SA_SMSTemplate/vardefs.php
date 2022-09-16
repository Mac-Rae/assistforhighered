<?php
$dictionary['SA_SMSTemplate'] = array(
    'table' => 'sa_smstemplate',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'field_variables' => [
            'name' => 'field_variables',
            'type' => 'function',
            'source' => 'non-db',
            'vname' => 'LBL_SA_SMS_FIELD_VARIABLES',
            'audited' => false,
            'reportable' => false,
            'inline_edit' => false,
            'studio' => false,
            'function' =>
                array (
                    'name' => 'SA_SMSTemplate::display_field_variables',
                    'returns' => 'html',
                    //'include' => 'modules/SA_SMS/UI/SA_SMSThreaded.php',
                ),
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
VardefManager::createVardef('SA_SMSTemplate', 'SA_SMSTemplate', array(
    'basic',
    'assignable',
    'security_groups'
));
