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
    'description' => 'Maintenance Mode Plugin',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Maintenance Mode',
    'published_date' => '2021-02-18 15:14:28',
    'type' => 'module',
    'version' => '2',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/SAMaintenanceMode.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/SAMaintenanceMode.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/MaintenanceMode.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/MaintenanceMode.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.MaintenanceMode.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.MaintenanceMode.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/include/Services/SAMaintenance.php',
            'to' => 'custom/include/Services/SAMaintenance.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/modules/Administration/MaintenanceMode.php',
            'to' => 'custom/modules/Administration/MaintenanceMode.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/modules/Administration/MaintenanceMode.tpl',
            'to' => 'custom/modules/Administration/MaintenanceMode.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1613661268',
    ];