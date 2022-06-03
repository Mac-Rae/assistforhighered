<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'include/MVC/View/SugarView.php';

class SA_ContactCentersViewContactCenter extends SugarView
{
    public function display()
    {
        global $current_user, $mod_strings, $timedate;
        $id = $this->bean->id;
        if(!$current_user->is_admin && $id !== $current_user->sa_contactcenters_id){
            SugarApplication::appendErrorMessage($mod_strings['LBL_NO_CONTACT_CENTER_FOUND']);
            SugarApplication::redirect('index.php');
            return;
        }
        $contactCenter = $this->bean;
        if(empty($contactCenter->id)){
            SugarApplication::appendErrorMessage($mod_strings['LBL_NO_CONTACT_CENTER_FOUND']);
            SugarApplication::redirect('index.php');
            return;
        }
        $this->ss->assign('contact_center_url',$contactCenter->instance_url);
        $this->ss->assign('contact_center_region',$contactCenter->instance_region);

        $cc = new ContactCenterSyncService();
        $stats = $cc->getStats($contactCenter);
        if(empty($contactCenter->queues) || empty(unencodeMultienum($contactCenter->queues))){
            $this->ss->assign('noQueues',true);
        }
        $this->ss->assign('stats',$stats);
        $this->ss->assign('contactCenter',$contactCenter->toArray());
        $this->ss->assign('lastUpdate',$timedate->now());
        $this->ss->assign('autoRefresh',!empty($_REQUEST['auto_refresh']));

        echo $this->ss->fetch('modules/SA_ContactCenters/ContactCenter/tpls/ContactCenter.tpl');

    }
}
