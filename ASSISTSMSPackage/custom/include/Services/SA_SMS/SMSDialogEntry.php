<?php
global $timedate;
require_once 'modules/SA_SMS/UI/SA_SMSThreaded.php';
if(empty($_REQUEST['record']) || empty($_REQUEST['record_type'])){
    echo translate('LBL_SMS_DIALOG_NO_RECORD_FOUND', 'SA_SMS');
    return;
}
if(empty($_REQUEST['phone_number'])){
    echo translate('LBL_SMS_DIALOG_NO_NUMBER_FOUND', 'SA_SMS');
    return;
}
$recordId = $_REQUEST['record'];
$recordType = $_REQUEST['record_type'];
$phoneNumber = $_REQUEST['phone_number'];

$bean = BeanFactory::getBean($recordType,$recordId);
if(empty($bean->id)){
    echo translate('LBL_SMS_DIALOG_NO_RECORD_FOUND', 'SA_SMS');
    return;
}

if(!$bean->ACLAccess('DetailView')){
    echo translate('LBL_SMS_DIALOG_NO_RECORD_FOUND', 'SA_SMS');
    return;
}

/*
 * Check that the phone number matches the contact we expect.
 * This prevents a malicious user from sending to an arbritary phone number from a record they otherwise have
 * access to.
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
    echo translate('LBL_SMS_DIALOG_NO_NUMBER_FOUND', 'SA_SMS');
    return;
}

$smarty = new Sugar_Smarty();
$recordInfo = [
    'id' => $bean->id,
    'type' => $bean->module_name,
    'name' => $bean->get_summary_text(),
];
$mod = return_module_language('', "SA_SMS");
$smarty->assign('record', $recordInfo);
$smarty->assign('phoneNumber', $phoneNumber);
$smarty->assign('SMS_MOD', $mod);


$begin = 0;
$end = 11;
$smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC', $begin, $end, 0, 'is_scheduled = 0');
$rec = threaded_process($smsRecords);
$smsRows = $rec[0];
$hasMore = $rec[1];

$smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC', $begin, $end, 0, 'is_scheduled = 1');
$rec = threaded_process($smsRecords);
$scheduledRows = $rec[0];

$smarty->assign('targetNumber', $bean->phone_mobile);
$smarty->assign('recordType', $bean->module_name);
$smarty->assign('recordId', $bean->id);
$smarty->assign('hasMore', $hasMore);



$showSendForm = !empty($bean->sa_sms_opt_in) && $bean->sa_sms_opt_in == 'Y' && !empty($bean->phone_mobile);
$smarty->assign('showSendForm',$showSendForm);
$smarty->assign('sms_rows',$smsRows);
$smarty->assign('scheduled_sms_rows',$scheduledRows);
$smarty->assign('THREADED_TITLE', sprintf($mod['LBL_THREADED_TITLE'],$bean->get_summary_text()));
$nowUser = $timedate->getNow(true);
$smarty->assign('nowUser', $nowUser->format("Y-m-d h:i A"));
echo $smarty->fetch('custom/include/Services/SA_SMS/tpls/SMSDialog.tpl');