<?php

$admin_options_defs = [
    'Administration' => [
            'ASSISTEarlyAlert' => [
            'Administration',
            'LBL_ASSISTEARLYALERT_CONFIG',
            'LBL_ASSISTEARLYALERT_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=ASSISTEarlyAlert',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_ASSISTEARLYALERT_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
