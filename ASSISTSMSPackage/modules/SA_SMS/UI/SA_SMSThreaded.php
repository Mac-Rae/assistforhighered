<?php
function display_threaded_sms(SugarBean $bean,$field){
    //TODO: Check for detail view, editview, new record
    $ss = new Sugar_Smarty();
    $smsRecords = $bean->get_linked_beans('sa_sms','','date_sent');
    $smsRows = [];
    foreach ($smsRecords as $sms){
        $smsRows[] = [
            'body' => $sms->description,
            'type' => $sms->sms_type,
            'to_number' => $sms->to_number,
            'to_name' => $sms->getToName(),
            'from_number' => $sms->from_number,
            'from_name' => $sms->getFromName(),
            'date_sent' => $sms->date_sent
        ];
    }
    $ss->assign('targetNumber', $bean->phone_mobile);
    $ss->assign('recordType', $bean->module_name);
    $ss->assign('recordId', $bean->id);

    $showSendForm = !empty($bean->sms_opt_in_c) && $bean->sms_opt_in_c == 'Y' && !empty($bean->phone_mobile);
    $ss->assign('showSendForm',$showSendForm);
    $ss->assign('sms_rows',$smsRows);
    $ss->assign('SMS_MOD',return_module_language('','SA_SMS'));
    return $ss->fetch('modules/SA_SMS/UI/tpls/threaded.tpl');
}