<?php
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
echo $smarty->fetch('custom/include/Services/SA_SMS/tpls/SMSDialog.tpl');