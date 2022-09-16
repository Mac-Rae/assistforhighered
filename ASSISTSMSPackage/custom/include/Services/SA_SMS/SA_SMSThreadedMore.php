<?php
$bean = BeanFactory::getBean($_REQUEST['module'],$_REQUEST['record']);
if(empty($bean->id)){
    return;
}
if(!$bean->ACLAccess('DetailView')){
    return;
}
$sms = BeanFactory::getBean('SA_SMS');
if(!$sms->ACLAccess('DetailView')){
    return;
}
$from = $_REQUEST['from'];

$realRecords = [];
$keepRecords = false;
$hasMore = false;
$mode = !empty($_REQUEST['mode']) ? $_REQUEST['mode'] : '';
if($mode == 'new' || $mode == 'newscheduled') {
    if($mode == 'new'){
        $smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC',0, -1, 0, 'is_scheduled = 0');
    }else{
        $smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC',0, -1, 0, 'is_scheduled = 1');
    }

    foreach ($smsRecords as $record) {
        if ($record->id == $from) {
            break;
        }
        $realRecords[] = $record;
    }
}else{
    $smsRecords = $bean->get_linked_beans('sa_sms','','date_sent DESC');
    foreach ($smsRecords as $record) {

        if ($keepRecords) {
            if (count($realRecords) >= 20) {
                $hasMore = true;
                break;
            }
            $realRecords[] = $record;
        }

        if ($record->id == $from) {
            $keepRecords = true;
        }
    }
}

$smsRecords = array_reverse($realRecords);
$smarty = new Sugar_Smarty();
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
        'is_scheduled' => $sms->is_scheduled,
    ];
}
$smarty->assign('sms_rows',$smsRows);
$smsModStrings = return_module_language('','SA_SMS');
$smarty->assign('SMS_MOD',$smsModStrings);
echo $smarty->fetch("modules/SA_SMS/UI/tpls/threaded_sms.tpl");
if(!$hasMore && $mode != 'new' && $mode != 'newscheduled'){
    echo <<<EOF
<script>
$('#SMSThreadedLoadMore').replaceWith("Start of conversation");
</script>
EOF;

}