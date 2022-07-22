<?php
function threaded_process($smsRecords){
    $smsRecords = array_reverse($smsRecords);
    $hasMore = false;
    if(count($smsRecords) > 10){
        array_shift($smsRecords);
        $hasMore = true;
    }
    $smsRows = [];
    foreach ($smsRecords as $sms){
        $smsRows[] = [
            'id' => $sms->id,
            'body' => $sms->description,
            'type' => $sms->sms_type,
            'to_number' => $sms->to_number,
            'to_name' => $sms->getToName(),
            'from_number' => $sms->from_number,
            'from_name' => $sms->getFromName(),
            'date_sent' => $sms->date_sent,
            'is_scheduled' => $sms->is_scheduled
        ];
    }
    return [$smsRows, $hasMore];
}
function display_threaded_sms(SugarBean $bean,$field){
    //TODO: Check for detail view, editview, new record
    $ss = new Sugar_Smarty();
    $begin = 0;
    $end = 11;
    $smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC', $begin, $end, 0, 'is_scheduled = 0');
    $rec = threaded_process($smsRecords);
    $smsRows = $rec[0];
    $hasMore = $rec[1];

    $smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC', $begin, $end, 0, 'is_scheduled = 1');
    $rec = threaded_process($smsRecords);
    $scheduledRows = $rec[0];

    $ss->assign('targetNumber', $bean->phone_mobile);
    $ss->assign('recordType', $bean->module_name);
    $ss->assign('recordId', $bean->id);
    $ss->assign('hasMore', $hasMore);



    $showSendForm = !empty($bean->sms_opt_in_c) && $bean->sms_opt_in_c == 'Y' && !empty($bean->phone_mobile);
    $ss->assign('showSendForm',$showSendForm);
    $ss->assign('sms_rows',$smsRows);
    $ss->assign('scheduled_sms_rows',$scheduledRows);
    $smsModStrings = return_module_language('','SA_SMS');
    $ss->assign('SMS_MOD',$smsModStrings);
    $ss->assign('THREADED_TITLE', sprintf($smsModStrings['LBL_THREADED_TITLE'],$bean->get_summary_text()));
    return $ss->fetch('modules/SA_SMS/UI/tpls/threaded.tpl');
}