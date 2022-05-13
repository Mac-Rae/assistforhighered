<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $current_user, $app_strings;
if(
    empty($_REQUEST['module'])
    || empty($_REQUEST['record'])
    || empty($_REQUEST['field'])
){
    SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_ASSIGN_TO_ME_ERROR']);
    SugarApplication::redirect('index.php');
    return;
}
$field = $_REQUEST['field'];
$module = $_REQUEST['module'];
$recordId = $_REQUEST['record'];
$bean = BeanFactory::getBean($module,$recordId);
if(empty($bean->id) || !$bean->ACLAccess("edit")){
    SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_ASSIGN_TO_ME_ERROR']);
    SugarApplication::redirect("index.php?module=$module&action=DetailView&record=$recordId");
    return;
}
if(empty($bean->field_defs[$field]) || $bean->field_defs[$field]['type'] != 'MCCDAssignment'){
    SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_ASSIGN_TO_ME_ERROR']);
    SugarApplication::redirect("index.php?module=$module&action=DetailView&record=$recordId");
    return;
}
if($bean->field_defs[$field]['mccd_field_restricted'] || $bean->field_defs[$field]['mccd_field_hidden']){
    SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_ASSIGN_TO_ME_ERROR']);
    SugarApplication::redirect("index.php?module=$module&action=DetailView&record=$recordId");
    return;
}
$idField = $bean->field_defs[$field]['id_name'];
$bean->$idField = $current_user->id;
$bean->save();
SugarApplication::appendSuccessMessage($app_strings['LBL_MCCD_ASSIGN_TO_ME_SUCCESS']);

SugarApplication::redirect("index.php?module=$module&action=DetailView&record=$recordId");