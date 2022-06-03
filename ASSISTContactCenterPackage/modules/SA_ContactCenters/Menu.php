<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_ContactCenters', 'edit', false)) {
    $module_menu[] = array(
        'index.php?module=SA_ContactCenters&action=EditView&return_module=SA_ContactCenters&return_action=DetailView',
        $mod_strings['LNK_NEW_RECORD'],
        'Add',
        'SA_ContactCenters'
    );
}
if (ACLController::checkAccess('SA_ContactCenters', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_ContactCenters&action=index&return_module=SA_ContactCenters&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_ContactCenters'
    );
}

if (ACLController::checkAccess('SA_ContactCenters', 'import', false)) {
    $module_menu[] = array(
        'index.php?module=Import&action=Step1&import_module=SA_ContactCenters&return_module=SA_ContactCenters&return_action=index',
        $app_strings['LBL_IMPORT'],
        'Import',
        'SA_ContactCenters'
    );
}
