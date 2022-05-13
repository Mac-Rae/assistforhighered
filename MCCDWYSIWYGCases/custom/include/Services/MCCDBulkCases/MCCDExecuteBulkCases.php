<?php
require_once 'include/SugarQueue/SugarJobQueue.php';
global $current_user;

if(empty($_REQUEST['campaign_id']) && empty($_REQUEST['record'])){
    SugarApplication::appendErrorMessage(translate('LBL_BULKCASES_NO_CAMPAIGN_ID', 'Campaigns'));
    SugarApplication::redirect('index.php?module=Campaigns');
    return;
}
if(!empty($_REQUEST['campaign_id'])){
    $campaignId = $_REQUEST['campaign_id'];
}else{
    $campaignId = $_REQUEST['record'];
}

$campaign = BeanFactory::getBean('Campaigns',$campaignId);
if(empty($campaign->id)){
    SugarApplication::appendErrorMessage(translate('LBL_BULKCASES_NO_CAMPAIGN_ID', 'Campaigns'));
    SugarApplication::redirect('index.php?module=Campaigns');
    return;
}
if(!$campaign->ACLAccess('edit')){
    SugarApplication::appendErrorMessage(translate('LBL_BULKCASES_NO_CAMPAIGN_ACCESS', 'Campaigns'));
    SugarApplication::redirect('index.php?module=Campaigns');
    return;
}

$scheduledJob = new SchedulersJob();

$scheduledJob->name = "Bulk Cases Job For Campaign {$campaign->id}";

$scheduledJob->assigned_user_id = $current_user->id;
$scheduledJob->data = $campaign->id;
$scheduledJob->target = "class::MCCDBulkCasesJob";

$queue = new SugarJobQueue();
$queue->submitJob($scheduledJob);
SugarApplication::appendSuccessMessage(translate('LBL_BULKCASES_SUCCESS', 'Campaigns'));
SugarApplication::redirect('index.php?module=Campaigns&action=DetailView&record='.$campaign->id);