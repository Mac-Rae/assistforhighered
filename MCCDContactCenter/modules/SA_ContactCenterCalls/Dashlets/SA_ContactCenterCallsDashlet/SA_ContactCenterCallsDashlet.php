<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_ContactCenterCalls/SA_ContactCenterCall.php');

class SA_ContactCenterCallsDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_ContactCenterCalls/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_ContactCenterCalls');
        }
        
        $this->searchFields = $dashletData['SA_ContactCenterCallsDashlet']['searchFields'];
        $this->columns = $dashletData['SA_ContactCenterCallsDashlet']['columns'];
        
        $this->seedBean = new SA_ContactCenterCall();
    }
}