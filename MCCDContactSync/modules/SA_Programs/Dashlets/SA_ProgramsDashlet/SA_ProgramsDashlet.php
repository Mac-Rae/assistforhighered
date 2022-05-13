<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_Programs/SA_Program.php');

classSA_ProgramsDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_Programs/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_Programs');
        }
        
        $this->searchFields = $dashletData['SA_ProgramsDashlet']['searchFields'];
        $this->columns = $dashletData['SA_ProgramsDashlet']['columns'];
        
        $this->seedBean = newSA_Program();
    }
}