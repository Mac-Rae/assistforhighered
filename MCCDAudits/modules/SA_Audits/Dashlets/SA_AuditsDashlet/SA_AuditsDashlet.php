<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_Audits/SA_Audits.php');

class SA_AuditsDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_Audits/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_Audits');
        }
        
        $this->searchFields = $dashletData['SA_AuditsDashlet']['searchFields'];
        $this->columns = $dashletData['SA_AuditsDashlet']['columns'];
        
        $this->seedBean = new SA_Audits();
    }
}