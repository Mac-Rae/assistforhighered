<?php

$admin_options_defs = [
    'Administration' => [
            'ASSISTTheme' => [
            'Administration',
            'LBL_ASSISTTHEME_CONFIG',
            'LBL_ASSISTTHEME_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=ASSISTTheme',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_ASSISTTHEME_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
