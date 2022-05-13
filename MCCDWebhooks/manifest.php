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
    'description' => 'MCCD Workflow Webhooks',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Workflow Webhooks',
    'published_date' => '2021-08-25 15:03:17',
    'type' => 'module',
    'version' => '10',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Actions/SAWebhooks.php',
            'to' => 'custom/Extension/modules/AOW_Actions/Ext/Actions/SAWebhooks.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SAWebHooks.php',
            'to' => 'custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SAWebHooks.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/MCCDTemplateParser.php',
            'to' => 'custom/modules/AOW_Actions/actions/MCCDTemplateParser.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/actionSAWebHooks.php',
            'to' => 'custom/modules/AOW_Actions/actions/actionSAWebHooks.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/actionSendEmail.php',
            'to' => 'custom/modules/AOW_Actions/actions/actionSendEmail.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/js/actionSAWebHook.js',
            'to' => 'custom/modules/AOW_Actions/actions/js/actionSAWebHook.js',
            ],
        '6' => [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/tpl/SAWebHooksEdit.tpl',
            'to' => 'custom/modules/AOW_Actions/actions/tpl/SAWebHooksEdit.tpl',
            ],
        '7' => [
            'from' => '<basepath>/custom/modules/AOW_WorkFlow/controller.php',
            'to' => 'custom/modules/AOW_WorkFlow/controller.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1629900197',
    ];