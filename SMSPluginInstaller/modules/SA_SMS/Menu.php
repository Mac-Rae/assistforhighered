<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_SMS', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_SMS&action=index&return_module=SA_SMS&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_SMS'
    );
}

