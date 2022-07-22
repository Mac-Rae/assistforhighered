<?php
require_once 'include/SugarQueue/SugarJobQueue.php';
global $current_user, $timedate;

require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';

if (empty($_REQUEST['record']) || empty($_REQUEST['record_type'])) {
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_RECORD_FOUND', 'SA_SMS')
        ]
    );
    return;
}
if (empty($_REQUEST['phone_number'])) {
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_NUMBER_FOUND', 'SA_SMS')
        ]
    );
    return;
}
if (empty($_REQUEST['sms_body'])) {
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_BODY', 'SA_SMS')
        ]
    );
    return;
}
$recordId = $_REQUEST['record'];
$recordType = $_REQUEST['record_type'];
$phoneNumber = $_REQUEST['phone_number'];
$body = $_REQUEST['sms_body'];

$bean = BeanFactory::getBean($recordType,$recordId);
if(empty($bean->id)){
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_RECORD_FOUND', 'SA_SMS')
        ]
    );
    return;
}

if(!$bean->ACLAccess('DetailView')){
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_RECORD_FOUND', 'SA_SMS')
        ]
    );
    return;
}
if(empty($bean->sms_opt_in_c) || $bean->sms_opt_in_c != 'Y'){
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_OPT_IN', 'SA_SMS')
        ]
    );
    return;
}

/*
 * Check that the phone number matches the contact we expect.
 * This prevents a malicious user from sending to an arbritary phone number from a record they otherwise have
 * access to.
 * TODO: Standardise this to a util file
 */
$foundNumber = false;
foreach($bean->field_defs as $name => $def){
    if($def['type'] != 'phone'){
        continue;
    }
    if($bean->$name == $phoneNumber){
        $foundNumber = true;
        break;
    }
}
if(!$foundNumber){
    echo json_encode(
        [
            'result' => translate('LBL_SMS_DIALOG_NO_NUMBER_FOUND', 'SA_SMS')
        ]
    );
    return;
}

$client = SA_SMSClient::getClientFromConfig();
if(!$client){
    echo json_encode(
        [
            'result' => translate('LBL_SMS_SEND_ERROR', 'SA_SMS')
        ]
    );
    return;
}
$scheduledJob = new SchedulersJob();

$scheduledJob->name = "SMS Single Send Job";

$scheduledJob->assigned_user_id = $current_user->id;

$smsBean = BeanFactory::newBean('SA_SMS');
$smsBean->name = "From: ".$client->getFrom()." To: ".$phoneNumber;
$smsBean->description = $body;
$smsBean->from_number = $client->getFrom();
$smsBean->to_number = $phoneNumber;
$smsBean->sms_type = 'crm_out';
$smsBean->send_record_id = $this->assigned_user_id;
$smsBean->send_record_type = "Users";
$smsBean->to_record_id = $bean->id;
$smsBean->to_record_type = $bean->module_name;
$smsBean->parent_id = $bean->id;
$smsBean->parent_type = $bean->module_name;
$smsBean->date_sent = $timedate->nowDb();
$smsBean->status = 'crm_scheduled';



$scheduledJob->target = "class::SA_SMSSingleJob";
if(empty($_REQUEST['scheduleSMS'] || empty($_REQUEST['schedule_date']))){
    $scheduledJob->execute_time = $timedate->nowDb();
    $smsBean->is_scheduled = false;
}else{
    try{
        $tz = new DateTimeZone($current_user->getPreference('timezone'));
    }catch(Exception $ex){
        $tz = new DateTimeZone("UTC");
    }
    $scheduleDate = DateTime::createFromFormat('Y/m/d h:ia', $_REQUEST['schedule_date'],$tz);
    if(!$scheduleDate){
        $scheduleDate = DateTime::createFromFormat('Y-m-d h:ia', $_REQUEST['schedule_date'],$tz);
    }
    $scheduledJob->execute_time = $timedate->asDb($scheduleDate);
    $smsBean->is_scheduled = true;
}
$smsBean->date_sent = $scheduledJob->execute_time;
$smsBean->save();
$scheduledJob->data = $smsBean->id;
$queue = new SugarJobQueue();
$queue->submitJob($scheduledJob);

$formattedDateSent = $scheduledJob->execute_time;
$dateOb = $timedate->fromDb($scheduledJob->execute_time);
if($dateOb){
    $formattedDateSent = $timedate->asUser($dateOb);
}
echo json_encode(
    [
        'result' => translate('LBL_SMS_DIALOG_SEND_SUCCESS', 'SA_SMS'),
        'sms' => [
            'from_name' => translate('LBL_SYSTEM_MESSAGE','SA_SMS'),
            'from_number' =>  $client->getFrom(),
            'to_name' => $bean->get_summary_text(),
            'to_number' => $phoneNumber,
            'date_sent' => $formattedDateSent,//TODO: Seems wrong - 1 hour out
            'sms_body' => $body,
            'type' => 'crm_out',
            'is_scheduled' => $smsBean->is_scheduled
        ]
    ]
);