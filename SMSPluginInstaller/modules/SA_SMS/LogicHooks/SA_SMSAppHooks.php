<?php
class SA_SMSAppHooks{
    public function addJS($event,$args){
        global $app;
        if(!$app->headerDisplayed){
            return;
        }
        echo "<script src='modules/SA_SMS/JS/util.js'></script>";
    }

    public function processNames(&$bean){
        if(!empty($bean->parent_type) && $bean->parent_type == 'Contacts' && !empty($bean->parent_id)){
            $record = BeanFactory::getBean($bean->parent_type,$bean->parent_id);
            $bean->contact_name = $record->get_summary_text();
        }

    }
}