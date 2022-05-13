<?php


class SAMaintenance
{

    function getUserType(){
        session_start();
        if(empty($_SESSION['authenticated_user_id'])){
            return "Unauthenticated";
        }
        $user = BeanFactory::getBean('Users',$_SESSION['authenticated_user_id']);
        if(empty($user->id)){
            return "Unauthenticated";
        }
        if($user->is_admin){
            return "Admin";
        }
        return "Regular";
    }

    function checkMaintenance($event){
        global $sugar_config;
        if(empty($sugar_config['maintenancemode']['enabled'])){
            return;
        }
        if(empty($sugar_config['maintenancemode']['page'])) {
            return;
        }
        $userType = $this->getUserType();
        if($userType == 'Admin' || $userType == 'Unauthenticated'){
            return;
        }
        session_destroy();
        echo html_entity_decode($sugar_config['maintenancemode']['page']);
        sugar_die("");
    }

}