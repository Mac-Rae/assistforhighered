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
    'description' => 'ASSIST Public User Profiles',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Public User Profiles',
    'published_date' => '2021-03-19 00:00:00',
    'type' => 'module',
    'version' => '50',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/PublicProfile.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.PublicProfile.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Meetings/Ext/Language/en_us.ASSISTPublicProfile.php',
            'to' => 'custom/Extension/modules/Meetings/Ext/Language/en_us.ASSISTPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Meetings/Ext/Vardefs/ASSISTPublicProfile.php',
            'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/ASSISTPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.PublicProfile.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/LogicHooks/SAPublicProfile.php',
            'to' => 'custom/Extension/modules/Users/Ext/LogicHooks/SAPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SANormalisedPhoneHooks.php',
            'to' => 'custom/include/Services/SANormalisedPhoneHooks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/PublicProfile.php',
            'to' => 'custom/modules/Administration/PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/PublicProfile.tpl',
            'to' => 'custom/modules/Administration/PublicProfile.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/getPublicProfileUsers.php',
            'to' => 'custom/modules/Administration/getPublicProfileUsers.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfile.php',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfile.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfile.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileError.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileError.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileHooks.php',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileHooks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/css/bootstrap.min.css',
            'to' => 'custom/modules/Users/PublicProfile/css/bootstrap.min.css',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/css/style.css',
            'to' => 'custom/modules/Users/PublicProfile/css/style.css',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/Linkedin.png',
            'to' => 'custom/modules/Users/PublicProfile/images/Linkedin.png',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/Twitter.png',
            'to' => 'custom/modules/Users/PublicProfile/images/Twitter.png',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/logo.svg',
            'to' => 'custom/modules/Users/PublicProfile/images/logo.svg',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/tpls/EditViewFooter.tpl',
            'to' => 'custom/modules/Users/tpls/EditViewFooter.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/tpls/EditViewHeader.tpl',
            'to' => 'custom/modules/Users/tpls/EditViewHeader.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/views/view.edit.php',
            'to' => 'custom/modules/Users/views/view.edit.php',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/CreateSA_PublicProfile.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/CreateSA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/SA_PublicProfile.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/SA_PublicProfile.php',
            'to' => 'modules/SA_PublicProfile/SA_PublicProfile.php',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/controller.php',
            'to' => 'modules/SA_PublicProfile/controller.php',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/language/en_us.lang.php',
            'to' => 'modules/SA_PublicProfile/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/vardefs.php',
            'to' => 'modules/SA_PublicProfile/vardefs.php',
            ],
        [
            'from' => '<basepath>/public/.htaccess',
            'to' => 'public/.htaccess',
            ],
        ],
    'language' => [
        ],
    'id' => '1614868215',
    ];