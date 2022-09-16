<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_SMSTemplate', 'edit', false)) {
    $module_menu[] = array(
        'index.php?module=SA_SMSTemplate&action=EditView&return_module=SA_SMSTemplate&return_action=DetailView',
        $mod_strings['LNK_NEW_RECORD'],
        'Add',
        'SA_SMSTemplate'
    );
}
if (ACLController::checkAccess('SA_SMSTemplate', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_SMSTemplate&action=index&return_module=SA_SMSTemplate&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_SMSTemplate'
    );
}

if (ACLController::checkAccess('SA_SMSTemplate', 'import', false)) {
    $module_menu[] = array(
        'index.php?module=Import&action=Step1&import_module=SA_SMSTemplate&return_module=SA_SMSTemplate&return_action=index',
        $app_strings['LBL_IMPORT'],
        'Import',
        'SA_SMSTemplate'
    );
}
