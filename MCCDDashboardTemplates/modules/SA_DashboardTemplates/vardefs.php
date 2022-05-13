<?php
$dictionary['SA_DashboardTemplate'] = array(
    'table' => 'sa_dashboardtemplates',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'contents' => array(
            'name' => 'contents',
            'type' => 'longtext',
        )
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
VardefManager::createVardef('SA_DashboardTemplates', 'SA_DashboardTemplate', array(
    'basic',
    'assignable',
    'security_groups'
));
