<?php
$dictionary['SA_FieldAccess'] = array(
    'table' => 'sa_fieldaccess',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'access_type' => array(
            'name' => 'access_type',
            'type' => 'varchar',
        ),
        'view_type' => array(
            'name' => 'view_type',
            'type' => 'varchar',
        ),
        'access_role' => array(
            'name' => 'access_role',
            'type' => 'varchar',
        ),
        'access_field' => array(
            'name' => 'access_field',
            'type' => 'varchar',
        ),
        'access_module' => array(
            'name' => 'access_module',
            'type' => 'varchar',
        ),
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
VardefManager::createVardef('SA_FieldAccess', 'SA_FieldAccess', array(
    'basic',
));
