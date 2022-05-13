<?php

class SA_Audits extends Basic
{

    const MODULE_NAME = 'SA_Audits';
    const TABLE_NAME = 'sa_audits';

    public $new_schema = true;
    public $module_dir = self::MODULE_NAME;
    public $object_name = 'SA_Audits';
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
        if($view == 'edit' || $view == 'save' || $view == 'editview' || $view == 'delete'){
            return false;
        }
        return parent::ACLAccess($view, $is_owner, $in_group);
    }

    public function addChangeLogLink(SA_Audits &$audit,$event,$arguments){
        $audit->change_log_link = $audit->getChangeLogLink($audit,'');
    }

    public function getChangeLogLink($audit,$field){
        global $app_strings;
        $button = <<<EOF
<a 
    id="btn_view_change_log" 
    title="{$app_strings['LNK_VIEW_CHANGE_LOG']}" 
    onclick='open_popup("Audit", "600", "400", "&record={$audit->parent_id}&module_name={$audit->parent_type}", true, false,{});return false;'>
    {$app_strings['LNK_VIEW_CHANGE_LOG']}
</a>
EOF;

return $button;

    }

}
