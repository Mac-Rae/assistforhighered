<?php

$admin_options_defs = [
    'Administration' => [
        'DashboardTemplates' => [
            'Administration',
            'LBL_DASHBOARDEDITOR_TEMPLATES',
            'LBL_DASHBOARDEDITOR_TEMPLATES_DESCRIPTION',
            './index.php?module=Administration&action=DashboardTemplates',
        ],
        'DashboardEditor' => [
            'Administration',
            'LBL_DASHBOARDEDITOR_CONFIG',
            'LBL_DASHBOARDEDITOR_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=DashboardEditor',
        ],
    ]
];
$admin_group_header[] = [
    'LBL_DASHBOARDEDITOR_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
