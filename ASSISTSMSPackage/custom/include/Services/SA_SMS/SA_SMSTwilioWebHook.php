<?php
require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';
require_once 'custom/include/Services/SA_SMS/PollHistoricSMSService.php';
global $timedate;

if(!empty($_REQUEST['MessageSid'])) {
    $messageId = $_REQUEST['MessageSid'];
}elseif(!empty($_REQUEST['SmsMessageSid'])){
    $messageId = $_REQUEST['SmsMessageSid'];
}
if(empty($messageId)){
    echo "<Response></Response>";
    return;
}
try {
    $client = SA_SMSClient::getClientFromConfig();
    $service = new PollHistoricSMSService();
    $sms = $client->getSMS($messageId);
    if(empty($sms['date_sent'])){
        $sms['date_sent'] = $timedate->nowDb();
    }
    if($sms){
        $smsBean = $service->processSingleSMS($sms,$client);
        $alert = BeanFactory::newBean('Alerts');
        $alert->name = 'New SMS from '.$smsBean->getFromName();
        $alert->description = $smsBean->description;
        $alert->url_redirect = 'index.php';
        $alert->target_module = 'SA_SMS';
        $alert->assigned_user_id = $smsBean->assigned_user_id;
        $alert->type = 'info';
        $alert->is_read = 0;
        $alert->save();
    }
}catch(Exception $ex){
    $GLOBALS['log']->error("Failed to process Twilio Webhook ".$ex->getMessage());
}
echo "<Response></Response>";