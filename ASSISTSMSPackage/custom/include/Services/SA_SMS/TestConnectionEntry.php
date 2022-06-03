<?php
require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';

global $current_user, $app_list_strings, $sugar_config;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}
$error = '';
if(empty($_REQUEST['provider'])){
    $error = translate('LBL_TEST_CONNECTION_NO_PROVIDER','SA_SMS');
}

try{
    if($_REQUEST['provider'] == 'Disabled') {
        echo json_encode(['error' => "SMS Is Disabled"]);
        return;
    }
    $params = ['sid' => $_REQUEST['twilio_sid']];
    if(empty($_REQUEST['twilio_token'])){
        $params['token'] = $sugar_config['sa_sms']['twilio_token'];
    }else{
        $params['token'] = $_REQUEST['twilio_token'];
    }
    $client = SA_SMSClient::getClient($_REQUEST['provider'],$params);
    $client->testConnection();
}catch(Exception $ex){
    $error = $ex->getMessage();
}
if($error){
    echo json_encode(['error' => $error]);
}else{
    echo json_encode(['success' => 1]);
}