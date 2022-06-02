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
    'description' => 'ASSIST Workflow Webhooks',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Workflow Webhooks',
    'published_date' => '2021-08-25 15:03:17',
    'type' => 'module',
    'version' => '11',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/modules/AOP_Case_Updates/Ext/Language/en_us.ASSISTCaseManagement.php',
            'to' => 'custom/Extension/modules/AOP_Case_Updates/Ext/Language/en_us.ASSISTCaseManagement.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Actions/SAWebhooks.php',
            'to' => 'custom/Extension/modules/AOW_Actions/Ext/Actions/SAWebhooks.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SAWebHooks.php',
            'to' => 'custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SAWebHooks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/ASSISTTemplateParser.php',
            'to' => 'custom/modules/AOW_Actions/actions/ASSISTTemplateParser.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/actionSAWebHooks.php',
            'to' => 'custom/modules/AOW_Actions/actions/actionSAWebHooks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/actionSendEmail.php',
            'to' => 'custom/modules/AOW_Actions/actions/actionSendEmail.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/js/actionSAWebHook.js',
            'to' => 'custom/modules/AOW_Actions/actions/js/actionSAWebHook.js',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/tpl/SAWebHooksEdit.tpl',
            'to' => 'custom/modules/AOW_Actions/actions/tpl/SAWebHooksEdit.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_WorkFlow/controller.php',
            'to' => 'custom/modules/AOW_WorkFlow/controller.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1629900197',
    ];