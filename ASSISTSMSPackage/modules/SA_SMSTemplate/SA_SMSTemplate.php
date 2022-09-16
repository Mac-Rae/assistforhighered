<?php
require_once 'modules/EmailTemplates/templateFields.php';
class SA_SMSTemplate extends Basic
{

    const MODULE_NAME = 'SA_SMSTemplate';
    const TABLE_NAME = 'sa_smstemplate';

    public $new_schema = true;
    public $module_dir = self::MODULE_NAME;
    public $object_name = 'SA_SMSTemplate';
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

    public static function display_field_variables($focus, $field){
        $ss = new Sugar_Smarty();
        $ss->assign('INSERT_FIELDS_JS', generateFieldDefsJS2());
        $ss->assign('MODULE_DROPDOWN', genDropDownJS2());
        return $ss->fetch('modules/SA_SMSTemplate/tpls/insertfields.tpl');
    }
}
