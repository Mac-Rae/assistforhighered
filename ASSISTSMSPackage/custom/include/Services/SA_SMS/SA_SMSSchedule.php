<?php
require_once 'include/SugarQueue/SugarJobQueue.php';
global $current_user, $timedate;

if(empty($_REQUEST['campaign_id']) && empty($_REQUEST['record'])){
    SugarApplication::appendErrorMessage(translate('LBL_SA_SMS_SCHEDULE_NO_CAMPAIGN_ID', 'Campaigns'));
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
    SugarApplication::appendErrorMessage(translate('LBL_SA_SMS_SCHEDULE_NO_CAMPAIGN_ID', 'Campaigns'));
    SugarApplication::redirect('index.php?module=Campaigns');
    return;
}
if(!$campaign->ACLAccess('edit')){
    SugarApplication::appendErrorMessage(translate('LBL_SA_SMS_SCHEDULE_NO_CAMPAIGN_ACCESS', 'Campaigns'));
    SugarApplication::redirect('index.php?module=Campaigns');
    return;
}

$scheduledJob = new SchedulersJob();

$scheduledJob->name = "SMS Campaign Send Job For Campaign {$campaign->id}";

$scheduledJob->assigned_user_id = $current_user->id;
$scheduledJob->data = $campaign->id;
$scheduledJob->target = "class::SA_SMSScheduledJob";
try{
    $tz = new DateTimeZone($current_user->getPreference('timezone'));
}catch(Exception $ex){
    $tz = new DateTimeZone("UTC");
}
$sendDate = $_REQUEST['sa_sms_send_date'] . " " . $_REQUEST['sa_sms_send_date_time'];
if(empty($_REQUEST['sa_sms_send_date'])){
    $scheduleDate = $timedate->getNow();
}else{
    $tmp = $timedate->get_date_time_format();
    $scheduleDate = DateTime::createFromFormat($timedate->get_date_time_format(), $sendDate,$tz);
    if(!$scheduleDate){
        $scheduleDate = DateTime::createFromFormat($timedate->get_db_date_time_format(), $sendDate,$tz);
    }
}
$scheduledJob->execute_time = $timedate->asDb($scheduleDate);

$queue = new SugarJobQueue();
$queue->submitJob($scheduledJob);
SugarApplication::appendSuccessMessage(translate('LBL_SA_SMS_SUCCESS', 'Campaigns'));
SugarApplication::redirect('index.php?module=Campaigns&action=DetailView&record='.$campaign->id);