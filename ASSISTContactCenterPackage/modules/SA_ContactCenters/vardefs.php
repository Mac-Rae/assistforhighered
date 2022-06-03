<?php
$dictionary['SA_ContactCenter'] = array(
    'table' => 'sa_contactcenters',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'sso_login_url' => array(
            'name' => 'sso_login_url',
            'type' => 'url',
            'dbType' => 'varchar',
            'vname' => 'LBL_SSO_LOGIN_URL'
        ),
        'instance_id' => array(
            'name' => 'instance_id',
            'type' => 'varchar',
            'vname' => 'LBL_INSTANCE_ID'
        ),
        'instance_region' => array(
            'name' => 'instance_region',
            'type' => 'varchar',
            'vname' => 'LBL_INSTANCE_REGION'
        ),
        'banner_colour' => array(
            'name' => 'banner_colour',
            'type' => 'varchar',
            'vname' => 'LBL_BANNER_COLOUR',
            'default' => '#0c2340',
        ),
        'banner_text_colour' => array(
            'name' => 'banner_text_colour',
            'type' => 'varchar',
            'vname' => 'LBL_BANNER_TEXT_COLOUR',
            'default' => '#ffffff',
        ),
        'button_colour' => array(
            'name' => 'button_colour',
            'type' => 'varchar',
            'vname' => 'LBL_BUTTON_COLOUR',
            'default' => '#f08377',
        ),
        'button_hover_colour' => array(
            'name' => 'button_hover_colour',
            'type' => 'varchar',
            'vname' => 'LBL_BUTTON_HOVER_COLOUR',
            'default' => '#808f9c',
        ),
        'button_text_colour' => array(
            'name' => 'button_text_colour',
            'type' => 'varchar',
            'vname' => 'LBL_BUTTON_TEXT_COLOUR',
            'default' => '#ffffff',
        ),
        'check_connection' => array(
            'name' => 'check_connection',
            'type' => 'function',
            'vname' => 'LBL_CHECK_CONNECTION',
            'source' => 'non-db',
            'function' =>
                array (
                    'name' => 'showCheckConnection',
                    'returns' => 'html',
                    'include' => 'modules/SA_ContactCenters/ContactCenter/UI.php',
                ),

        ),
        'queues' => array(
            'name' => 'queues',
            'type' => 'function',
            'vname' => 'LBL_QUEUES',
            'dbtype' => 'multienum',
            'function' =>
                array (
                    'name' => 'getQueueDropdowns',
                    'returns' => 'html',
                    'include' => 'modules/SA_ContactCenters/Queues/QueueUI.php',
                ),

        ),
        'display_stats' => array(
            'name' => 'display_stats',
            'type' => 'function',
            'vname' => 'LBL_DISPLAY_STATS',
            'source' => 'non-db',
            'function' =>
                array (
                    'name' => 'displayStats',
                    'returns' => 'html',
                    'include' => 'modules/SA_ContactCenters/ContactCenter/UI.php',
                ),

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
VardefManager::createVardef('SA_ContactCenters', 'SA_ContactCenter', array(
    'basic',
    'assignable',
    'security_groups'
));
