<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_Programs', 'edit', false)) {
    $module_menu[] = array(
        'index.php?module=SA_Programs&action=EditView&return_module=SA_Programs&return_action=DetailView',
        $mod_strings['LNK_NEW_RECORD'],
        'Add',
        'SA_Programs'
    );
}
if (ACLController::checkAccess('SA_Programs', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_Programs&action=index&return_module=SA_Programs&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_Programs'
    );
}

if (ACLController::checkAccess('SA_Programs', 'import', false)) {
    $module_menu[] = array(
        'index.php?module=Import&action=Step1&import_module=SA_Programs&return_module=SA_Programs&return_action=index',
        $app_strings['LBL_IMPORT'],
        'Import',
        'SA_Programs'
    );
}
