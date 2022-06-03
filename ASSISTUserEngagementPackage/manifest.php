<?php
$manifest = [
    '0' => [
        'acceptable_sugar_versions' => [
            '0' => '',
            ],
        ],
    '1' => [
        'acceptable_sugar_flavors' => [
            '0' => 'CE',
            '1' => 'PRO',
            '2' => 'ENT',
            ],
        ],
    'readme' => '',
    'key' => 'SA',
    'author' => 'SalesAgility',
    'description' => 'ASSIST User Engagement',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST User Engagement',
    'published_date' => '2021-02-22 10:08:34',
    'type' => 'module',
    'version' => '7',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/SABanner.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/SABanner.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/UserEngagement.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/UserEngagement.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.UserEngagement.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.UserEngagement.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/include/Services/SABanner.php',
            'to' => 'custom/include/Services/SABanner.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/modules/Administration/Banner.php',
            'to' => 'custom/modules/Administration/Banner.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/modules/Administration/Banner.tpl',
            'to' => 'custom/modules/Administration/Banner.tpl',
            ],
        '6' => [
            'from' => '<basepath>/custom/modules/Administration/ManualNotifications.php',
            'to' => 'custom/modules/Administration/ManualNotifications.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/modules/Administration/ManualNotifications.tpl',
            'to' => 'custom/modules/Administration/ManualNotifications.tpl',
            ],
        '8' => [
            'from' => '<basepath>/custom/modules/Administration/SendManualNotifications.php',
            'to' => 'custom/modules/Administration/SendManualNotifications.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/modules/Administration/getNotificationUsers.php',
            'to' => 'custom/modules/Administration/getNotificationUsers.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1613988514',
    ];