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
    'description' => 'ASSIST Configurable field level access',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Field Level Access',
    'published_date' => '2021-03-26 08:18:56',
    'type' => 'module',
    'version' => '24',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/ASSISTFieldAccess.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/ASSISTFieldAccess.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_FieldAccess.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_FieldAccess.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.ASSISTFieldAccess.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.ASSISTFieldAccess.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/ASSISTFieldRestriction.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/ASSISTFieldRestriction.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Utils/ASSISTUtils.php',
            'to' => 'custom/Extension/application/Ext/Utils/ASSISTUtils.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/ASSISTFieldAccess.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/ASSISTFieldAccess.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTFieldAccess.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.ASSISTFieldAccess.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Prospects/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/SAEmailAddressFieldRestriction.php',
            ],
        [
            'from' => '<basepath>/custom/application/Ext/Api/V8/helpers.php',
            'to' => 'custom/application/Ext/Api/V8/helpers.php',
            ],
        [
            'from' => '<basepath>/custom/application/Ext/Api/V8/services.php',
            'to' => 'custom/application/Ext/Api/V8/services.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/ASSISTAPI/SAAttributeHelper.php',
            'to' => 'custom/include/Services/ASSISTAPI/SAAttributeHelper.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/ASSISTAPI/SAModuleService.php',
            'to' => 'custom/include/Services/ASSISTAPI/SAModuleService.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/ASSISTFieldRestriction.php',
            'to' => 'custom/include/Services/ASSISTFieldRestriction.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarEmailAddress/saGetEmailAddressWidget.php',
            'to' => 'custom/include/SugarEmailAddress/saGetEmailAddressWidget.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/en_us.DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/en_us.DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Address/en_us.EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Address/en_us.EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/DetailViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/DetailViewFunction.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/InlineEdit.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/InlineEdit.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Base/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Base/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/InlineEdit.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/InlineEdit.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Bool/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Bool/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Currency/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Currency/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Currency/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Currency/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Currency/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Currency/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Datetime/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Datetime/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Datetime/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Datetime/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Datetimecombo/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Datetimecombo/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Dynamicenum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Dynamicenum/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/DetailViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/DetailViewFunction.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Enum/EditViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Enum/EditViewFunction.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/File/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/File/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/File/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/File/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/File/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/File/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Float/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Float/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Float/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Float/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Iframe/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Iframe/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Iframe/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Iframe/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Image/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Image/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Image/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Image/deleteAttachment.php',
            'to' => 'custom/include/SugarFields/Fields/Image/deleteAttachment.php',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Int/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Int/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Int/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Int/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Link/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Link/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Link/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Link/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Link/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Link/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/EditViewFunction.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/EditViewFunction.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Multienum/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Multienum/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Parent/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Parent/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Parent/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Parent/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Password/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Password/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Phone/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Phone/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Phone/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Radioenum/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Radioenum/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Radioenum/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Radioenum/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Relate/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Relate/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Relate/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Relate/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Text/ClassicEditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Text/ClassicEditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Text/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Text/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Text/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Text/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/URL/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/URL/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/URL/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/URL/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/URL/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/URL/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Wysiwyg/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Wysiwyg/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Wysiwyg/EditView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Wysiwyg/EditView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Wysiwyg/ListView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Wysiwyg/ListView.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Redacted.tpl',
            'to' => 'custom/include/SugarFields/Redacted.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTFieldAccess.php',
            'to' => 'custom/modules/Administration/ASSISTFieldAccess.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTFieldAccess.tpl',
            'to' => 'custom/modules/Administration/ASSISTFieldAccess.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTFieldAccessPage.php',
            'to' => 'custom/modules/Administration/ASSISTFieldAccessPage.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTFieldAccessPage.tpl',
            'to' => 'custom/modules/Administration/ASSISTFieldAccessPage.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/ASSISTFieldAccessSave.php',
            'to' => 'custom/modules/Administration/ASSISTFieldAccessSave.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Home/controller.php',
            'to' => 'custom/modules/Home/controller.php',
            ],
        [
            'from' => '<basepath>/custom/themes/SuiteP/include/ListView/ListViewGeneric.tpl',
            'to' => 'custom/themes/SuiteP/include/ListView/ListViewGeneric.tpl',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_FieldAccess.gif',
            'to' => 'custom/themes/default/images/CreateSA_FieldAccess.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/CreateSA_FieldAccess.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_FieldAccess.gif',
            'to' => 'custom/themes/default/images/SA_FieldAccess.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/SA_FieldAccess.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_FieldAccess.gif',
            'to' => 'custom/themes/default/images/icon_SA_FieldAccess.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_FieldAccess_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_FieldAccess_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_FieldAccess_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_FieldAccess_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_FieldAccess.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_FieldAccess.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_FieldAccess.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_FieldAccess.svg',
            ],
        [
            'from' => '<basepath>/include/MVC/Controller/SugarController.php',
            'to' => 'include/MVC/Controller/SugarController.php',
            ],
        [
            'from' => '<basepath>/modules/Contacts/metadata/editviewdefs.php',
            'to' => 'modules/Contacts/metadata/editviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_FieldAccess/SA_FieldAccess.php',
            'to' => 'modules/SA_FieldAccess/SA_FieldAccess.php',
            ],
        [
            'from' => '<basepath>/modules/SA_FieldAccess/language/en_us.lang.php',
            'to' => 'modules/SA_FieldAccess/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_FieldAccess/vardefs.php',
            'to' => 'modules/SA_FieldAccess/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1646742600',
    ];