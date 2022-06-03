<?php

$admin_options_defs = [
    'Administration' => [
            'MaricopaTheme' => [
            'Administration',
            'LBL_MARICOPATHEME_CONFIG',
            'LBL_MARICOPATHEME_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=MaricopaTheme',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_MARICOPATHEME_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
