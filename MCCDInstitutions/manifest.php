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
    'description' => 'MCCD Institutions Module',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Institutions Module',
    'published_date' => '2021-03-09 15:40:24',
    'type' => 'module',
    'version' => '1',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_Institution.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_Institution.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_Institution.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/sa_institutions_contacts.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/sa_institutions_contacts.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/sa_institutions_leads.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/sa_institutions_leads.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/sa_institutions_prospects.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/sa_institutions_prospects.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.SA_Institution.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/sa_institutions_contacts_Contacts.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/sa_institutions_contacts_Contacts.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/sa_institutions_contacts_Contacts.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/sa_institutions_contacts_Contacts.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.SA_Institution.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Layoutdefs/sa_institutions_leads_Leads.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Layoutdefs/sa_institutions_leads_Leads.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/sa_institutions_leads_Leads.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/sa_institutions_leads_Leads.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Language/en_us.SA_Institution.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Layoutdefs/sa_institutions_prospects_Prospects.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Layoutdefs/sa_institutions_prospects_Prospects.php',
            ],
        '13' => [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Vardefs/sa_institutions_prospects_Prospects.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sa_institutions_prospects_Prospects.php',
            ],
        '14' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SA_Institution.php',
            ],
        '15' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_contacts_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_contacts_SA_Institutions.php',
            ],
        '16' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_leads_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_leads_SA_Institutions.php',
            ],
        '17' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_prospects_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_prospects_SA_Institutions.php',
            ],
        '18' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_contacts_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_contacts_SA_Institutions.php',
            ],
        '19' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_leads_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_leads_SA_Institutions.php',
            ],
        '20' => [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_prospects_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_prospects_SA_Institutions.php',
            ],
        '21' => [
            'from' => '<basepath>/custom/metadata/sa_institutions_contactsMetaData.php',
            'to' => 'custom/metadata/sa_institutions_contactsMetaData.php',
            ],
        '22' => [
            'from' => '<basepath>/custom/metadata/sa_institutions_leadsMetaData.php',
            'to' => 'custom/metadata/sa_institutions_leadsMetaData.php',
            ],
        '23' => [
            'from' => '<basepath>/custom/metadata/sa_institutions_prospectsMetaData.php',
            'to' => 'custom/metadata/sa_institutions_prospectsMetaData.php',
            ],
        '24' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Institutions.gif',
            'to' => 'custom/themes/default/images/CreateSA_Institutions.gif',
            ],
        '25' => [
            'from' => '<basepath>/custom/themes/default/images/SA_Institutions.gif',
            'to' => 'custom/themes/default/images/SA_Institutions.gif',
            ],
        '26' => [
            'from' => '<basepath>/custom/themes/default/images/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/SA_Institutions.svg',
            ],
        '27' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Institutions.gif',
            'to' => 'custom/themes/default/images/icon_SA_Institutions.gif',
            ],
        '28' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Institutions_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_Institutions_32.gif',
            ],
        '29' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Institutions_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_Institutions_32.svg',
            ],
        '30' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_Institutions.svg',
            ],
        '31' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_Institutions.svg',
            ],
        '32' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_Institutions.svg',
            ],
        '33' => [
            'from' => '<basepath>/modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.meta.php',
            'to' => 'modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.meta.php',
            ],
        '34' => [
            'from' => '<basepath>/modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.php',
            'to' => 'modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.php',
            ],
        '35' => [
            'from' => '<basepath>/modules/SA_Institutions/Menu.php',
            'to' => 'modules/SA_Institutions/Menu.php',
            ],
        '36' => [
            'from' => '<basepath>/modules/SA_Institutions/SA_Institutions.php',
            'to' => 'modules/SA_Institutions/SA_Institutions.php',
            ],
        '37' => [
            'from' => '<basepath>/modules/SA_Institutions/language/en_us.lang.php',
            'to' => 'modules/SA_Institutions/language/en_us.lang.php',
            ],
        '38' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/SearchFields.php',
            'to' => 'modules/SA_Institutions/metadata/SearchFields.php',
            ],
        '39' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/dashletviewdefs.php',
            ],
        '40' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/detailviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/detailviewdefs.php',
            ],
        '41' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/editviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/editviewdefs.php',
            ],
        '42' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/listviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/listviewdefs.php',
            ],
        '43' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/metafiles.php',
            'to' => 'modules/SA_Institutions/metadata/metafiles.php',
            ],
        '44' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/popupdefs.php',
            'to' => 'modules/SA_Institutions/metadata/popupdefs.php',
            ],
        '45' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_Institutions/metadata/quickcreatedefs.php',
            ],
        '46' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/searchdefs.php',
            'to' => 'modules/SA_Institutions/metadata/searchdefs.php',
            ],
        '47' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/studio.php',
            'to' => 'modules/SA_Institutions/metadata/studio.php',
            ],
        '48' => [
            'from' => '<basepath>/modules/SA_Institutions/metadata/subpanels/default.php',
            'to' => 'modules/SA_Institutions/metadata/subpanels/default.php',
            ],
        '49' => [
            'from' => '<basepath>/modules/SA_Institutions/vardefs.php',
            'to' => 'modules/SA_Institutions/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1615304424',
    ];