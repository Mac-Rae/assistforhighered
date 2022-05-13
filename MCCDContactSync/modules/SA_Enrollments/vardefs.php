<?php
$dictionary['SA_Enrollment'] = array(
    'table' => 'sa_enrollments',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(

    
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
VardefManager::createVardef('SA_Enrollments', 'SA_Enrollment', array(
    'basic',
    'assignable',
    'security_groups'
));
