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
    'description' => 'Allows configuring the calendar name for the google sync',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Google Calendar Name',
    'published_date' => '2021-09-16 13:15:00',
    'type' => 'module',
    'version' => '1',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/include/GoogleSync/GoogleSyncBase.php',
            'to' => 'include/GoogleSync/GoogleSyncBase.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1631794500',
    ];