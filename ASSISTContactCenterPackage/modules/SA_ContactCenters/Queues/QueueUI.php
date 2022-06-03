<?php
function getQueueDropdowns($contactCenter,$field,$val,$view){
    if($view == 'SearchForm_basic_search'){
        return;
    }
    $ss = new Sugar_Smarty();

    $cc = new ContactCenterSyncService();
    $queues = $cc->getQueues($contactCenter->instance_id);
    $selected = unencodeMultienum($val);
    foreach($queues as $k => $queue){
        if(in_array($queue['id'],$selected)){
            $queues[$k]['selected'] = true;
        }
    }
    $ss->assign('queues',$queues);
    if($view == "EditView"){
        return $ss->fetch('modules/SA_ContactCenters/Queues/EditUI.tpl');
    }else{
        return $ss->fetch('modules/SA_ContactCenters/Queues/DetailUI.tpl');
    }

}