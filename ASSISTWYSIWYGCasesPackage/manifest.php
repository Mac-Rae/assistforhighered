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
    'description' => 'ASSIST WYSIWYG and Case Updates',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST WYSIWYG and Case Management',
    'published_date' => '2021-03-19 00:00:00',
    'type' => 'module',
    'version' => '39',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/ASSISTBulkCases.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/ASSISTBulkCases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/WYSIWYG.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/WYSIWYG.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTBulkCases.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTBulkCases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTCaseManagement.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTWysiwyg.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTWysiwyg.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/ASSISTWysiwyg.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/ASSISTWysiwyg.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/Cases_AokKnowledgebase.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/Cases_AokKnowledgebase.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Utils/ASSISTWysiwyg.php',
            'to' => 'custom/Extension/application/Ext/Utils/ASSISTWysiwyg.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.Cases.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.Cases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.ReviewNeeded.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.ReviewNeeded.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.quality_user_log.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.quality_user_log.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Layoutdefs/Cases.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Layoutdefs/Cases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/ASSISTCaseManagement.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/WYSIWYG.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/WYSIWYG.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/Cases.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/Cases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/quality_user_log.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/quality_user_log.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Campaigns/Ext/Language/en_us.ASSISTBulkCase.php',
            'to' => 'custom/Extension/modules/Campaigns/Ext/Language/en_us.ASSISTBulkCase.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Campaigns/Ext/Vardefs/ASSISTBulkCreateCase.php',
            'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/ASSISTBulkCreateCase.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.ASSISTBulkCases.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.ASSISTBulkCases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.ASSISTCaseManagement.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.AokKnowledgebase.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.AokKnowledgebase.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Layoutdefs/AokKnowledgebase.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Layoutdefs/AokKnowledgebase.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/LogicHooks/ASSISTCaseManagement.php',
            'to' => 'custom/Extension/modules/Cases/Ext/LogicHooks/ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/ASSISTBulkCases.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/ASSISTBulkCases.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/ASSISTCaseManagement.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/AokKnowledgebase.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/AokKnowledgebase.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/ASSISTCaseManagement.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/Language/en_us.ASSISTPollMonitoredInboxes.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.ASSISTPollMonitoredInboxes.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/ASSISTBulkCasesJob.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/ASSISTBulkCasesJob.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/ASSISTPollMonitoredInboxes.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/ASSISTPollMonitoredInboxes.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/ASSISTBulkCases/ASSISTExecuteBulkCases.php',
            'to' => 'custom/include/Services/ASSISTBulkCases/ASSISTExecuteBulkCases.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/WYSIWYG/TinyMCEPost.php',
            'to' => 'custom/include/Services/WYSIWYG/TinyMCEPost.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/WYSIWYG/WYSIWYGLogicHooks.php',
            'to' => 'custom/include/Services/WYSIWYG/WYSIWYGLogicHooks.php',
            ],
        [
            'from' => '<basepath>/custom/include/SuiteEditor/SuiteEditorTinyMCE.php',
            'to' => 'custom/include/SuiteEditor/SuiteEditorTinyMCE.php',
            ],
        [
            'from' => '<basepath>/custom/include/SuiteEditor/tpls/SuiteEditorTinyMCE.tpl',
            'to' => 'custom/include/SuiteEditor/tpls/SuiteEditorTinyMCE.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreateASSISTCases.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreateASSISTCases.php',
            ],
        [
            'from' => '<basepath>/custom/metadata/Cases_AokKnowledgebaseMetaData.php',
            'to' => 'custom/metadata/Cases_AokKnowledgebaseMetaData.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
            'to' => 'custom/modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/controller.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/controller.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/views/view.detail.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/views/view.detail.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/views/view.edit.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/views/view.edit.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/ASSISTBulkCaseOverview.html',
            'to' => 'custom/modules/Campaigns/ASSISTBulkCaseOverview.html',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/BulkCasesDotListWizardMenu.php',
            'to' => 'custom/modules/Campaigns/BulkCasesDotListWizardMenu.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/WizardHome.php',
            'to' => 'custom/modules/Campaigns/WizardHome.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/WizardMarketing.php',
            'to' => 'custom/modules/Campaigns/WizardMarketing.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/WizardNewsletter.php',
            'to' => 'custom/modules/Campaigns/WizardNewsletter.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/WizardNewsletterSave.php',
            'to' => 'custom/modules/Campaigns/WizardNewsletterSave.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/js/ASSISTBulkCases.js',
            'to' => 'custom/modules/Campaigns/js/ASSISTBulkCases.js',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/metadata/detailviewdefs.php',
            'to' => 'custom/modules/Campaigns/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/ASSISTBulkCaseDetails.tpl',
            'to' => 'custom/modules/Campaigns/tpls/ASSISTBulkCaseDetails.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/SA_BulkCaseMenu.tpl',
            'to' => 'custom/modules/Campaigns/tpls/SA_BulkCaseMenu.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/WizardHomeStart.tpl',
            'to' => 'custom/modules/Campaigns/tpls/WizardHomeStart.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/WizardNewsletter.tpl',
            'to' => 'custom/modules/Campaigns/tpls/WizardNewsletter.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/progressStepsStyle.html',
            'to' => 'custom/modules/Campaigns/tpls/progressStepsStyle.html',
            ],
        [
            'from' => '<basepath>/custom/modules/Campaigns/wizard.js',
            'to' => 'custom/modules/Campaigns/wizard.js',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/ASSIST/tpls/CaseDetailHeader.tpl',
            'to' => 'custom/modules/Cases/ASSIST/tpls/CaseDetailHeader.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/ASSIST/tpls/ListViewData.tpl',
            'to' => 'custom/modules/Cases/ASSIST/tpls/ListViewData.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/Services/ASSISTCaseManagementHooks.php',
            'to' => 'custom/modules/Cases/Services/ASSISTCaseManagementHooks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/controller.php',
            'to' => 'custom/modules/Cases/controller.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/metadata/detailviewdefs.php',
            'to' => 'custom/modules/Cases/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/metadata/editviewdefs.php',
            'to' => 'custom/modules/Cases/metadata/editviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/metadata/quickcreatedefs.php',
            'to' => 'custom/modules/Cases/metadata/quickcreatedefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/views/view.detail.php',
            'to' => 'custom/modules/Cases/views/view.detail.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/views/view.edit.php',
            'to' => 'custom/modules/Cases/views/view.edit.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Cases/views/view.list.php',
            'to' => 'custom/modules/Cases/views/view.list.php',
            ],
        [
            'from' => '<basepath>/custom/modules/EmailTemplates/EditView.php',
            'to' => 'custom/modules/EmailTemplates/EditView.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Emails/include/ComposeView/EmailsComposeView.js',
            'to' => 'custom/modules/Emails/include/ComposeView/EmailsComposeView.js',
            ],
        [
            'from' => '<basepath>/custom/modules/Emails/metadata/composeviewdefs.php',
            'to' => 'custom/modules/Emails/metadata/composeviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Emails/views/view.compose.php',
            'to' => 'custom/modules/Emails/views/view.compose.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Leads/views/view.list.php',
            'to' => 'custom/modules/Leads/views/view.list.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/LogicHooks/ASSISTWysiwygUsersHooks.php',
            'to' => 'custom/modules/Users/LogicHooks/ASSISTWysiwygUsersHooks.php',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/ASSISTCaseManagement/images/check.svg',
            'to' => 'custom/themes/SuiteP/ASSISTCaseManagement/images/check.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/ASSISTCaseManagement/images/check_circle.svg',
            'to' => 'custom/themes/SuiteP/ASSISTCaseManagement/images/check_circle.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/ASSISTCaseManagement/images/copy.svg',
            'to' => 'custom/themes/SuiteP/ASSISTCaseManagement/images/copy.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/tpls/_head.tpl',
            'to' => 'custom/themes/SuiteP/tpls/_head.tpl',
            ],
        [
            'from' => '<basepath>/include/HtmlSanitizer.php',
            'to' => 'include/HtmlSanitizer.php',
            ],
        [
            'from' => '<basepath>/modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            'to' => 'modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            'to' => 'modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            'to' => 'modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/modules/AOW_WorkFlow/AOW_WorkFlow.php',
            'to' => 'modules/AOW_WorkFlow/AOW_WorkFlow.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1616073231',
    ];