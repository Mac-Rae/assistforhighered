<?php
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
$res = $client->sendSMS($phoneNumber,$body);
$smsBean = BeanFactory::newBean('SA_SMS');
$smsBean->name = "From: ".$client->getFrom()." To: ".$phoneNumber;
$smsBean->description = $body;
$smsBean->from_number = $client->getFrom();
$smsBean->to_number = $phoneNumber;
$smsBean->sms_type = 'crm_out';
$smsBean->send_record_id = $current_user->id;
$smsBean->send_record_type = "Users";
$smsBean->to_record_id = $bean->id;
$smsBean->to_record_type = $bean->module_name;
$smsBean->parent_id = $bean->id;
$smsBean->parent_type = $bean->module_name;
$smsBean->date_sent = $timedate->nowDb();
if($res){
    $smsBean->third_party = $res['third_party'];
    $smsBean->third_party_id = $res['third_party_id'];
    $smsBean->status = $res['status'];
}
$smsBean->save();
$smsBean->fill_in_additional_list_fields();
$formattedDateSent = $smsBean->date_sent;
$dateOb = $timedate->fromDb($smsBean->date_sent);
if($dateOb){
    $formattedDateSent = $timedate->asUser($dateOb);
}
echo json_encode(
    [
        'result' => translate('LBL_SMS_DIALOG_SEND_SUCCESS', 'SA_SMS'),
        'sms' => [
            'from_name' => $smsBean->getFromName(),
            'from_number' => $smsBean->from_number,
            'to_name' => $smsBean->getToName(),
            'to_number' => $smsBean->to_number,
            'date_sent' => $formattedDateSent,
            'sms_body' => $smsBean->description,
            'type' => $smsBean->sms_type
        ]
    ]
);
return;