<?php

$admin_options_defs = [
    'Administration' => [
            'GoogleAnalytics' => [
            'Administration',
            'LBL_GOOGLEANALYTICS_CONFIG',
            'LBL_GOOGLEANALYTICS_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=GoogleAnalytics',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_GOOGLEANALYTICS_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
