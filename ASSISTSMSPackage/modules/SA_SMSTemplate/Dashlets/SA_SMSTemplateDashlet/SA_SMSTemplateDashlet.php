<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_SMSTemplate/SA_SMSTemplate.php');

class SA_SMSTemplateDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_SMSTemplate/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_SMSTemplate');
        }
        
        $this->searchFields = $dashletData['SA_SMSTemplateDashlet']['searchFields'];
        $this->columns = $dashletData['SA_SMSTemplateDashlet']['columns'];
        
        $this->seedBean = newSA_SMSTemplate();
    }
}