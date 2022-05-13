<?php

$admin_options_defs = [
    'Administration' => [
            'MaintenanceMode' => [
            'Administration',
            'LBL_MAINTENANCEMODE_CONFIG',
            'LBL_MAINTENANCEMODE_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=MaintenanceMode',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_MAINTENANCEMODE_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
