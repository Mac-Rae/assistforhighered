<?php
require_once 'custom/modules/SA_ContactCenters/Services/ContactCenterSyncService.php';
function showCheckConnection(){
    $ss = new Sugar_Smarty();
    return $ss->fetch('modules/SA_ContactCenters/ContactCenter/tpls/checkConnection.tpl');
}

function displayStats($contactCenter){
    $ss = new Sugar_Smarty();
    $cc = new ContactCenterSyncService();
    $stats = $cc->getStats($contactCenter);
    if(empty($contactCenter->queues) || empty(unencodeMultienum($contactCenter->queues))){
        $ss->assign('noQueues',true);
    }
    $ss->assign('stats',$stats);
    return $ss->fetch('modules/SA_ContactCenters/ContactCenter/tpls/Stats.tpl');
}

