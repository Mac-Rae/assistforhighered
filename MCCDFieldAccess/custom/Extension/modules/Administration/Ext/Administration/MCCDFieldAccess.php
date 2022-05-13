<?php

$admin_options_defs = [
    'Administration' => [
            'MCCDFieldAccess' => [
            'Administration',
            'LBL_MCCDFIELDACCESS_CONFIG',
            'LBL_MCCDFIELDACCESS_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=MCCDFieldAccess',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_MCCDFIELDACCESS_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
