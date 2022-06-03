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
    'description' => 'Optimizations for the ASSIST Instance',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Optimizations',
    'published_date' => '2021-09-23 14:59:19',
    'type' => 'module',
    'version' => '14',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/ASSISTPrimaryEmailsHook.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/ASSISTPrimaryEmailsHook.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTElastic.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTElastic.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.ForceSave.php',
            'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.ForceSave.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/include/Services/ASSISTPrimaryEmailsHook.php',
            'to' => 'custom/include/Services/ASSISTPrimaryEmailsHook.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopScheduleCallButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopScheduleCallButton.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/modules/Administration/ElasticSearchSettings.php',
            'to' => 'custom/modules/Administration/ElasticSearchSettings.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/modules/Administration/ASSIST/ASSISTElasticController.php',
            'to' => 'custom/modules/Administration/ASSIST/ASSISTElasticController.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/modules/Administration/ASSIST/ASSISTElasticView.php',
            'to' => 'custom/modules/Administration/ASSIST/ASSISTElasticView.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/modules/Administration/ASSIST/view.tpl',
            'to' => 'custom/modules/Administration/ASSIST/view.tpl',
            ],
        '9' => [
            'from' => '<basepath>/custom/modules/Contacts/metadata/SearchFields.php',
            'to' => 'custom/modules/Contacts/metadata/SearchFields.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/modules/Contacts/views/view.list.php',
            'to' => 'custom/modules/Contacts/views/view.list.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/modules/ModuleBuilder/controller.php',
            'to' => 'custom/modules/ModuleBuilder/controller.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/modules/ModuleBuilder/views/view.listview.php',
            'to' => 'custom/modules/ModuleBuilder/views/view.listview.php',
            ],
        '13' => [
            'from' => '<basepath>/lib/Search/ElasticSearch/ElasticSearchIndexer.php',
            'to' => 'lib/Search/ElasticSearch/ElasticSearchIndexer.php',
            ],
        '14' => [
            'from' => '<basepath>/lib/Search/ElasticSearch/ElasticSearchModuleDataPuller.php',
            'to' => 'lib/Search/ElasticSearch/ElasticSearchModuleDataPuller.php',
            ],
        '15' => [
            'from' => '<basepath>/lib/Search/SearchResults.php',
            'to' => 'lib/Search/SearchResults.php',
            ],
        '16' => [
            'from' => '<basepath>/modules/AOR_Reports/aor_utils.php',
            'to' => 'modules/AOR_Reports/aor_utils.php',
            ],
        '17' => [
            'from' => '<basepath>/modules/Administration/repairDatabase.php',
            'to' => 'modules/Administration/repairDatabase.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1632405559',
    ];