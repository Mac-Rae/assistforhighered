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
    'description' => 'Adds an Audit module to the CRM that tracks various actions.',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Auditer Package',
    'published_date' => '2021-02-17 14:20:59',
    'type' => 'module',
    'version' => '2',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_Audits.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_Audits.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_Audits.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_Audits.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/SA_Auditor.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/SA_Auditor.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Audits/Ext/LogicHooks/ChangeLogLink.php',
            'to' => 'custom/Extension/modules/SA_Audits/Ext/LogicHooks/ChangeLogLink.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Audits.gif',
            'to' => 'custom/themes/default/images/CreateSA_Audits.gif',
            ],
        '5' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Audits.svg',
            'to' => 'custom/themes/default/images/CreateSA_Audits.svg',
            ],
        '6' => [
            'from' => '<basepath>/custom/themes/default/images/SA_Audits.gif',
            'to' => 'custom/themes/default/images/SA_Audits.gif',
            ],
        '7' => [
            'from' => '<basepath>/custom/themes/default/images/SA_Audits.svg',
            'to' => 'custom/themes/default/images/SA_Audits.svg',
            ],
        '8' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Audits.gif',
            'to' => 'custom/themes/default/images/icon_SA_Audits.gif',
            ],
        '9' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Audits_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_Audits_32.gif',
            ],
        '10' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Audits_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_Audits_32.svg',
            ],
        '11' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_Audits.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_Audits.svg',
            ],
        '12' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_Audits.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_Audits.svg',
            ],
        '13' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_Audits.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_Audits.svg',
            ],
        '14' => [
            'from' => '<basepath>/modules/SA_Audits/Dashlets/SA_AuditsDashlet/SA_AuditsDashlet.meta.php',
            'to' => 'modules/SA_Audits/Dashlets/SA_AuditsDashlet/SA_AuditsDashlet.meta.php',
            ],
        '15' => [
            'from' => '<basepath>/modules/SA_Audits/Dashlets/SA_AuditsDashlet/SA_AuditsDashlet.php',
            'to' => 'modules/SA_Audits/Dashlets/SA_AuditsDashlet/SA_AuditsDashlet.php',
            ],
        '16' => [
            'from' => '<basepath>/modules/SA_Audits/Menu.php',
            'to' => 'modules/SA_Audits/Menu.php',
            ],
        '17' => [
            'from' => '<basepath>/modules/SA_Audits/SA_Audits.php',
            'to' => 'modules/SA_Audits/SA_Audits.php',
            ],
        '18' => [
            'from' => '<basepath>/modules/SA_Audits/Services/SAAuditor.php',
            'to' => 'modules/SA_Audits/Services/SAAuditor.php',
            ],
        '19' => [
            'from' => '<basepath>/modules/SA_Audits/language/en_us.lang.php',
            'to' => 'modules/SA_Audits/language/en_us.lang.php',
            ],
        '20' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/SearchFields.php',
            'to' => 'modules/SA_Audits/metadata/SearchFields.php',
            ],
        '21' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_Audits/metadata/dashletviewdefs.php',
            ],
        '22' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/detailviewdefs.php',
            'to' => 'modules/SA_Audits/metadata/detailviewdefs.php',
            ],
        '23' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/editviewdefs.php',
            'to' => 'modules/SA_Audits/metadata/editviewdefs.php',
            ],
        '24' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/listviewdefs.php',
            'to' => 'modules/SA_Audits/metadata/listviewdefs.php',
            ],
        '25' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/metafiles.php',
            'to' => 'modules/SA_Audits/metadata/metafiles.php',
            ],
        '26' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/popupdefs.php',
            'to' => 'modules/SA_Audits/metadata/popupdefs.php',
            ],
        '27' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_Audits/metadata/quickcreatedefs.php',
            ],
        '28' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/searchdefs.php',
            'to' => 'modules/SA_Audits/metadata/searchdefs.php',
            ],
        '29' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/studio.php',
            'to' => 'modules/SA_Audits/metadata/studio.php',
            ],
        '30' => [
            'from' => '<basepath>/modules/SA_Audits/metadata/subpanels/default.php',
            'to' => 'modules/SA_Audits/metadata/subpanels/default.php',
            ],
        '31' => [
            'from' => '<basepath>/modules/SA_Audits/vardefs.php',
            'to' => 'modules/SA_Audits/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1613571659',
    ];