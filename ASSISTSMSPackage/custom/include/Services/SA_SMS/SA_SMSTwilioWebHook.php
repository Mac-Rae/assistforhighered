<?php
require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';
require_once 'custom/include/Services/SA_SMS/PollHistoricSMSService.php';
global $timedate;
if(empty($_REQUEST['MessageSid'])){
    echo "<Response></Response>";
    return;
}
try {
    $client = SA_SMSClient::getClientFromConfig();
    $service = new PollHistoricSMSService();
    $sms = $client->getSMS($_REQUEST['MessageSid']);
    if($sms){
        $service->processSingleSMS($sms,$client);
    }
}catch(Exception $ex){
    $GLOBALS['log']->error("Failed to process Twilio Webhook ".$ex->getMessage());
}
echo "<Response></Response>";