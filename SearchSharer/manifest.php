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
    'description' => 'Allows sharing the results of list view searches',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Search Sharer',
    'published_date' => '2021-08-17 11:19:35',
    'type' => 'module',
    'version' => '1',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SearchSharer.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SearchSharer.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/themes/SuiteP/include/ListView/ListViewPaginationTop.tpl',
            'to' => 'custom/themes/SuiteP/include/ListView/ListViewPaginationTop.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1629195575',
    ];