<?php

require_once 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_ContactCentersUsersButton.php';

$layout_defs['SA_ContactCenters']['subpanel_setup']['users'] = array(
    'order' => 0,
    'module' => 'Users',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_USERS',
    'get_subpanel_data' => 'users',
    'top_buttons' => array(
        0 => array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect'
        )
    )
);
