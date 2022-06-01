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
    'name' => 'ASSIST Assignment Matrix',
    'published_date' => '2022-03-11 14:23:16',
    'type' => 'module',
    'version' => '12',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/ASSISTAssignToMe.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/ASSISTAssignToMe.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/ASSISTContactReportMassiveAssignment.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/ASSISTContactReportMassiveAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTAssignment.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOR_Reports/Ext/Language/en_us.ASSISTAssignment.php',
            'to' => 'custom/Extension/modules/AOR_Reports/Ext/Language/en_us.ASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTAssignment.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTAssignment.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTAssignment.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.ASSISTAssignment.php',
            'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.ASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MassAdvisorAssignJob.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/MassAdvisorAssignJob.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/ASSISTAssignment/AssignToMeEntryPoint.php',
            'to' => 'custom/include/Services/ASSISTAssignment/AssignToMeEntryPoint.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/ASSISTAssignment/MassiveAssignFromReportEntryPoint.php',
            'to' => 'custom/include/Services/ASSISTAssignment/MassiveAssignFromReportEntryPoint.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/ASSISTAssignment/ASSISTAssignmentLogicHooks.php',
            'to' => 'custom/include/SugarFields/Fields/ASSISTAssignment/ASSISTAssignmentLogicHooks.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/ASSISTAssignment/ASSISTSearchFieldPatch.php',
            'to' => 'custom/include/SugarFields/Fields/ASSISTAssignment/ASSISTSearchFieldPatch.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/ASSISTAssignment/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/ASSISTAssignment/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/ASSISTAssignment/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/ASSISTAssignment/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/ASSISTAssignment/SearchView.tpl',
            'to' => 'custom/include/SugarFields/Fields/ASSISTAssignment/SearchView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/ASSISTAssignment/SugarFieldASSISTAssignment.php',
            'to' => 'custom/include/SugarFields/Fields/ASSISTAssignment/SugarFieldASSISTAssignment.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/SugarFieldBool.php',
            'to' => 'custom/include/SugarFields/Fields/Bool/SugarFieldBool.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOR_Reports/AOR_Report.js',
            'to' => 'custom/modules/AOR_Reports/AOR_Report.js',
            ],
        [
            'from' => '<basepath>/custom/modules/AOR_Reports/metadata/detailviewdefs.php',
            'to' => 'custom/modules/AOR_Reports/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOR_Reports/tpls/popupAdvisors.tpl',
            'to' => 'custom/modules/AOR_Reports/tpls/popupAdvisors.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/AOR_Reports/views/view.detail.php',
            'to' => 'custom/modules/AOR_Reports/views/view.detail.php',
            ],
        [
            'from' => '<basepath>/custom/modules/DynamicFields/templates/Fields/TemplateASSISTAssignment.php',
            'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateASSISTAssignment.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1647008596',
    ];