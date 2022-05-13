<?php
$dictionary['SA_ContactCenterCall'] = array(
    'table' => 'sa_contactcentercalls',
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
VardefManager::createVardef('SA_ContactCenterCalls', 'SA_ContactCenterCall', array(
    'basic',
    'assignable',
    'security_groups'
));
