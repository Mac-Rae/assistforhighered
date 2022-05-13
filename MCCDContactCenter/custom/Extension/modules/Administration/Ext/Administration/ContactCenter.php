<?php

$admin_options_defs = [
    'Administration' => [
            'ContactCenter' => [
            'Administration',
            'LBL_CONTACTCENTER_CONTACT_CENTERS',
            'LBL_CONTACTCENTER_CONTACT_CENTERS_DESCRIPTION',
            './index.php?module=SA_ContactCenters',
        ],
        'ContactCenterCredentials' => [
            'Administration',
            'LBL_CONTACTCENTER_CONTACT_CENTERS_CREDENTIALS',
            'LBL_CONTACTCENTER_CONTACT_CENTERS_CREDENTIALS_DESCRIPTION',
            './index.php?module=Administration&action=ContactCenterCredentials',
        ]
    ]
];
$admin_group_header[] = [
    'LBL_CONTACTCENTER_GROUP_TITLE',
    '',
    false,
    $admin_options_defs,
];
