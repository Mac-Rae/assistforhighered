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
    'description' => 'ASSIST Early Alert Package',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Early Alert Package',
    'published_date' => '2022-09-12 14:37:12',
    'type' => 'module',
    'version' => '3',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/ASSISTEarlyAlert.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/ASSISTEarlyAlert.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTEarlyAlert.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTEarlyAlert.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTEarlyAlert.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTEarlyAlert.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTEarlyAlert.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTEarlyAlert.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTEarlyAlert.php',
            'to' => 'custom/modules/Administration/ASSISTEarlyAlert.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTEarlyAlert.tpl',
            'to' => 'custom/modules/Administration/ASSISTEarlyAlert.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Contacts/Services/ASSISTEarlyAlert.php',
            'to' => 'custom/modules/Contacts/Services/ASSISTEarlyAlert.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Contacts/tpls/ASSISTEarlyAlert.tpl',
            'to' => 'custom/modules/Contacts/tpls/ASSISTEarlyAlert.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1662989832',
    ];