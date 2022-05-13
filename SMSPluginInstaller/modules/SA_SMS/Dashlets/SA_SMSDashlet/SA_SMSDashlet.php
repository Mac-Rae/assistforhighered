<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_SMS/SA_SMS.php');

classSA_SMSDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_SMS/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_SMS');
        }
        
        $this->searchFields = $dashletData['SA_SMSDashlet']['searchFields'];
        $this->columns = $dashletData['SA_SMSDashlet']['columns'];
        
        $this->seedBean = newSA_SMS();
    }
}