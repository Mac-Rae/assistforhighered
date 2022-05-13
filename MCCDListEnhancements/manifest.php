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
    'description' => 'MCCD List Enhancements',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD List Enhancements',
    'published_date' => '2021-02-23 16:10:53',
    'type' => 'module',
    'version' => '7',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/CustomizeFieldDisplay.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/CustomizeFieldDisplay.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/ListEnhancements.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/ListEnhancements.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.ListEnhancements.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.ListEnhancements.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/include/Services/CustomizeFieldDisplay.php',
            'to' => 'custom/include/Services/CustomizeFieldDisplay.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/modules/Administration/CustomizeFieldDisplay.php',
            'to' => 'custom/modules/Administration/CustomizeFieldDisplay.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/modules/Administration/CustomizeFieldDisplay.tpl',
            'to' => 'custom/modules/Administration/CustomizeFieldDisplay.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1614096653',
    ];