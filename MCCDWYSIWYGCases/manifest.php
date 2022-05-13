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
    'description' => 'MCCD WYSIWYG and Case Updates',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD WYSIWYG and Case Management',
    'published_date' => '2021-03-19 00:00:00',
    'type' => 'module',
    'version' => '35',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/MCCDBulkCases.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/MCCDBulkCases.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/WYSIWYG.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/WYSIWYG.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDBulkCases.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDBulkCases.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDCaseManagement.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDCaseManagement.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDWysiwyg.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDWysiwyg.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/MCCDWysiwyg.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/MCCDWysiwyg.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/Extension/application/Ext/TableDictionary/Cases_AokKnowledgebase.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/Cases_AokKnowledgebase.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Utils/MCCDWysiwyg.php',
            'to' => 'custom/Extension/application/Ext/Utils/MCCDWysiwyg.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.Cases.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.Cases.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.ReviewNeeded.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.ReviewNeeded.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.quality_user_log.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Language/en_us.quality_user_log.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Layoutdefs/Cases.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Layoutdefs/Cases.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/MCCDCaseManagement.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/MCCDCaseManagement.php',
            ],
        '13' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/WYSIWYG.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/LogicHooks/WYSIWYG.php',
            ],
        '14' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/Cases.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/Cases.php',
            ],
        '15' => [
            'from' => '<basepath>/custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/quality_user_log.php',
            'to' => 'custom/Extension/modules/AOK_KnowledgeBase/Ext/Vardefs/quality_user_log.php',
            ],
        '16' => [
            'from' => '<basepath>/custom/Extension/modules/Campaigns/Ext/Language/en_us.MCCDBulkCase.php',
            'to' => 'custom/Extension/modules/Campaigns/Ext/Language/en_us.MCCDBulkCase.php',
            ],
        '17' => [
            'from' => '<basepath>/custom/Extension/modules/Campaigns/Ext/Vardefs/MCCDBulkCreateCase.php',
            'to' => 'custom/Extension/modules/Campaigns/Ext/Vardefs/MCCDBulkCreateCase.php',
            ],
        '18' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.AokKnowledgebase.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.AokKnowledgebase.php',
            ],
        '19' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.MCCDBulkCases.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.MCCDBulkCases.php',
            ],
        '20' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Language/en_us.MCCDCaseManagement.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Language/en_us.MCCDCaseManagement.php',
            ],
        '21' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Layoutdefs/AokKnowledgebase.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Layoutdefs/AokKnowledgebase.php',
            ],
        '22' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/LogicHooks/MCCDCaseManagement.php',
            'to' => 'custom/Extension/modules/Cases/Ext/LogicHooks/MCCDCaseManagement.php',
            ],
        '23' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/AokKnowledgebase.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/AokKnowledgebase.php',
            ],
        '24' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/MCCDBulkCases.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/MCCDBulkCases.php',
            ],
        '25' => [
            'from' => '<basepath>/custom/Extension/modules/Cases/Ext/Vardefs/MCCDCaseManagement.php',
            'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/MCCDCaseManagement.php',
            ],
        '26' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/MCCDCaseManagement.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/MCCDCaseManagement.php',
            ],
        '27' => [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MCCDBulkCasesJob.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MCCDBulkCasesJob.php',
            ],
        '28' => [
            'from' => '<basepath>/custom/include/Services/MCCDBulkCases/MCCDExecuteBulkCases.php',
            'to' => 'custom/include/Services/MCCDBulkCases/MCCDExecuteBulkCases.php',
            ],
        '29' => [
            'from' => '<basepath>/custom/include/Services/WYSIWYG/TinyMCEPost.php',
            'to' => 'custom/include/Services/WYSIWYG/TinyMCEPost.php',
            ],
        '30' => [
            'from' => '<basepath>/custom/include/Services/WYSIWYG/WYSIWYGLogicHooks.php',
            'to' => 'custom/include/Services/WYSIWYG/WYSIWYGLogicHooks.php',
            ],
        '31' => [
            'from' => '<basepath>/custom/include/SuiteEditor/SuiteEditorTinyMCE.php',
            'to' => 'custom/include/SuiteEditor/SuiteEditorTinyMCE.php',
            ],
        '32' => [
            'from' => '<basepath>/custom/include/SuiteEditor/tpls/SuiteEditorTinyMCE.tpl',
            'to' => 'custom/include/SuiteEditor/tpls/SuiteEditorTinyMCE.tpl',
            ],
        '33' => [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreateMCCDCases.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreateMCCDCases.php',
            ],
        '34' => [
            'from' => '<basepath>/custom/metadata/Cases_AokKnowledgebaseMetaData.php',
            'to' => 'custom/metadata/Cases_AokKnowledgebaseMetaData.php',
            ],
        '35' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
            'to' => 'custom/modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
            ],
        '36' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/controller.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/controller.php',
            ],
        '37' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            ],
        '38' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            ],
        '39' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            ],
        '40' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/views/view.detail.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/views/view.detail.php',
            ],
        '41' => [
            'from' => '<basepath>/custom/modules/AOK_KnowledgeBase/views/view.edit.php',
            'to' => 'custom/modules/AOK_KnowledgeBase/views/view.edit.php',
            ],
        '42' => [
            'from' => '<basepath>/custom/modules/Campaigns/BulkCasesDotListWizardMenu.php',
            'to' => 'custom/modules/Campaigns/BulkCasesDotListWizardMenu.php',
            ],
        '43' => [
            'from' => '<basepath>/custom/modules/Campaigns/MCCDBulkCaseOverview.html',
            'to' => 'custom/modules/Campaigns/MCCDBulkCaseOverview.html',
            ],
        '44' => [
            'from' => '<basepath>/custom/modules/Campaigns/WizardHome.php',
            'to' => 'custom/modules/Campaigns/WizardHome.php',
            ],
        '45' => [
            'from' => '<basepath>/custom/modules/Campaigns/WizardMarketing.php',
            'to' => 'custom/modules/Campaigns/WizardMarketing.php',
            ],
        '46' => [
            'from' => '<basepath>/custom/modules/Campaigns/WizardNewsletter.php',
            'to' => 'custom/modules/Campaigns/WizardNewsletter.php',
            ],
        '47' => [
            'from' => '<basepath>/custom/modules/Campaigns/WizardNewsletterSave.php',
            'to' => 'custom/modules/Campaigns/WizardNewsletterSave.php',
            ],
        '48' => [
            'from' => '<basepath>/custom/modules/Campaigns/js/MCCDBulkCases.js',
            'to' => 'custom/modules/Campaigns/js/MCCDBulkCases.js',
            ],
        '49' => [
            'from' => '<basepath>/custom/modules/Campaigns/metadata/detailviewdefs.php',
            'to' => 'custom/modules/Campaigns/metadata/detailviewdefs.php',
            ],
        '50' => [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/MCCDBulkCaseDetails.tpl',
            'to' => 'custom/modules/Campaigns/tpls/MCCDBulkCaseDetails.tpl',
            ],
        '51' => [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/WizardHomeStart.tpl',
            'to' => 'custom/modules/Campaigns/tpls/WizardHomeStart.tpl',
            ],
        '52' => [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/WizardNewsletter.tpl',
            'to' => 'custom/modules/Campaigns/tpls/WizardNewsletter.tpl',
            ],
        '53' => [
            'from' => '<basepath>/custom/modules/Campaigns/tpls/progressStepsStyle.html',
            'to' => 'custom/modules/Campaigns/tpls/progressStepsStyle.html',
            ],
        '54' => [
            'from' => '<basepath>/custom/modules/Campaigns/wizard.js',
            'to' => 'custom/modules/Campaigns/wizard.js',
            ],
        '55' => [
            'from' => '<basepath>/custom/modules/Cases/MCCD/tpls/CaseDetailHeader.tpl',
            'to' => 'custom/modules/Cases/MCCD/tpls/CaseDetailHeader.tpl',
            ],
        '56' => [
            'from' => '<basepath>/custom/modules/Cases/MCCD/tpls/ListViewData.tpl',
            'to' => 'custom/modules/Cases/MCCD/tpls/ListViewData.tpl',
            ],
        '57' => [
            'from' => '<basepath>/custom/modules/Cases/Services/MCCDCaseManagementHooks.php',
            'to' => 'custom/modules/Cases/Services/MCCDCaseManagementHooks.php',
            ],
        '58' => [
            'from' => '<basepath>/custom/modules/Cases/controller.php',
            'to' => 'custom/modules/Cases/controller.php',
            ],
        '59' => [
            'from' => '<basepath>/custom/modules/Cases/metadata/detailviewdefs.php',
            'to' => 'custom/modules/Cases/metadata/detailviewdefs.php',
            ],
        '60' => [
            'from' => '<basepath>/custom/modules/Cases/metadata/editviewdefs.php',
            'to' => 'custom/modules/Cases/metadata/editviewdefs.php',
            ],
        '61' => [
            'from' => '<basepath>/custom/modules/Cases/metadata/quickcreatedefs.php',
            'to' => 'custom/modules/Cases/metadata/quickcreatedefs.php',
            ],
        '62' => [
            'from' => '<basepath>/custom/modules/Cases/views/view.detail.php',
            'to' => 'custom/modules/Cases/views/view.detail.php',
            ],
        '63' => [
            'from' => '<basepath>/custom/modules/Cases/views/view.edit.php',
            'to' => 'custom/modules/Cases/views/view.edit.php',
            ],
        '64' => [
            'from' => '<basepath>/custom/modules/Cases/views/view.list.php',
            'to' => 'custom/modules/Cases/views/view.list.php',
            ],
        '65' => [
            'from' => '<basepath>/custom/modules/EmailTemplates/EditView.php',
            'to' => 'custom/modules/EmailTemplates/EditView.php',
            ],
        '66' => [
            'from' => '<basepath>/custom/modules/Emails/include/ComposeView/EmailsComposeView.js',
            'to' => 'custom/modules/Emails/include/ComposeView/EmailsComposeView.js',
            ],
        '67' => [
            'from' => '<basepath>/custom/modules/Emails/metadata/composeviewdefs.php',
            'to' => 'custom/modules/Emails/metadata/composeviewdefs.php',
            ],
        '68' => [
            'from' => '<basepath>/custom/modules/Emails/views/view.compose.php',
            'to' => 'custom/modules/Emails/views/view.compose.php',
            ],
        '69' => [
            'from' => '<basepath>/custom/modules/Leads/views/view.list.php',
            'to' => 'custom/modules/Leads/views/view.list.php',
            ],
        '70' => [
            'from' => '<basepath>/custom/modules/Users/LogicHooks/MCCDWysiwygUsersHooks.php',
            'to' => 'custom/modules/Users/LogicHooks/MCCDWysiwygUsersHooks.php',
            ],
        '71' => [
            'from' => '<basepath>/custom/themes/SuiteP/MCCDCaseManagement/images/check.svg',
            'to' => 'custom/themes/SuiteP/MCCDCaseManagement/images/check.svg',
            ],
        '72' => [
            'from' => '<basepath>/custom/themes/SuiteP/MCCDCaseManagement/images/check_circle.svg',
            'to' => 'custom/themes/SuiteP/MCCDCaseManagement/images/check_circle.svg',
            ],
        '73' => [
            'from' => '<basepath>/custom/themes/SuiteP/MCCDCaseManagement/images/copy.svg',
            'to' => 'custom/themes/SuiteP/MCCDCaseManagement/images/copy.svg',
            ],
        '74' => [
            'from' => '<basepath>/custom/themes/SuiteP/tpls/_head.tpl',
            'to' => 'custom/themes/SuiteP/tpls/_head.tpl',
            ],
        '75' => [
            'from' => '<basepath>/include/HtmlSanitizer.php',
            'to' => 'include/HtmlSanitizer.php',
            ],
        '76' => [
            'from' => '<basepath>/modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            'to' => 'modules/AOK_KnowledgeBase/metadata/SearchFields.php',
            ],
        '77' => [
            'from' => '<basepath>/modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            'to' => 'modules/AOK_KnowledgeBase/metadata/detailviewdefs.php',
            ],
        '78' => [
            'from' => '<basepath>/modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            'to' => 'modules/AOK_KnowledgeBase/metadata/searchdefs.php',
            ],
        '79' => [
            'from' => '<basepath>/modules/AOW_WorkFlow/AOW_WorkFlow.php',
            'to' => 'modules/AOW_WorkFlow/AOW_WorkFlow.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1616073231',
    ];