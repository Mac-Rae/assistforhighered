<?php

$admin_options_defs = [
    'Administration' => [
            'Banner' => [
            'Administration',
            'LBL_BANNER_CONFIG',
            'LBL_BANNER_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=Banner',
        ],
        'ManualNotifications' => [
            'Administration',
            'LBL_MANUALNOTIFICATIONS_CONFIG',
            'LBL_MANUALNOTIFICATIONS_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=ManualNotifications',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_USER_ENGAGEMENT_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];