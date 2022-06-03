<?php

require_once 'custom/modules/SA_ContactCenters/Services/ContactCenterSyncService.php';

class SA_ContactCentersController extends SugarController{
    function action_ContactCenter(){
        $this->view = 'contactcenter';
    }
    function action_ContactCenterUsers(){
        $this->view = 'contactcenterusers';
    }

    function action_CheckConnection(){
        global $current_user;
        if(!$current_user->is_admin){
            return false;
        }
        $cc = new ContactCenterSyncService();
        $queues = $cc->getQueues($_REQUEST['instance_id']);
        echo json_encode($queues);
    }
}