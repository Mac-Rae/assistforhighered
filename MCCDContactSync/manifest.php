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
    'description' => 'MCCD RDS Contact Sync Package',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD RDS Contact Sync',
    'published_date' => '2021-09-06 14:17:33',
    'type' => 'module',
    'version' => '37',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/mccdRDSSync.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/mccdRDSSync.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_AthenaSyncLogs.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_AthenaSyncLogs.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_Enrollments.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_Enrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_Institution.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_Programs.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_Programs.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDRDSSync.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDRDSSync.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_AthenaSyncLogs.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_AthenaSyncLogs.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_Enrollments.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_Enrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_Programs.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_Programs.php',
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
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/AthenaConfig.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/AthenaConfig.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.AthenaConfig.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.AthenaConfig.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.MCCDRDSSync.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.MCCDRDSSync.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.SAEnrollments.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.SAEnrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.SAPrograms.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.SAPrograms.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/SAEnrollments.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/SAEnrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/SAPrograms.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/SAPrograms.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/sa_institutions_contacts_Contacts.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/sa_institutions_contacts_Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/SAEnrollments.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/SAEnrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/SAPrograms.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/SAPrograms.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/emplid.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/emplid.php',
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
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.Contacts.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.SAInstitutions.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.SAInstitutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.course.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.course.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.credits_attempted.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.credits_attempted.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.credits_earned.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.credits_earned.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.emplid.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.emplid.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.end_date.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.end_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.grade.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.grade.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.last_updated_date.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.last_updated_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.start_date.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.start_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.term.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Language/en_us.term.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/Contacts.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/SAInstitutions.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/SAInstitutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/course.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/course.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/credits_attempted.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/credits_attempted.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/credits_earned.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/credits_earned.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/emplid.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/emplid.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/end_date.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/end_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/grade.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/grade.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/last_updated_date.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/last_updated_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/start_date.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/start_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Enrollments/Ext/Vardefs/term.php',
            'to' => 'custom/Extension/modules/SA_Enrollments/Ext/Vardefs/term.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SAEnrollments.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SAEnrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SAPrograms.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SAPrograms.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SA_Institution.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Language/en_us.SA_Institution.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/SAEnrollments.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/SAEnrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/SAPrograms.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Layoutdefs/SAPrograms.php',
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
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/SAEnrollments.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/SAEnrollments.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Institutions/Ext/Vardefs/SAPrograms.php',
            'to' => 'custom/Extension/modules/SA_Institutions/Ext/Vardefs/SAPrograms.php',
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
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.Contacts.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.SAInstitutions.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.SAInstitutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.emplid.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.emplid.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.end_date.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.end_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.field_of_interest.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.field_of_interest.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.last_updated_date.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.last_updated_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Language/en_us.start_date.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Language/en_us.start_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/Contacts.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/Contacts.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/SAInstitutions.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/SAInstitutions.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/emplid.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/emplid.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/end_date.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/end_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/field_of_interest.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/field_of_interest.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/last_updated_date.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/last_updated_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_Programs/Ext/Vardefs/start_date.php',
            'to' => 'custom/Extension/modules/SA_Programs/Ext/Vardefs/start_date.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/Language/en_us.MCCDAthenaSyncScheduler.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.MCCDAthenaSyncScheduler.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MCCDRDSSyncScheduler.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MCCDRDSSyncScheduler.php',
            ],
        [
            'from' => '<basepath>/custom/application/Services/MCCDSyncs/MCCDAthenaSyncImpl.php',
            'to' => 'custom/application/Services/MCCDSyncs/MCCDAthenaSyncImpl.php',
            ],
        [
            'from' => '<basepath>/custom/application/Services/MCCDSyncs/MCCDMySQLSyncImpl.php',
            'to' => 'custom/application/Services/MCCDSyncs/MCCDMySQLSyncImpl.php',
            ],
        [
            'from' => '<basepath>/custom/application/Services/MCCDSyncs/MCCDRDSSyncImpl.php',
            'to' => 'custom/application/Services/MCCDSyncs/MCCDRDSSyncImpl.php',
            ],
        [
            'from' => '<basepath>/custom/application/Services/MCCDSyncs/MCCDSyncInterface.php',
            'to' => 'custom/application/Services/MCCDSyncs/MCCDSyncInterface.php',
            ],
        [
            'from' => '<basepath>/custom/application/Services/mccdRDSSync.php',
            'to' => 'custom/application/Services/mccdRDSSync.php',
            ],
        [
            'from' => '<basepath>/custom/application/entrypoints/mccdRDSSyncRunner.php',
            'to' => 'custom/application/entrypoints/mccdRDSSyncRunner.php',
            ],
        [
            'from' => '<basepath>/custom/application/entrypoints/mccdTestMapping.php',
            'to' => 'custom/application/entrypoints/mccdTestMapping.php',
            ],
        [
            'from' => '<basepath>/custom/include/MCCD/MCCDAthenaClient.php',
            'to' => 'custom/include/MCCD/MCCDAthenaClient.php',
            ],
        [
            'from' => '<basepath>/custom/include/MCCD/MCCDMySQLClient.php',
            'to' => 'custom/include/MCCD/MCCDMySQLClient.php',
            ],
        [
            'from' => '<basepath>/custom/include/MCCD/MCCDRDSClient.php',
            'to' => 'custom/include/MCCD/MCCDRDSClient.php',
            ],
        [
            'from' => '<basepath>/custom/include/MCCD/lib/aws.phar',
            'to' => 'custom/include/MCCD/lib/aws.phar',
            ],
        [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateContactsSA_EnrollmentsButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateContactsSA_EnrollmentsButton.php',
            ],
        [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateContactsSA_ProgramsButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateContactsSA_ProgramsButton.php',
            ],
        [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_InstitutionsSA_EnrollmentsButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_InstitutionsSA_EnrollmentsButton.php',
            ],
        [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_InstitutionsSA_ProgramsButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopQuickCreateSA_InstitutionsSA_ProgramsButton.php',
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
            'from' => '<basepath>/custom/modules/Administration/AthenaBulkImport.php',
            'to' => 'custom/modules/Administration/AthenaBulkImport.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaBulkImport.tpl',
            'to' => 'custom/modules/Administration/AthenaBulkImport.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaBulkImportProcess.tpl',
            'to' => 'custom/modules/Administration/AthenaBulkImportProcess.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaConfig.php',
            'to' => 'custom/modules/Administration/AthenaConfig.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaConfig.tpl',
            'to' => 'custom/modules/Administration/AthenaConfig.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaFieldConfig.php',
            'to' => 'custom/modules/Administration/AthenaFieldConfig.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaFieldConfig.tpl',
            'to' => 'custom/modules/Administration/AthenaFieldConfig.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaHistoricFieldConfig.php',
            'to' => 'custom/modules/Administration/AthenaHistoricFieldConfig.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/AthenaHistoricFieldConfig.tpl',
            'to' => 'custom/modules/Administration/AthenaHistoricFieldConfig.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Contacts/js/MCCDSync.js',
            'to' => 'custom/modules/Contacts/js/MCCDSync.js',
            ],
        [
            'from' => '<basepath>/custom/modules/Schedulers/Services/MCCDRDSSyncService.php',
            'to' => 'custom/modules/Schedulers/Services/MCCDRDSSyncService.php',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_AthenaSyncLogs.gif',
            'to' => 'custom/themes/default/images/CreateSA_AthenaSyncLogs.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_AthenaSyncLogs.svg',
            'to' => 'custom/themes/default/images/CreateSA_AthenaSyncLogs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Enrollments.gif',
            'to' => 'custom/themes/default/images/CreateSA_Enrollments.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Enrollments.svg',
            'to' => 'custom/themes/default/images/CreateSA_Enrollments.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Institutions.gif',
            'to' => 'custom/themes/default/images/CreateSA_Institutions.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Programs.gif',
            'to' => 'custom/themes/default/images/CreateSA_Programs.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_Programs.svg',
            'to' => 'custom/themes/default/images/CreateSA_Programs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_AthenaSyncLogs.gif',
            'to' => 'custom/themes/default/images/SA_AthenaSyncLogs.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_AthenaSyncLogs.svg',
            'to' => 'custom/themes/default/images/SA_AthenaSyncLogs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_Enrollments.gif',
            'to' => 'custom/themes/default/images/SA_Enrollments.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_Enrollments.svg',
            'to' => 'custom/themes/default/images/SA_Enrollments.svg',
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
            'from' => '<basepath>/custom/themes/default/images/SA_Programs.gif',
            'to' => 'custom/themes/default/images/SA_Programs.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_Programs.svg',
            'to' => 'custom/themes/default/images/SA_Programs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_AthenaSyncLogs.gif',
            'to' => 'custom/themes/default/images/icon_SA_AthenaSyncLogs.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_AthenaSyncLogs_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_AthenaSyncLogs_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_AthenaSyncLogs_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_AthenaSyncLogs_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Enrollments.gif',
            'to' => 'custom/themes/default/images/icon_SA_Enrollments.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Enrollments_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_Enrollments_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Enrollments_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_Enrollments_32.svg',
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
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Programs.gif',
            'to' => 'custom/themes/default/images/icon_SA_Programs.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Programs_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_Programs_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_Programs_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_Programs_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_AthenaSyncLogs.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_AthenaSyncLogs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_Enrollments.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_Enrollments.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_Programs.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_Programs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_AthenaSyncLogs.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_AthenaSyncLogs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_Enrollments.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_Enrollments.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_Programs.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_Programs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_AthenaSyncLogs.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_AthenaSyncLogs.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_Enrollments.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_Enrollments.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_Institutions.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_Institutions.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_Programs.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_Programs.svg',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/Dashlets/SA_AthenaSyncLogsDashlet/SA_AthenaSyncLogsDashlet.meta.php',
            'to' => 'modules/SA_AthenaSyncLogs/Dashlets/SA_AthenaSyncLogsDashlet/SA_AthenaSyncLogsDashlet.meta.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/Dashlets/SA_AthenaSyncLogsDashlet/SA_AthenaSyncLogsDashlet.php',
            'to' => 'modules/SA_AthenaSyncLogs/Dashlets/SA_AthenaSyncLogsDashlet/SA_AthenaSyncLogsDashlet.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/Menu.php',
            'to' => 'modules/SA_AthenaSyncLogs/Menu.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/SA_AthenaSyncLogs.php',
            'to' => 'modules/SA_AthenaSyncLogs/SA_AthenaSyncLogs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/language/en_us.lang.php',
            'to' => 'modules/SA_AthenaSyncLogs/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/SearchFields.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/dashletviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/detailviewdefs.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/listviewdefs.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/listviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/metafiles.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/metafiles.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/popupdefs.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/popupdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/searchdefs.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/studio.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/studio.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/metadata/subpanels/default.php',
            'to' => 'modules/SA_AthenaSyncLogs/metadata/subpanels/default.php',
            ],
        [
            'from' => '<basepath>/modules/SA_AthenaSyncLogs/vardefs.php',
            'to' => 'modules/SA_AthenaSyncLogs/vardefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/Dashlets/SA_EnrollmentsDashlet/SA_EnrollmentsDashlet.meta.php',
            'to' => 'modules/SA_Enrollments/Dashlets/SA_EnrollmentsDashlet/SA_EnrollmentsDashlet.meta.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/Dashlets/SA_EnrollmentsDashlet/SA_EnrollmentsDashlet.php',
            'to' => 'modules/SA_Enrollments/Dashlets/SA_EnrollmentsDashlet/SA_EnrollmentsDashlet.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/Menu.php',
            'to' => 'modules/SA_Enrollments/Menu.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/SA_Enrollment.php',
            'to' => 'modules/SA_Enrollments/SA_Enrollment.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/language/en_us.lang.php',
            'to' => 'modules/SA_Enrollments/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/SearchFields.php',
            'to' => 'modules/SA_Enrollments/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_Enrollments/metadata/dashletviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/detailviewdefs.php',
            'to' => 'modules/SA_Enrollments/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/editviewdefs.php',
            'to' => 'modules/SA_Enrollments/metadata/editviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/listviewdefs.php',
            'to' => 'modules/SA_Enrollments/metadata/listviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/metafiles.php',
            'to' => 'modules/SA_Enrollments/metadata/metafiles.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/popupdefs.php',
            'to' => 'modules/SA_Enrollments/metadata/popupdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_Enrollments/metadata/quickcreatedefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/searchdefs.php',
            'to' => 'modules/SA_Enrollments/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/studio.php',
            'to' => 'modules/SA_Enrollments/metadata/studio.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/metadata/subpanels/default.php',
            'to' => 'modules/SA_Enrollments/metadata/subpanels/default.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Enrollments/vardefs.php',
            'to' => 'modules/SA_Enrollments/vardefs.php',
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
        [
            'from' => '<basepath>/modules/SA_Programs/Dashlets/SA_ProgramsDashlet/SA_ProgramsDashlet.meta.php',
            'to' => 'modules/SA_Programs/Dashlets/SA_ProgramsDashlet/SA_ProgramsDashlet.meta.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/Dashlets/SA_ProgramsDashlet/SA_ProgramsDashlet.php',
            'to' => 'modules/SA_Programs/Dashlets/SA_ProgramsDashlet/SA_ProgramsDashlet.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/Menu.php',
            'to' => 'modules/SA_Programs/Menu.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/SA_Program.php',
            'to' => 'modules/SA_Programs/SA_Program.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/language/en_us.lang.php',
            'to' => 'modules/SA_Programs/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/SearchFields.php',
            'to' => 'modules/SA_Programs/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_Programs/metadata/dashletviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/detailviewdefs.php',
            'to' => 'modules/SA_Programs/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/editviewdefs.php',
            'to' => 'modules/SA_Programs/metadata/editviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/listviewdefs.php',
            'to' => 'modules/SA_Programs/metadata/listviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/metafiles.php',
            'to' => 'modules/SA_Programs/metadata/metafiles.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/popupdefs.php',
            'to' => 'modules/SA_Programs/metadata/popupdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_Programs/metadata/quickcreatedefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/searchdefs.php',
            'to' => 'modules/SA_Programs/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/studio.php',
            'to' => 'modules/SA_Programs/metadata/studio.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/metadata/subpanels/default.php',
            'to' => 'modules/SA_Programs/metadata/subpanels/default.php',
            ],
        [
            'from' => '<basepath>/modules/SA_Programs/vardefs.php',
            'to' => 'modules/SA_Programs/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1630934253',
    ];