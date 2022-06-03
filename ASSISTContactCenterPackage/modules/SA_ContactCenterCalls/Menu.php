<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('SA_ContactCenterCalls', 'edit', false)) {
    $module_menu[] = array(
        'index.php?module=SA_ContactCenterCalls&action=EditView&return_module=SA_ContactCenterCalls&return_action=DetailView',
        $mod_strings['LNK_NEW_RECORD'],
        'Add',
        'SA_ContactCenterCalls'
    );
}
if (ACLController::checkAccess('SA_ContactCenterCalls', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=SA_ContactCenterCalls&action=index&return_module=SA_ContactCenterCalls&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'SA_ContactCenterCalls'
    );
}

if (ACLController::checkAccess('SA_ContactCenterCalls', 'import', false)) {
    $module_menu[] = array(
        'index.php?module=Import&action=Step1&import_module=SA_ContactCenterCalls&return_module=SA_ContactCenterCalls&return_action=index',
        $app_strings['LBL_IMPORT'],
        'Import',
        'SA_ContactCenterCalls'
    );
}
