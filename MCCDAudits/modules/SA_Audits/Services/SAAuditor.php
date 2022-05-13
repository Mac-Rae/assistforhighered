<?php

class SAAuditor{

    function newAudit(SugarBean $target, $action){
        global $current_user;
        $audit = BeanFactory::newBean('SA_Audits');
        $audit->name = $current_user->get_summary_text() . " $action ".$target->module_name;
        $audit->assigned_user_id = $current_user->id;
        $audit->description = "";
        $audit->parent_type = $target->module_name;
        $audit->parent_id = $target->id;
        $audit->ip_address = $_SERVER['REMOTE_ADDR'];
        $audit->audit_action = $action;
        $audit->save();
        return $audit;
    }

    function afterLogin(User $user,$event){
        $this->newAudit($user,"Login");

    }
    function afterLogout($event)
    {
        global $current_user;
        $this->newAudit($current_user,"Logout");
    }

    function afterSave(SugarBean $bean, $event, $arguments){
        if(!$this->isAuditableModule($bean->module_name)){
            return;
        }
        $action = 'Update';
        if(empty($bean->fetched_row) || empty($bean->id) || $bean->new_with_id){
            $action = 'Create';
        }
        $this->newAudit($bean,$action);
    }

    function afterDelete(SugarBean $bean, $even, $arguments){
        if(!$this->isAuditableModule($bean->module_name)){
            return;
        }
        $this->newAudit($bean,"Delete");
    }
    function afterRestore(SugarBean $bean, $even, $arguments){
        if(!$this->isAuditableModule($bean->module_name)){
            return;
        }
        $this->newAudit($bean,"Restore");
    }

    function isAuditableModule($module){
        global $sugar_config;
        if($module == 'SA_Audits'){
            return;
        }
        if(empty($sugar_config['SAAudits']['module_blacklist'])){
            return true;
        }
        return !in_array($module,$sugar_config['SAAudits']['module_blacklist']);
    }
}