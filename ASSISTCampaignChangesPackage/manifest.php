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
    'author' => 'Alcides Ojeda - SalesAgility',
    'description' => 'Campaign customisations for ASSIST',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Campaign Changes',
    'published_date' => '2022-06-20 15:15:20',
    'type' => 'module',
    'version' => '1',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/modules/Campaigns/Ext/Language/en_us.labels.php',
            'to' => 'custom/Extension/modules/Campaigns/Ext/Language/en_us.labels.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Campaigns/Ext/Vardefs/hide_budget_fields.php',
            'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/hide_budget_fields.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/RoiDetailView.php',
            'to' => 'custom/modules/Campaigns/RoiDetailView.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/RoiDetailView.tpl',
            'to' => 'custom/modules/Campaigns/RoiDetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/TrackDetailView.php',
            'to' => 'custom/modules/Campaigns/TrackDetailView.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/TrackDetailView.tpl',
            'to' => 'custom/modules/Campaigns/TrackDetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/WizardHome.php',
            'to' => 'custom/modules/Campaigns/WizardHome.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/WizardNewsletter.php',
            'to' => 'custom/modules/Campaigns/WizardNewsletter.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/metadata/detailviewdefs.php',
            'to' => 'custom/modules/Campaigns/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/WizardCampaignHeader.tpl',
            'to' => 'custom/modules/Campaigns/tpls/WizardCampaignHeader.tpl',
            ],
        ],
    'language' => [
        ],
    'id' => '1655734520',
    ];