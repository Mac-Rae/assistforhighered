<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $current_user, $app_strings;
if (empty($_POST['reportid'])) {
    SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_MASSIVE_ASSIGN_TO_USER_ERROR']);
    SugarApplication::redirect('index.php');
    return;
}

require_once 'include/SugarQueue/SugarJobQueue.php';
$reportId = $_POST['reportid'];
$scheduledJob = new SchedulersJob();

$scheduledJob->name = "Mass Advisor Assign Job For Report {$reportId}";

$scheduledJob->assigned_user_id = $current_user->id;
$scheduledJob->data = json_encode($_REQUEST);
$scheduledJob->target = "class::MassAdvisorAssignJob";

$queue = new SugarJobQueue();
$queue->submitJob($scheduledJob);

SugarApplication::appendSuccessMessage($app_strings['LBL_MCCD_MASSIVE_ASSIGN_TO_USER_SUCCESS']);

SugarApplication::redirect("index.php?module=AOR_Reports&action=DetailView&record=$reportId");