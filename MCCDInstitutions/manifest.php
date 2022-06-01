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
    'description' => 'ASSIST Institutions Module',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Institutions Module',
    'published_date' => '2021-03-09 15:40:24',
    'type' => 'module',
    'version' => '2',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_Institution.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/sa_institutions_contacts.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/sa_institutions_contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/sa_institutions_leads.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/sa_institutions_leads.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/sa_institutions_prospects.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/sa_institutions_prospects.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/sa_institutions_contacts_Contacts.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/sa_institutions_contacts_Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/sa_institutions_contacts_Contacts.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/sa_institutions_contacts_Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Layoutdefs/sa_institutions_leads_Leads.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Layoutdefs/sa_institutions_leads_Leads.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/sa_institutions_leads_Leads.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/sa_institutions_leads_Leads.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Layoutdefs/sa_institutions_prospects_Prospects.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Layoutdefs/sa_institutions_prospects_Prospects.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Vardefs/sa_institutions_prospects_Prospects.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/sa_institutions_prospects_Prospects.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_contacts_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_contacts_SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_leads_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_leads_SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_prospects_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/sa_institutions_prospects_SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_contacts_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_contacts_SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_leads_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_leads_SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_prospects_SA_Institutions.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/sa_institutions_prospects_SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/custom/metadata/sa_institutions_contactsMetaData.php',
            'to' => 'custom/metadata/sa_institutions_contactsMetaData.php',
            ],
        [
            'from' => '<basepath>/custom/metadata/sa_institutions_leadsMetaData.php',
            'to' => 'custom/metadata/sa_institutions_leadsMetaData.php',
            ],
        [
            'from' => '<basepath>/custom/metadata/sa_institutions_prospectsMetaData.php',
            'to' => 'custom/metadata/sa_institutions_prospectsMetaData.php',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Institutions.gif',
            'to' => 'custom/themes/default/images/CreateSA_Institutions.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_Institutions.gif',
            'to' => 'custom/themes/default/images/SA_Institutions.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Institutions.gif',
            'to' => 'custom/themes/default/images/icon_SA_Institutions.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Institutions_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_Institutions_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Institutions_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_Institutions_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.meta.php',
            'to' => 'modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.meta.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.php',
            'to' => 'modules/SA_Institutions/Dashlets/SA_InstitutionsDashlet/SA_InstitutionsDashlet.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/Menu.php',
            'to' => 'modules/SA_Institutions/Menu.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/SA_Institutions.php',
            'to' => 'modules/SA_Institutions/SA_Institutions.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/language/en_us.lang.php',
            'to' => 'modules/SA_Institutions/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/SearchFields.php',
            'to' => 'modules/SA_Institutions/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/dashletviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/detailviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/editviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/editviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/listviewdefs.php',
            'to' => 'modules/SA_Institutions/metadata/listviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/metafiles.php',
            'to' => 'modules/SA_Institutions/metadata/metafiles.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/popupdefs.php',
            'to' => 'modules/SA_Institutions/metadata/popupdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_Institutions/metadata/quickcreatedefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/searchdefs.php',
            'to' => 'modules/SA_Institutions/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/studio.php',
            'to' => 'modules/SA_Institutions/metadata/studio.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/metadata/subpanels/default.php',
            'to' => 'modules/SA_Institutions/metadata/subpanels/default.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Institutions/vardefs.php',
            'to' => 'modules/SA_Institutions/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1615304424',
    ];