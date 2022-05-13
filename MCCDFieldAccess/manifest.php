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
    'description' => 'MCCD Configurable field level access',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD Field Level Access',
    'published_date' => '2021-03-26 08:18:56',
    'type' => 'module',
    'version' => '20',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        '0' => [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/MCCDFieldAccess.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/MCCDFieldAccess.php',
            ],
        '1' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_FieldAccess.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_FieldAccess.php',
            ],
        '2' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.MCCDFieldAccess.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.MCCDFieldAccess.php',
            ],
        '3' => [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/MCCDFieldRestriction.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/MCCDFieldRestriction.php',
            ],
        '4' => [
            'from' => '<basepath>/custom/Extension/application/Ext/Utils/MCCDUtils.php',
            'to' => 'custom/Extension/application/Ext/Utils/MCCDUtils.php',
            ],
        '5' => [
            'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        '6' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/MCCDFieldAccess.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/MCCDFieldAccess.php',
            ],
        '7' => [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.MCCDFieldAccess.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.MCCDFieldAccess.php',
            ],
        '8' => [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        '9' => [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        '10' => [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        '11' => [
            'from' => '<basepath>/custom/include/Services/MCCDFieldRestriction.php',
            'to' => 'custom/include/Services/MCCDFieldRestriction.php',
            ],
        '12' => [
            'from' => '<basepath>/custom/include/SugarEmailAddress/saGetEmailAddressWidget.php',
            'to' => 'custom/include/SugarEmailAddress/saGetEmailAddressWidget.php',
            ],
        '13' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/DetailView.tpl',
            ],
        '14' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/EditView.tpl',
            ],
        '15' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/en_us.DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/en_us.DetailView.tpl',
            ],
        '16' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/en_us.EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/en_us.EditView.tpl',
            ],
        '17' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/DetailView.tpl',
            ],
        '18' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/DetailViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/DetailViewFunction.tpl',
            ],
        '19' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/EditView.tpl',
            ],
        '20' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/InlineEdit.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/InlineEdit.tpl',
            ],
        '21' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/DetailView.tpl',
            ],
        '22' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/EditView.tpl',
            ],
        '23' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/InlineEdit.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/InlineEdit.tpl',
            ],
        '24' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Currency/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Currency/DetailView.tpl',
            ],
        '25' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Currency/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Currency/EditView.tpl',
            ],
        '26' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Datetime/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Datetime/DetailView.tpl',
            ],
        '27' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Datetime/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Datetime/EditView.tpl',
            ],
        '28' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Datetimecombo/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Datetimecombo/EditView.tpl',
            ],
        '29' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Dynamicenum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Dynamicenum/EditView.tpl',
            ],
        '30' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/DetailView.tpl',
            ],
        '31' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/DetailViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/DetailViewFunction.tpl',
            ],
        '32' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/EditView.tpl',
            ],
        '33' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/EditViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/EditViewFunction.tpl',
            ],
        '34' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/File/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/File/DetailView.tpl',
            ],
        '35' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/File/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/File/EditView.tpl',
            ],
        '36' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Float/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Float/DetailView.tpl',
            ],
        '37' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Float/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Float/EditView.tpl',
            ],
        '38' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Iframe/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Iframe/DetailView.tpl',
            ],
        '39' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Iframe/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Iframe/EditView.tpl',
            ],
        '40' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Image/DetailView.tpl',
            ],
        '41' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Image/EditView.tpl',
            ],
        '42' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/deleteAttachment.php',
            'to' => 'custom/include/SugarFields/Fields/Image/deleteAttachment.php',
            ],
        '43' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Int/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Int/DetailView.tpl',
            ],
        '44' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Int/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Int/EditView.tpl',
            ],
        '45' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Link/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Link/DetailView.tpl',
            ],
        '46' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Link/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Link/EditView.tpl',
            ],
        '47' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/DetailView.tpl',
            ],
        '48' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/EditView.tpl',
            ],
        '49' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/EditViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/EditViewFunction.tpl',
            ],
        '50' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Parent/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Parent/DetailView.tpl',
            ],
        '51' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Parent/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Parent/EditView.tpl',
            ],
        '52' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Password/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Password/EditView.tpl',
            ],
        '53' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Phone/DetailView.tpl',
            ],
        '54' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Phone/EditView.tpl',
            ],
        '55' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Relate/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Relate/DetailView.tpl',
            ],
        '56' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Relate/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Relate/EditView.tpl',
            ],
        '57' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Text/ClassicEditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Text/ClassicEditView.tpl',
            ],
        '58' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Text/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Text/DetailView.tpl',
            ],
        '59' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Text/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Text/EditView.tpl',
            ],
        '60' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/URL/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/URL/DetailView.tpl',
            ],
        '61' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/URL/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/URL/EditView.tpl',
            ],
        '62' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Wysiwyg/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Wysiwyg/DetailView.tpl',
            ],
        '63' => [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Wysiwyg/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Wysiwyg/EditView.tpl',
            ],
        '64' => [
            'from' => '<basepath>/custom/include/SugarFields/Redacted.tpl',
            'to' => 'custom/include/SugarFields/Redacted.tpl',
            ],
        '65' => [
            'from' => '<basepath>/custom/modules/Administration/MCCDFieldAccess.php',
            'to' => 'custom/modules/Administration/MCCDFieldAccess.php',
            ],
        '66' => [
            'from' => '<basepath>/custom/modules/Administration/MCCDFieldAccess.tpl',
            'to' => 'custom/modules/Administration/MCCDFieldAccess.tpl',
            ],
        '67' => [
            'from' => '<basepath>/custom/modules/Administration/MCCDFieldAccessPage.php',
            'to' => 'custom/modules/Administration/MCCDFieldAccessPage.php',
            ],
        '68' => [
            'from' => '<basepath>/custom/modules/Administration/MCCDFieldAccessPage.tpl',
            'to' => 'custom/modules/Administration/MCCDFieldAccessPage.tpl',
            ],
        '69' => [
            'from' => '<basepath>/custom/modules/Administration/MCCDFieldAccessSave.php',
            'to' => 'custom/modules/Administration/MCCDFieldAccessSave.php',
            ],
        '70' => [
            'from' => '<basepath>/custom/modules/Home/controller.php',
            'to' => 'custom/modules/Home/controller.php',
            ],
        '71' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_FieldAccess.gif',
            'to' => 'custom/themes/default/images/CreateSA_FieldAccess.gif',
            ],
        '72' => [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/CreateSA_FieldAccess.svg',
            ],
        '73' => [
            'from' => '<basepath>/custom/themes/default/images/SA_FieldAccess.gif',
            'to' => 'custom/themes/default/images/SA_FieldAccess.gif',
            ],
        '74' => [
            'from' => '<basepath>/custom/themes/default/images/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/SA_FieldAccess.svg',
            ],
        '75' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_FieldAccess.gif',
            'to' => 'custom/themes/default/images/icon_SA_FieldAccess.gif',
            ],
        '76' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_FieldAccess_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_FieldAccess_32.gif',
            ],
        '77' => [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_FieldAccess_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_FieldAccess_32.svg',
            ],
        '78' => [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_FieldAccess.svg',
            ],
        '79' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_FieldAccess.svg',
            ],
        '80' => [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_FieldAccess.svg',
            ],
        '81' => [
            'from' => '<basepath>/include/MVC/Controller/SugarController.php',
            'to' => 'include/MVC/Controller/SugarController.php',
            ],
        '147' => [
            'from' => '<basepath>/modules/Contacts/metadata/editviewdefs.php',
            'to' => 'modules/Contacts/metadata/editviewdefs.php',
            ],
        '148' => [
            'from' => '<basepath>/modules/SA_FieldAccess/SA_FieldAccess.php',
            'to' => 'modules/SA_FieldAccess/SA_FieldAccess.php',
            ],
        '149' => [
            'from' => '<basepath>/modules/SA_FieldAccess/language/en_us.lang.php',
            'to' => 'modules/SA_FieldAccess/language/en_us.lang.php',
            ],
        '150' => [
            'from' => '<basepath>/modules/SA_FieldAccess/vardefs.php',
            'to' => 'modules/SA_FieldAccess/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1646742600',
    ];