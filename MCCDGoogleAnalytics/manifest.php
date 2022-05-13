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
    'author' => 'Jim Mackin - SalesAgility',
    'description' => 'Google Analytics for ASSIST',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Assist Google analytics',
    'published_date' => '2021-11-01 14:28:49',
    'type' => 'module',
    'version' => '3',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/GoogleAnalytics.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/GoogleAnalytics.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.GoogleAnalytics.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.GoogleAnalytics.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/modules/Administration/GoogleAnalytics.php',
            'to' => 'custom/modules/Administration/GoogleAnalytics.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/modules/Administration/GoogleAnalytics.tpl',
            'to' => 'custom/modules/Administration/GoogleAnalytics.tpl',
            ],
        '4' => [
            'from' => '<basepath>/custom/themes/SuiteP/tpls/_head.tpl',
            'to' => 'custom/themes/SuiteP/tpls/_head.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1635776929',
    ];