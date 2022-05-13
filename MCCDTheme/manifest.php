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
    'author' => 'SalesAgility',
    'description' => 'Theme for Maricopa Community Colleges SuiteCRM',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'Maricopa Community Colleges SuiteCRM Theme',
    'published_date' => '2021-01-26 09:20:21',
    'type' => 'module',
    'version' => '29',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/GlobalLinks/MCCDTheme.php',
            'to' => 'custom/Extension/application/Ext/GlobalLinks/MCCDTheme.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDTheme.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDTheme.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/MaricopaTheme.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/MaricopaTheme.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.MaricopaTheme.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.MaricopaTheme.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.MCCDTheme.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.MCCDTheme.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/LICENSE.md',
            'to' => 'custom/include/MCCDThemeLib/scssphp/LICENSE.md',
            ],
        '6' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/README.md',
            'to' => 'custom/include/MCCDThemeLib/scssphp/README.md',
            ],
        '7' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/bin/pscss',
            'to' => 'custom/include/MCCDThemeLib/scssphp/bin/pscss',
            ],
        '8' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/composer.json',
            'to' => 'custom/include/MCCDThemeLib/scssphp/composer.json',
            ],
        '9' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/phpcs.xml.dist',
            'to' => 'custom/include/MCCDThemeLib/scssphp/phpcs.xml.dist',
            ],
        '10' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/scss.inc.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/scss.inc.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Base/Range.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Base/Range.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Block.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Block.php',
            ],
        '13' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Cache.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Cache.php',
            ],
        '14' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Colors.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Colors.php',
            ],
        '15' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/CompilationResult.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/CompilationResult.php',
            ],
        '16' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Compiler.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Compiler.php',
            ],
        '17' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Compiler/CachedResult.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Compiler/CachedResult.php',
            ],
        '18' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Compiler/Environment.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Compiler/Environment.php',
            ],
        '19' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Exception/CompilerException.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Exception/CompilerException.php',
            ],
        '20' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Exception/ParserException.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Exception/ParserException.php',
            ],
        '21' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Exception/RangeException.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Exception/RangeException.php',
            ],
        '22' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Exception/SassException.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Exception/SassException.php',
            ],
        '23' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Exception/SassScriptException.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Exception/SassScriptException.php',
            ],
        '24' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Exception/ServerException.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Exception/ServerException.php',
            ],
        '25' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter.php',
            ],
        '26' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/Compact.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/Compact.php',
            ],
        '27' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/Compressed.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/Compressed.php',
            ],
        '28' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/Crunched.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/Crunched.php',
            ],
        '29' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/Debug.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/Debug.php',
            ],
        '30' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/Expanded.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/Expanded.php',
            ],
        '31' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/Nested.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/Nested.php',
            ],
        '32' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Formatter/OutputBlock.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Formatter/OutputBlock.php',
            ],
        '33' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Logger/LoggerInterface.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Logger/LoggerInterface.php',
            ],
        '34' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Logger/QuietLogger.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Logger/QuietLogger.php',
            ],
        '35' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Logger/StreamLogger.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Logger/StreamLogger.php',
            ],
        '36' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Node.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Node.php',
            ],
        '37' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Node/Number.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Node/Number.php',
            ],
        '38' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/OutputStyle.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/OutputStyle.php',
            ],
        '39' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Parser.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Parser.php',
            ],
        '40' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/SourceMap/Base64.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/SourceMap/Base64.php',
            ],
        '41' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/SourceMap/Base64VLQ.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/SourceMap/Base64VLQ.php',
            ],
        '42' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/SourceMap/SourceMapGenerator.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/SourceMap/SourceMapGenerator.php',
            ],
        '43' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Type.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Type.php',
            ],
        '44' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Util.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Util.php',
            ],
        '45' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Util/Path.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Util/Path.php',
            ],
        '46' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/ValueConverter.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/ValueConverter.php',
            ],
        '47' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Version.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Version.php',
            ],
        '48' => [
            'from' => '<basepath>/custom/include/MCCDThemeLib/scssphp/src/Warn.php',
            'to' => 'custom/include/MCCDThemeLib/scssphp/src/Warn.php',
            ],
        '49' => [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php',
            ],
        '50' => [
            'from' => '<basepath>/custom/modules/Administration/MaricopaTheme.php',
            'to' => 'custom/modules/Administration/MaricopaTheme.php',
            ],
        '51' => [
            'from' => '<basepath>/custom/modules/Administration/MaricopaTheme.tpl',
            'to' => 'custom/modules/Administration/MaricopaTheme.tpl',
            ],
        '52' => [
            'from' => '<basepath>/custom/themes/SuiteP/images/accept_inline.svg',
            'to' => 'custom/themes/SuiteP/images/accept_inline.svg',
            ],
        '53' => [
            'from' => '<basepath>/custom/themes/SuiteP/images/decline_inline.svg',
            'to' => 'custom/themes/SuiteP/images/decline_inline.svg',
            ],
        '54' => [
            'from' => '<basepath>/custom/themes/SuiteP/images/sugar_icon.ico',
            'to' => 'custom/themes/SuiteP/images/sugar_icon.ico',
            ],
        '55' => [
            'from' => '<basepath>/custom/themes/SuiteP/images/tentative_inline.svg',
            'to' => 'custom/themes/SuiteP/images/tentative_inline.svg',
            ],
        '56' => [
            'from' => '<basepath>/custom/themes/SuiteP/themedef.php',
            'to' => 'custom/themes/SuiteP/themedef.php',
            ],
        '57' => [
            'from' => '<basepath>/custom/themes/default/images/company_logo.png',
            'to' => 'custom/themes/default/images/company_logo.png',
            ],
        '58' => [
            'from' => '<basepath>/include/SubPanel/SubPanelTiles.php',
            'to' => 'include/SubPanel/SubPanelTiles.php',
            ],
        '59' => [
            'from' => '<basepath>/themes/SuiteP/css/MCCD/color-palette.scss',
            'to' => 'themes/SuiteP/css/MCCD/color-palette.scss',
            ],
        '60' => [
            'from' => '<basepath>/themes/SuiteP/css/MCCD/icons.scss',
            'to' => 'themes/SuiteP/css/MCCD/icons.scss',
            ],
        '61' => [
            'from' => '<basepath>/themes/SuiteP/css/MCCD/style.css',
            'to' => 'themes/SuiteP/css/MCCD/style.css',
            ],
        '62' => [
            'from' => '<basepath>/themes/SuiteP/css/MCCD/style.scss',
            'to' => 'themes/SuiteP/css/MCCD/style.scss',
            ],
        '63' => [
            'from' => '<basepath>/themes/SuiteP/css/MCCD/variables.scss',
            'to' => 'themes/SuiteP/css/MCCD/variables.scss',
            ],
        ],
    'language' => [
        ],
    'id' => '1611652821',
    ];