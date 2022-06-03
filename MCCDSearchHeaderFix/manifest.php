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
    'description' => 'Fixes the module name in Elastic Search',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Elastic Search Fix',
    'published_date' => '2021-03-15 16:22:03',
    'type' => 'module',
    'version' => '12',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/SearchEngines/CustomElasticSearchEngine.php',
            'to' => 'custom/Extension/SearchEngines/CustomElasticSearchEngine.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTCustomElastic.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTCustomElastic.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/FixSearch.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/FixSearch.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/lib/Search/UI/CustomSearchFormController.php',
            'to' => 'custom/lib/Search/UI/CustomSearchFormController.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/lib/Search/UI/CustomSearchFormView.php',
            'to' => 'custom/lib/Search/UI/CustomSearchFormView.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/lib/Search/UI/CustomSearchResultsController.php',
            'to' => 'custom/lib/Search/UI/CustomSearchResultsController.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/lib/Search/UI/templates/search.form.tpl',
            'to' => 'custom/lib/Search/UI/templates/search.form.tpl',
            ],
        '7' => [
            'from' => '<basepath>/custom/lib/Search/UI/templates/search.results.tpl',
            'to' => 'custom/lib/Search/UI/templates/search.results.tpl',
            ],
        '8' => [
            'from' => '<basepath>/lib/Search/ElasticSearch/ElasticSearchIndexer.php',
            'to' => 'lib/Search/ElasticSearch/ElasticSearchIndexer.php',
            ],
        '9' => [
            'from' => '<basepath>/lib/Search/Index/AbstractIndexer.php',
            'to' => 'lib/Search/Index/AbstractIndexer.php',
            ],
        '10' => [
            'from' => '<basepath>/lib/Search/SearchResults.php',
            'to' => 'lib/Search/SearchResults.php',
            ],
        '11' => [
            'from' => '<basepath>/lib/Search/UI/SearchResultsController.php',
            'to' => 'lib/Search/UI/SearchResultsController.php',
            ],
        '12' => [
            'from' => '<basepath>/lib/Search/UI/templates/search.results.tpl',
            'to' => 'lib/Search/UI/templates/search.results.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1615825323',
    ];