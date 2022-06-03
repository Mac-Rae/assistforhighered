<?php

$admin_options_defs = [
    'Administration' => [
            'PublicProfile' => [
            'Administration',
            'LBL_PUBLICPROFILE_CONFIG',
            'LBL_PUBLICPROFILE_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=PublicProfile',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_PUBLICPROFILE_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
