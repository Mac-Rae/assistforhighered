<?php

$admin_options_defs = [
    'Administration' => [
            'CustomizeFieldDisplay' => [
            'Administration',
            'LBL_CUSTOMIZEFIELDDISPLAY_CONFIG',
            'LBL_CUSTOMIZEFIELDDISPLAY_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=CustomizeFieldDisplay',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_LISTENHANCEMENTS_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
