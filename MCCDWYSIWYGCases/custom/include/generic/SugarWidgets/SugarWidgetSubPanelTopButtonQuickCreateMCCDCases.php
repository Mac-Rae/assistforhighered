<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class SugarWidgetSubPanelTopButtonQuickCreateMCCDCases extends SugarWidgetSubPanelTopButtonQuickCreate
{
    public function __construct($layoutDef = "",$module = '', $title = '', $access_key = '', $form_value = 'LBL_NEW_BUTTON_LABEL')
    {
        parent::__construct($module, $title, $access_key, $form_value);
    }

    public function &_get_form($defines, $additionalFormFields = null, $asUrl = false)
    {
        if(empty($additionalFormFields)){
            $additionalFormFields = [];
        }
        $additionalFormFields['parent_type'] = $this->parent_bean->module_name;
        $additionalFormFields['parent_id'] = $this->parent_bean->id;
        $additionalFormFields['parent_name'] = $this->parent_bean->name;
        return parent::_get_form($defines, $additionalFormFields, $asUrl);
    }
}
