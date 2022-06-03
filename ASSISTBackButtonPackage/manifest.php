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
    'description' => 'ASSIST - Back Button',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Back Button',
    'published_date' => '2022-02-07 14:28:06',
    'type' => 'module',
    'version' => '4',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTMenus.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTMenus.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Menus/ASSISTMenus.php',
            'to' => 'custom/Extension/application/Ext/Menus/ASSISTMenus.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1644244086',
    ];