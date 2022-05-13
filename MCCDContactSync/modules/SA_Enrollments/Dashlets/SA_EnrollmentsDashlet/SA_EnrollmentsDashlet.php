<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once ('include/Dashlets/DashletGeneric.php');
require_once ('modules/SA_Enrollments/SA_Enrollment.php');

classSA_EnrollmentsDashlet extends DashletGeneric
{

    function __construct($id, $def = null)
    {
        global $current_user, $app_strings;
        require ('modules/SA_Enrollments/metadata/dashletviewdefs.php');
        
        parent::__construct($id, $def);
        
        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SA_Enrollments');
        }
        
        $this->searchFields = $dashletData['SA_EnrollmentsDashlet']['searchFields'];
        $this->columns = $dashletData['SA_EnrollmentsDashlet']['columns'];
        
        $this->seedBean = newSA_Enrollment();
    }
}