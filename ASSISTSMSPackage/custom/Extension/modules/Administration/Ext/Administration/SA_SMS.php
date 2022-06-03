<?php
$admin_options_defs = [
    'Administration' => [
        'SA_SMS' => [
            'Administration',
            'LBL_SA_SMS_CONFIG',
            'LBL_SA_SMS_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=SA_SMS',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_SA_SMS_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
