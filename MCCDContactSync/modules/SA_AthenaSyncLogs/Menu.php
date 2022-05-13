<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_AthenaSyncLogs', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_AthenaSyncLogs&action=index&return_module=SA_AthenaSyncLogs&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_AthenaSyncLogs'
    );
}
