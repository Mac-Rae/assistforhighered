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
    'version' => '49',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/PublicProfile.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_PublicProfile.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_PublicProfile.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/PublicProfile.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/PublicProfile.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.PublicProfile.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.PublicProfile.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTNormalisedPhone.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/ASSISTNormalisedPhone.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/Extension/modules/Meetings/Ext/Language/en_us.ASSISTPublicProfile.php',
            'to' => 'custom/Extension/modules/Meetings/Ext/Language/en_us.ASSISTPublicProfile.php',
            ],
        '13' => [
            'from' => '<basepath>/custom/Extension/modules/Meetings/Ext/Vardefs/ASSISTPublicProfile.php',
            'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/ASSISTPublicProfile.php',
            ],
        '14' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.PublicProfile.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.PublicProfile.php',
            ],
        '15' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/LogicHooks/SAPublicProfile.php',
            'to' => 'custom/Extension/modules/Users/Ext/LogicHooks/SAPublicProfile.php',
            ],
        '16' => [
            'from' => '<basepath>/custom/include/Services/SANormalisedPhoneHooks.php',
            'to' => 'custom/include/Services/SANormalisedPhoneHooks.php',
            ],
        '17' => [
            'from' => '<basepath>/custom/modules/Administration/PublicProfile.php',
            'to' => 'custom/modules/Administration/PublicProfile.php',
            ],
        '18' => [
            'from' => '<basepath>/custom/modules/Administration/PublicProfile.tpl',
            'to' => 'custom/modules/Administration/PublicProfile.tpl',
            ],
        '19' => [
            'from' => '<basepath>/custom/modules/Administration/getPublicProfileUsers.php',
            'to' => 'custom/modules/Administration/getPublicProfileUsers.php',
            ],
        '20' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfile.php',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfile.php',
            ],
        '21' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfile.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfile.tpl',
            ],
        '22' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl',
            ],
        '23' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileError.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileError.tpl',
            ],
        '24' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileHooks.php',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileHooks.php',
            ],
        '25' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl',
            ],
        '26' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/css/bootstrap.min.css',
            'to' => 'custom/modules/Users/PublicProfile/css/bootstrap.min.css',
            ],
        '27' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/css/style.css',
            'to' => 'custom/modules/Users/PublicProfile/css/style.css',
            ],
        '28' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/Linkedin.png',
            'to' => 'custom/modules/Users/PublicProfile/images/Linkedin.png',
            ],
        '29' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/Twitter.png',
            'to' => 'custom/modules/Users/PublicProfile/images/Twitter.png',
            ],
        '30' => [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/logo.svg',
            'to' => 'custom/modules/Users/PublicProfile/images/logo.svg',
            ],
        '31' => [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
            ],
        '32' => [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
            ],
        '33' => [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
            ],
        '34' => [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileRunner.php',
            ],
        '35' => [
            'from' => '<basepath>/custom/modules/Users/tpls/EditViewFooter.tpl',
            'to' => 'custom/modules/Users/tpls/EditViewFooter.tpl',
            ],
        '36' => [
            'from' => '<basepath>/custom/modules/Users/tpls/EditViewHeader.tpl',
            'to' => 'custom/modules/Users/tpls/EditViewHeader.tpl',
            ],
        '37' => [
            'from' => '<basepath>/custom/modules/Users/views/view.edit.php',
            'to' => 'custom/modules/Users/views/view.edit.php',
            ],
        '38' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/CreateSA_PublicProfile.gif',
            ],
        '39' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/CreateSA_PublicProfile.svg',
            ],
        '40' => [
            'from' => '<basepath>/custom/themes/default/images/SA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/SA_PublicProfile.gif',
            ],
        '41' => [
            'from' => '<basepath>/custom/themes/default/images/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/SA_PublicProfile.svg',
            ],
        '42' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile.gif',
            ],
        '43' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile_32.gif',
            ],
        '44' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile_32.svg',
            ],
        '45' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_PublicProfile.svg',
            ],
        '46' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_PublicProfile.svg',
            ],
        '47' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_PublicProfile.svg',
            ],
        '48' => [
            'from' => '<basepath>/modules/SA_PublicProfile/SA_PublicProfile.php',
            'to' => 'modules/SA_PublicProfile/SA_PublicProfile.php',
            ],
        '49' => [
            'from' => '<basepath>/modules/SA_PublicProfile/controller.php',
            'to' => 'modules/SA_PublicProfile/controller.php',
            ],
        '50' => [
            'from' => '<basepath>/modules/SA_PublicProfile/language/en_us.lang.php',
            'to' => 'modules/SA_PublicProfile/language/en_us.lang.php',
            ],
        '51' => [
            'from' => '<basepath>/modules/SA_PublicProfile/vardefs.php',
            'to' => 'modules/SA_PublicProfile/vardefs.php',
            ],
        '52' => [
            'from' => '<basepath>/public/.htaccess',
            'to' => 'public/.htaccess',
            ],
        ],
    'language' => [
        ],
    'id' => '1614868215',
    ];