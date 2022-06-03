<?php

require_once 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_InstitutionsSA_ProgramsButton.php';

$layout_defs['SA_Institutions']['subpanel_setup']['sa_programs'] = array(
    'order' => 0,
    'module' => 'SA_Programs',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_SA_PROGRAMS',
    'get_subpanel_data' => 'sa_programs',
    'top_buttons' => array(
        0 => array(
            'widget_class' => 'SubPanelTopQuickCreateSA_InstitutionsSA_ProgramsButton'
        ),
        1 => array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect'
        )
    )
);
