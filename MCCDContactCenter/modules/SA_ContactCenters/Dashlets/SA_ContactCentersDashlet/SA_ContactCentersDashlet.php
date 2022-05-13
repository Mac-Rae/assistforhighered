<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_ContactCenters/SA_ContactCenter.php');

classSA_ContactCentersDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_ContactCenters/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_ContactCenters');
        }
        
        $this->searchFields = $dashletData['SA_ContactCentersDashlet']['searchFields'];
        $this->columns = $dashletData['SA_ContactCentersDashlet']['columns'];
        
        $this->seedBean = newSA_ContactCenter();
    }
}