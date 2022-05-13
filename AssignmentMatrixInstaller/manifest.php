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
    'description' => 'Adds the Assignment Matrix field type and fields to the Contact module',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Assignment Matrix',
    'published_date' => '2022-03-11 14:23:16',
    'type' => 'module',
    'version' => '11',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/MCCDAssignToMe.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/MCCDAssignToMe.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/MCCDContactReportMassiveAssignment.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/MCCDContactReportMassiveAssignment.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDAssignment.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDAssignment.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/modules/AOR_Reports/Ext/Language/en_us.MCCDAssignment.php',
            'to' => 'custom/Extension/modules/AOR_Reports/Ext/Language/en_us.MCCDAssignment.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.MCCDAssignment.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.MCCDAssignment.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/LogicHooks/MCCDAssignment.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/MCCDAssignment.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/MCCDAssignment.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/MCCDAssignment.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.MCCDAssignment.php',
            'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.MCCDAssignment.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MassAdvisorAssignJob.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MassAdvisorAssignJob.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/include/Services/MCCDAssignment/AssignToMeEntryPoint.php',
            'to' => 'custom/include/Services/MCCDAssignment/AssignToMeEntryPoint.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/include/Services/MCCDAssignment/MassiveAssignFromReportEntryPoint.php',
            'to' => 'custom/include/Services/MCCDAssignment/MassiveAssignFromReportEntryPoint.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/SugarFieldBool.php',
            'to' => 'custom/include/SugarFields/Fields/Bool/SugarFieldBool.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/MCCDAssignment/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/MCCDAssignment/DetailView.tpl',
            ],
        '13' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/MCCDAssignment/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/MCCDAssignment/EditView.tpl',
            ],
        '14' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/MCCDAssignment/MCCDAssignmentLogicHooks.php',
            'to' => 'custom/include/SugarFields/Fields/MCCDAssignment/MCCDAssignmentLogicHooks.php',
            ],
        '15' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/MCCDAssignment/MCCDSearchFieldPatch.php',
            'to' => 'custom/include/SugarFields/Fields/MCCDAssignment/MCCDSearchFieldPatch.php',
            ],
        '16' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/MCCDAssignment/SearchView.tpl',
            'to' => 'custom/include/SugarFields/Fields/MCCDAssignment/SearchView.tpl',
            ],
        '17' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/MCCDAssignment/SugarFieldMCCDAssignment.php',
            'to' => 'custom/include/SugarFields/Fields/MCCDAssignment/SugarFieldMCCDAssignment.php',
            ],
        '18' => [
            'from' => '<basepath>/custom/modules/AOR_Reports/AOR_Report.js',
            'to' => 'custom/modules/AOR_Reports/AOR_Report.js',
            ],
        '19' => [
            'from' => '<basepath>/custom/modules/AOR_Reports/metadata/detailviewdefs.php',
            'to' => 'custom/modules/AOR_Reports/metadata/detailviewdefs.php',
            ],
        '20' => [
            'from' => '<basepath>/custom/modules/AOR_Reports/tpls/popupAdvisors.tpl',
            'to' => 'custom/modules/AOR_Reports/tpls/popupAdvisors.tpl',
            ],
        '21' => [
            'from' => '<basepath>/custom/modules/AOR_Reports/views/view.detail.php',
            'to' => 'custom/modules/AOR_Reports/views/view.detail.php',
            ],
        '22' => [
            'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/TemplateMCCDAssignment.php',
            'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateMCCDAssignment.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1647008596',
    ];