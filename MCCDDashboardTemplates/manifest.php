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
    'key' => '',
    'author' => 'Jim Mackin - SalesAgility',
    'description' => 'Allow setting default dashboards for roles',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Dashboard Templates',
    'published_date' => '2021-04-06 16:18:38',
    'type' => 'module',
    'version' => '7',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_DashboardTemplates.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_DashboardTemplates.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_DashboardTemplates.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_DashboardTemplates.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/DashboardEditor.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/DashboardEditor.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.DashboardEditor.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.DashboardEditor.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/LogicHooks/MCCDDashboardSetting.php',
            'to' => 'custom/Extension/modules/Users/Ext/LogicHooks/MCCDDashboardSetting.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/modules/Administration/DashboardEditor.php',
            'to' => 'custom/modules/Administration/DashboardEditor.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/modules/Administration/DashboardEditor.tpl',
            'to' => 'custom/modules/Administration/DashboardEditor.tpl',
            ],
        '7' => [
            'from' => '<basepath>/custom/modules/Administration/DashboardTemplates.php',
            'to' => 'custom/modules/Administration/DashboardTemplates.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/modules/Administration/DashboardTemplates.tpl',
            'to' => 'custom/modules/Administration/DashboardTemplates.tpl',
            ],
        '9' => [
            'from' => '<basepath>/custom/modules/Administration/mccdApplyDashboardTemplates.php',
            'to' => 'custom/modules/Administration/mccdApplyDashboardTemplates.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_DashboardTemplates.gif',
            'to' => 'custom/themes/default/images/CreateSA_DashboardTemplates.gif',
            ],
        '11' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_DashboardTemplates.svg',
            'to' => 'custom/themes/default/images/CreateSA_DashboardTemplates.svg',
            ],
        '12' => [
            'from' => '<basepath>/custom/themes/default/images/SA_DashboardTemplates.gif',
            'to' => 'custom/themes/default/images/SA_DashboardTemplates.gif',
            ],
        '13' => [
            'from' => '<basepath>/custom/themes/default/images/SA_DashboardTemplates.svg',
            'to' => 'custom/themes/default/images/SA_DashboardTemplates.svg',
            ],
        '14' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_DashboardTemplates.gif',
            'to' => 'custom/themes/default/images/icon_SA_DashboardTemplates.gif',
            ],
        '15' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_DashboardTemplates_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_DashboardTemplates_32.gif',
            ],
        '16' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_DashboardTemplates_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_DashboardTemplates_32.svg',
            ],
        '17' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_DashboardTemplates.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_DashboardTemplates.svg',
            ],
        '18' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_DashboardTemplates.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_DashboardTemplates.svg',
            ],
        '19' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_DashboardTemplates.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_DashboardTemplates.svg',
            ],
        '20' => [
            'from' => '<basepath>/modules/SA_DashboardTemplates/Dashlets/SA_DashboardTemplatesDashlet/SA_DashboardTemplatesDashlet.meta.php',
            'to' => 'modules/SA_DashboardTemplates/Dashlets/SA_DashboardTemplatesDashlet/SA_DashboardTemplatesDashlet.meta.php',
            ],
        '21' => [
            'from' => '<basepath>/modules/SA_DashboardTemplates/Dashlets/SA_DashboardTemplatesDashlet/SA_DashboardTemplatesDashlet.php',
            'to' => 'modules/SA_DashboardTemplates/Dashlets/SA_DashboardTemplatesDashlet/SA_DashboardTemplatesDashlet.php',
            ],
        '22' => [
            'from' => '<basepath>/modules/SA_DashboardTemplates/MCCDTemplateHooks.php',
            'to' => 'modules/SA_DashboardTemplates/MCCDTemplateHooks.php',
            ],
        '23' => [
            'from' => '<basepath>/modules/SA_DashboardTemplates/SA_DashboardTemplate.php',
            'to' => 'modules/SA_DashboardTemplates/SA_DashboardTemplate.php',
            ],
        '24' => [
            'from' => '<basepath>/modules/SA_DashboardTemplates/language/en_us.lang.php',
            'to' => 'modules/SA_DashboardTemplates/language/en_us.lang.php',
            ],
        '25' => [
            'from' => '<basepath>/modules/SA_DashboardTemplates/vardefs.php',
            'to' => 'modules/SA_DashboardTemplates/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1617722318',
    ];