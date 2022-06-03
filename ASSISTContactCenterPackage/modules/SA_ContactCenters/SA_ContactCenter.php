<?php

class SA_ContactCenter extends Basic
{

    const MODULE_NAME = 'SA_ContactCenters';
    const TABLE_NAME = 'sa_contactcenters';

    public $new_schema = true;
    public $module_dir = self::MODULE_NAME;
    public $object_name = 'SA_ContactCenter';
    public $table_name = self::TABLE_NAME;
    public $importable = true;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }
        
        return false;
    }

    public function ACLAccess($view, $is_owner = 'not_set', $in_group = 'not_set')
    {
        global $current_user;
        if($current_user->isAdmin()){
            return true;
        }
        if($view){
           return false;
        }
        if($current_user->sa_contactcenters_id === $this->id){
            return true;
        }
        return false;
    }

    public function save($check_notify = false)
    {
        $this->queues = encodeMultienumValue($this->queues);
        return parent::save($check_notify);
    }


}
