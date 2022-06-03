<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_Enrollments', 'edit', false)) {
    $module_menu[] = array(
        'index.php?module=SA_Enrollments&action=EditView&return_module=SA_Enrollments&return_action=DetailView',
        $mod_strings['LNK_NEW_RECORD'],
        'Add',
        'SA_Enrollments'
    );
}
if (ACLController::checkAccess('SA_Enrollments', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_Enrollments&action=index&return_module=SA_Enrollments&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_Enrollments'
    );
}

if (ACLController::checkAccess('SA_Enrollments', 'import', false)) {
    $module_menu[] = array(
        'index.php?module=Import&action=Step1&import_module=SA_Enrollments&return_module=SA_Enrollments&return_action=index',
        $app_strings['LBL_IMPORT'],
        'Import',
        'SA_Enrollments'
    );
}
