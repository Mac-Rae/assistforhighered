<?php

$admin_options_defs = [
    'Administration' => [
            'ASSISTFieldAccess' => [
            'Administration',
            'LBL_ASSISTFIELDACCESS_CONFIG',
            'LBL_ASSISTFIELDACCESS_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=ASSISTFieldAccess',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_ASSISTFIELDACCESS_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
