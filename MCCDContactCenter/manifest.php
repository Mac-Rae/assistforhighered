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
    'description' => 'ASSIST Contact Center Plugin',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Contact Center',
    'published_date' => '2021-04-19 16:32:40',
    'type' => 'module',
    'version' => '37',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_ContactCenterCalls.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_ContactCenterCalls.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_ContactCenters.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_ContactCenters.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_ContactCenterCalls.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_ContactCenterCalls.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_ContactCenters.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_ContactCenters.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/ContactCenterHooks.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/ContactCenterHooks.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Utils/ContactCenter.php',
            'to' => 'custom/Extension/application/Ext/Utils/ContactCenter.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/ContactCenter.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/ContactCenter.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.ContactCenter.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.ContactCenter.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/Language/en_us.Users.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/Language/en_us.Users.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/Language/en_us.customsa_contactcenters_users_1.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/Language/en_us.customsa_contactcenters_users_1.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/Layoutdefs/Users.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/Layoutdefs/Users.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/Layoutdefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/Layoutdefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/LogicHooks/ContactCenterUsers.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/LogicHooks/ContactCenterUsers.php',
            ],
        '13' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/Vardefs/Users.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/Vardefs/Users.php',
            ],
        '14' => [
            'from' => '<basepath>/custom/Extension/modules/SA_ContactCenters/Ext/Vardefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            'to' => 'custom/Extension/modules/SA_ContactCenters/Ext/Vardefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            ],
        '15' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.SAContactCenters.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.SAContactCenters.php',
            ],
        '16' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.customsa_contactcenters_users_1.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.customsa_contactcenters_users_1.php',
            ],
        '17' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Vardefs/SAContactCenters.php',
            'to' => 'custom/Extension/modules/Users/Ext/Vardefs/SAContactCenters.php',
            ],
        '18' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Vardefs/sa_contactcenters_users_1_Users.php',
            'to' => 'custom/Extension/modules/Users/Ext/Vardefs/sa_contactcenters_users_1_Users.php',
            ],
        '19' => [
            'from' => '<basepath>/custom/Extension/modules/relationships/language/SA_ContactCenters.php',
            'to' => 'custom/Extension/modules/relationships/language/SA_ContactCenters.php',
            ],
        '20' => [
            'from' => '<basepath>/custom/Extension/modules/relationships/language/Users.php',
            'to' => 'custom/Extension/modules/relationships/language/Users.php',
            ],
        '21' => [
            'from' => '<basepath>/custom/Extension/modules/relationships/layoutdefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            'to' => 'custom/Extension/modules/relationships/layoutdefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            ],
        '22' => [
            'from' => '<basepath>/custom/Extension/modules/relationships/layoutdefs/sa_contactcenters_users_1_Users.php',
            'to' => 'custom/Extension/modules/relationships/layoutdefs/sa_contactcenters_users_1_Users.php',
            ],
        '23' => [
            'from' => '<basepath>/custom/Extension/modules/relationships/vardefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            'to' => 'custom/Extension/modules/relationships/vardefs/sa_contactcenters_users_1_SA_ContactCenters.php',
            ],
        '24' => [
            'from' => '<basepath>/custom/Extension/modules/relationships/vardefs/sa_contactcenters_users_1_Users.php',
            'to' => 'custom/Extension/modules/relationships/vardefs/sa_contactcenters_users_1_Users.php',
            ],
        '25' => [
            'from' => '<basepath>/custom/include/ASSIST/lib/aws.phar',
            'to' => 'custom/include/ASSIST/lib/aws.phar',
            ],
        '26' => [
            'from' => '<basepath>/custom/include/Services/SAContactCenterHooks.php',
            'to' => 'custom/include/Services/SAContactCenterHooks.php',
            ],
        '27' => [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_ContactCentersUsersButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_ContactCentersUsersButton.php',
            ],
        '28' => [
            'from' => '<basepath>/custom/modules/Administration/ContactCenterCredentials.php',
            'to' => 'custom/modules/Administration/ContactCenterCredentials.php',
            ],
        '29' => [
            'from' => '<basepath>/custom/modules/Administration/ContactCenterCredentials.tpl',
            'to' => 'custom/modules/Administration/ContactCenterCredentials.tpl',
            ],
        '30' => [
            'from' => '<basepath>/custom/modules/SA_ContactCenters/Services/ContactCenterSyncService.php',
            'to' => 'custom/modules/SA_ContactCenters/Services/ContactCenterSyncService.php',
            ],
        '31' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_ContactCenterCalls.gif',
            'to' => 'custom/themes/default/images/CreateSA_ContactCenterCalls.gif',
            ],
        '32' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_ContactCenterCalls.svg',
            'to' => 'custom/themes/default/images/CreateSA_ContactCenterCalls.svg',
            ],
        '33' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_ContactCenters.gif',
            'to' => 'custom/themes/default/images/CreateSA_ContactCenters.gif',
            ],
        '34' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_ContactCenters.svg',
            'to' => 'custom/themes/default/images/CreateSA_ContactCenters.svg',
            ],
        '35' => [
            'from' => '<basepath>/custom/themes/default/images/SA_ContactCenterCalls.gif',
            'to' => 'custom/themes/default/images/SA_ContactCenterCalls.gif',
            ],
        '36' => [
            'from' => '<basepath>/custom/themes/default/images/SA_ContactCenterCalls.svg',
            'to' => 'custom/themes/default/images/SA_ContactCenterCalls.svg',
            ],
        '37' => [
            'from' => '<basepath>/custom/themes/default/images/SA_ContactCenters.gif',
            'to' => 'custom/themes/default/images/SA_ContactCenters.gif',
            ],
        '38' => [
            'from' => '<basepath>/custom/themes/default/images/SA_ContactCenters.svg',
            'to' => 'custom/themes/default/images/SA_ContactCenters.svg',
            ],
        '39' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_ContactCenterCalls.gif',
            'to' => 'custom/themes/default/images/icon_SA_ContactCenterCalls.gif',
            ],
        '40' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_ContactCenterCalls_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_ContactCenterCalls_32.gif',
            ],
        '41' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_ContactCenterCalls_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_ContactCenterCalls_32.svg',
            ],
        '42' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_ContactCenters.gif',
            'to' => 'custom/themes/default/images/icon_SA_ContactCenters.gif',
            ],
        '43' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_ContactCenters_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_ContactCenters_32.gif',
            ],
        '44' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_ContactCenters_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_ContactCenters_32.svg',
            ],
        '45' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_ContactCenterCalls.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_ContactCenterCalls.svg',
            ],
        '46' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_ContactCenters.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_ContactCenters.svg',
            ],
        '47' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_ContactCenterCalls.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_ContactCenterCalls.svg',
            ],
        '48' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_ContactCenters.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_ContactCenters.svg',
            ],
        '49' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_ContactCenterCalls.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_ContactCenterCalls.svg',
            ],
        '50' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_ContactCenters.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_ContactCenters.svg',
            ],
        '51' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/Dashlets/SA_ContactCenterCallsDashlet/SA_ContactCenterCallsDashlet.meta.php',
            'to' => 'modules/SA_ContactCenterCalls/Dashlets/SA_ContactCenterCallsDashlet/SA_ContactCenterCallsDashlet.meta.php',
            ],
        '52' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/Dashlets/SA_ContactCenterCallsDashlet/SA_ContactCenterCallsDashlet.php',
            'to' => 'modules/SA_ContactCenterCalls/Dashlets/SA_ContactCenterCallsDashlet/SA_ContactCenterCallsDashlet.php',
            ],
        '53' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/Menu.php',
            'to' => 'modules/SA_ContactCenterCalls/Menu.php',
            ],
        '54' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/SA_ContactCenterCall.php',
            'to' => 'modules/SA_ContactCenterCalls/SA_ContactCenterCall.php',
            ],
        '55' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/language/en_us.lang.php',
            'to' => 'modules/SA_ContactCenterCalls/language/en_us.lang.php',
            ],
        '56' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/SearchFields.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/SearchFields.php',
            ],
        '57' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/dashletviewdefs.php',
            ],
        '58' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/detailviewdefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/detailviewdefs.php',
            ],
        '59' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/editviewdefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/editviewdefs.php',
            ],
        '60' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/listviewdefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/listviewdefs.php',
            ],
        '61' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/metafiles.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/metafiles.php',
            ],
        '62' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/popupdefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/popupdefs.php',
            ],
        '63' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/quickcreatedefs.php',
            ],
        '64' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/searchdefs.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/searchdefs.php',
            ],
        '65' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/studio.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/studio.php',
            ],
        '66' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/metadata/subpanels/default.php',
            'to' => 'modules/SA_ContactCenterCalls/metadata/subpanels/default.php',
            ],
        '67' => [
            'from' => '<basepath>/modules/SA_ContactCenterCalls/vardefs.php',
            'to' => 'modules/SA_ContactCenterCalls/vardefs.php',
            ],
        '68' => [
            'from' => '<basepath>/modules/SA_ContactCenters/ContactCenter/UI.php',
            'to' => 'modules/SA_ContactCenters/ContactCenter/UI.php',
            ],
        '69' => [
            'from' => '<basepath>/modules/SA_ContactCenters/ContactCenter/tpls/ContactCenter.tpl',
            'to' => 'modules/SA_ContactCenters/ContactCenter/tpls/ContactCenter.tpl',
            ],
        '70' => [
            'from' => '<basepath>/modules/SA_ContactCenters/ContactCenter/tpls/ContactCenterAgents.tpl',
            'to' => 'modules/SA_ContactCenters/ContactCenter/tpls/ContactCenterAgents.tpl',
            ],
        '71' => [
            'from' => '<basepath>/modules/SA_ContactCenters/ContactCenter/tpls/Stats.tpl',
            'to' => 'modules/SA_ContactCenters/ContactCenter/tpls/Stats.tpl',
            ],
        '72' => [
            'from' => '<basepath>/modules/SA_ContactCenters/ContactCenter/tpls/checkConnection.tpl',
            'to' => 'modules/SA_ContactCenters/ContactCenter/tpls/checkConnection.tpl',
            ],
        '73' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Dashlets/SA_ContactCentersDashlet/SA_ContactCentersDashlet.meta.php',
            'to' => 'modules/SA_ContactCenters/Dashlets/SA_ContactCentersDashlet/SA_ContactCentersDashlet.meta.php',
            ],
        '74' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Dashlets/SA_ContactCentersDashlet/SA_ContactCentersDashlet.php',
            'to' => 'modules/SA_ContactCenters/Dashlets/SA_ContactCentersDashlet/SA_ContactCentersDashlet.php',
            ],
        '75' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Hooks/SA_ContactCentersUserHooks.php',
            'to' => 'modules/SA_ContactCenters/Hooks/SA_ContactCentersUserHooks.php',
            ],
        '76' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Menu.php',
            'to' => 'modules/SA_ContactCenters/Menu.php',
            ],
        '77' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Queues/DetailUI.tpl',
            'to' => 'modules/SA_ContactCenters/Queues/DetailUI.tpl',
            ],
        '78' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Queues/EditUI.tpl',
            'to' => 'modules/SA_ContactCenters/Queues/EditUI.tpl',
            ],
        '79' => [
            'from' => '<basepath>/modules/SA_ContactCenters/Queues/QueueUI.php',
            'to' => 'modules/SA_ContactCenters/Queues/QueueUI.php',
            ],
        '80' => [
            'from' => '<basepath>/modules/SA_ContactCenters/SA_ContactCenter.php',
            'to' => 'modules/SA_ContactCenters/SA_ContactCenter.php',
            ],
        '81' => [
            'from' => '<basepath>/modules/SA_ContactCenters/controller.php',
            'to' => 'modules/SA_ContactCenters/controller.php',
            ],
        '82' => [
            'from' => '<basepath>/modules/SA_ContactCenters/language/en_us.lang.php',
            'to' => 'modules/SA_ContactCenters/language/en_us.lang.php',
            ],
        '83' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/SearchFields.php',
            'to' => 'modules/SA_ContactCenters/metadata/SearchFields.php',
            ],
        '84' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/dashletviewdefs.php',
            ],
        '85' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/detailviewdefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/detailviewdefs.php',
            ],
        '86' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/editviewdefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/editviewdefs.php',
            ],
        '87' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/listviewdefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/listviewdefs.php',
            ],
        '88' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/metafiles.php',
            'to' => 'modules/SA_ContactCenters/metadata/metafiles.php',
            ],
        '89' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/popupdefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/popupdefs.php',
            ],
        '90' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/quickcreatedefs.php',
            ],
        '91' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/searchdefs.php',
            'to' => 'modules/SA_ContactCenters/metadata/searchdefs.php',
            ],
        '92' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/studio.php',
            'to' => 'modules/SA_ContactCenters/metadata/studio.php',
            ],
        '93' => [
            'from' => '<basepath>/modules/SA_ContactCenters/metadata/subpanels/default.php',
            'to' => 'modules/SA_ContactCenters/metadata/subpanels/default.php',
            ],
        '94' => [
            'from' => '<basepath>/modules/SA_ContactCenters/vardefs.php',
            'to' => 'modules/SA_ContactCenters/vardefs.php',
            ],
        '95' => [
            'from' => '<basepath>/modules/SA_ContactCenters/views/view.contactcenter.php',
            'to' => 'modules/SA_ContactCenters/views/view.contactcenter.php',
            ],
        '96' => [
            'from' => '<basepath>/modules/SA_ContactCenters/views/view.contactcenterusers.php',
            'to' => 'modules/SA_ContactCenters/views/view.contactcenterusers.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1618846360',
    ];