<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_DashboardTemplates/SA_DashboardTemplate.php');

classSA_DashboardTemplatesDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_DashboardTemplates/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_DashboardTemplates');
        }
        
        $this->searchFields = $dashletData['SA_DashboardTemplatesDashlet']['searchFields'];
        $this->columns = $dashletData['SA_DashboardTemplatesDashlet']['columns'];
        
        $this->seedBean = newSA_DashboardTemplate();
    }
}