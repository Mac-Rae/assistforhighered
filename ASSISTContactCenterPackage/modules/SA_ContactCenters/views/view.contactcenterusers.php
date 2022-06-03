<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'include/MVC/View/SugarView.php';

class SA_ContactCentersViewContactCenterUsers extends SugarView
{
    public function display()
    {
        global $current_user, $mod_strings;
        $id = $this->bean->id;
        if(!$current_user->is_admin && $id !== $current_user->managed_sa_contactcenters_id){
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

        $cc = new ContactCenterSyncService();
        $agents = $cc->getAgents($contactCenter);

        $this->ss->assign('agents',$agents);
        $this->ss->assign('contactCenter',$contactCenter->toArray());

        echo $this->ss->fetch('modules/SA_ContactCenters/ContactCenter/tpls/ContactCenterAgents.tpl');

    }
}
