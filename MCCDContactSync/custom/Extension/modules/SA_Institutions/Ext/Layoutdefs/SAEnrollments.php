<?php

require_once 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_InstitutionsSA_EnrollmentsButton.php';

$layout_defs['SA_Institutions']['subpanel_setup']['sa_enrollments'] = array(
    'order' => 0,
    'module' => 'SA_Enrollments',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_SA_ENROLLMENTS',
    'get_subpanel_data' => 'sa_enrollments',
    'top_buttons' => array(
        0 => array(
            'widget_class' => 'SubPanelTopQuickCreateSA_InstitutionsSA_EnrollmentsButton'
        ),
        1 => array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect'
        )
    )
);
