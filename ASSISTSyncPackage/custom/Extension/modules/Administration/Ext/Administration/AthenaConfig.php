<?php

$admin_options_defs = [
    'Administration' => [
            'AthenaConfig' => [
            'Administration',
            'LBL_ATHENACONFIG_CONFIG',
            'LBL_ATHENACONFIG_CONFIG_DESCRIPTION',
            './index.php?module=Administration&action=AthenaConfig',
        ],
        'AthenaFieldConfig' => [
            'Administration',
            'LBL_ATHENACONFIG_FIELDCONFIG',
            'LBL_ATHENACONFIG_FIELDCONFIG_DESCRIPTION',
            './index.php?module=Administration&action=AthenaFieldConfig',
        ],
        'AthenaHistoricFieldConfig' => [
            'Administration',
            'LBL_ATHENACONFIG_HISTORICFIELDCONFIG',
            'LBL_ATHENACONFIG_HISTORICFIELDCONFIG_DESCRIPTION',
            './index.php?module=Administration&action=AthenaHistoricFieldConfig',
        ],
        'AthenaBulkImport' => [
            'Administration',
            'LBL_ATHENACONFIG_BULKIMPORT',
            'LBL_ATHENACONFIG_BULKIMPORT_DESCRIPTION',
            './index.php?module=Administration&action=AthenaBulkImport',
        ],
        'AthenaSyncResults' => [
            'Administration',
            'LBL_ATHENACONFIG_SYNC_RESULTS',
            'LBL_ATHENACONFIG_SYNC_RESULTS_DESCRIPTION',
            './index.php?module=SA_AthenaSyncLogs',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_ATHENACONFIG_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
