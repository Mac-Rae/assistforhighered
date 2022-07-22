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
    'description' => 'Theme for ASSIST SuiteCRM Instances',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST SuiteCRM Theme',
    'published_date' => '2021-01-26 09:20:21',
    'type' => 'module',
    'version' => '32',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/SurveyCSS.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/SurveyCSS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/GlobalLinks/ASSISTTheme.php',
            'to' => 'custom/Extension/application/Ext/GlobalLinks/ASSISTTheme.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTTheme.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTTheme.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/ASSISTTheme.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/ASSISTTheme.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTTheme.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTTheme.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.ASSISTTheme.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.ASSISTTheme.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/LICENSE.md',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/LICENSE.md',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/README.md',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/README.md',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/bin/pscss',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/bin/pscss',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/composer.json',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/composer.json',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/phpcs.xml.dist',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/phpcs.xml.dist',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/scss.inc.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/scss.inc.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Base/Range.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Base/Range.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Block.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Block.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Cache.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Cache.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Colors.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Colors.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/CompilationResult.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/CompilationResult.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Compiler.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Compiler.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Compiler/CachedResult.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Compiler/CachedResult.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Compiler/Environment.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Compiler/Environment.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Exception/CompilerException.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Exception/CompilerException.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Exception/ParserException.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Exception/ParserException.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Exception/RangeException.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Exception/RangeException.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Exception/SassException.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Exception/SassException.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Exception/SassScriptException.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Exception/SassScriptException.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Exception/ServerException.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Exception/ServerException.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/Compact.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/Compact.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/Compressed.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/Compressed.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/Crunched.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/Crunched.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/Debug.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/Debug.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/Expanded.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/Expanded.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/Nested.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/Nested.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Formatter/OutputBlock.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Formatter/OutputBlock.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Logger/LoggerInterface.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Logger/LoggerInterface.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Logger/QuietLogger.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Logger/QuietLogger.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Logger/StreamLogger.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Logger/StreamLogger.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Node.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Node.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Node/Number.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Node/Number.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/OutputStyle.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/OutputStyle.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Parser.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Parser.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/SourceMap/Base64.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/SourceMap/Base64.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/SourceMap/Base64VLQ.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/SourceMap/Base64VLQ.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/SourceMap/SourceMapGenerator.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/SourceMap/SourceMapGenerator.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Type.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Type.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Util.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Util.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Util/Path.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Util/Path.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/ValueConverter.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/ValueConverter.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Version.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Version.php',
            ],
        [
            'from' => '<basepath>/custom/include/ASSISTThemeLib/scssphp/src/Warn.php',
            'to' => 'custom/include/ASSISTThemeLib/scssphp/src/Warn.php',
            ],
        [
            'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php',
            'to' => 'custom/include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTTheme.php',
            'to' => 'custom/modules/Administration/ASSISTTheme.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTTheme.tpl',
            'to' => 'custom/modules/Administration/ASSISTTheme.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Surveys/Entry/Survey.php',
            'to' => 'custom/modules/Surveys/Entry/Survey.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Surveys/Entry/Thanks.php',
            'to' => 'custom/modules/Surveys/Entry/Thanks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Surveys/css/survey.css',
            'to' => 'custom/modules/Surveys/css/survey.css',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/images/accept_inline.svg',
            'to' => 'custom/themes/SuiteP/images/accept_inline.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/images/decline_inline.svg',
            'to' => 'custom/themes/SuiteP/images/decline_inline.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/images/sugar_icon.ico',
            'to' => 'custom/themes/SuiteP/images/sugar_icon.ico',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/images/tentative_inline.svg',
            'to' => 'custom/themes/SuiteP/images/tentative_inline.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/themedef.php',
            'to' => 'custom/themes/SuiteP/themedef.php',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/tpls/_headerModuleList.tpl',
            'to' => 'custom/themes/SuiteP/tpls/_headerModuleList.tpl',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/company_logo.png',
            'to' => 'custom/themes/default/images/company_logo.png',
            ],
        [
            'from' => '<basepath>/include/SubPanel/SubPanelTiles.php',
            'to' => 'include/SubPanel/SubPanelTiles.php',
            ],
        [
            'from' => '<basepath>/themes/SuiteP/css/ASSIST/color-palette.scss',
            'to' => 'themes/SuiteP/css/ASSIST/color-palette.scss',
            ],
        [
            'from' => '<basepath>/themes/SuiteP/css/ASSIST/icons.scss',
            'to' => 'themes/SuiteP/css/ASSIST/icons.scss',
            ],
        [
            'from' => '<basepath>/themes/SuiteP/css/ASSIST/style.css',
            'to' => 'themes/SuiteP/css/ASSIST/style.css',
            ],
        [
            'from' => '<basepath>/themes/SuiteP/css/ASSIST/style.scss',
            'to' => 'themes/SuiteP/css/ASSIST/style.scss',
            ],
        [
            'from' => '<basepath>/themes/SuiteP/css/ASSIST/variables.scss',
            'to' => 'themes/SuiteP/css/ASSIST/variables.scss',
            ],
        ],
    'language' => [
        ],
    'id' => '1611652821',
    ];