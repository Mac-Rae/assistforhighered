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
    'description' => 'MCCD SMS Plugin',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'MCCD SMS Plugin',
    'published_date' => '2022-05-02 11:56:35',
    'type' => 'module',
    'version' => '9',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/SA_SMS.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_SMS.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_SMS.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/LogicHooks/SA_SMS.php',
            'to' => 'custom/Extension/application/Ext/LogicHooks/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Actions/SA_SMS.php',
            'to' => 'custom/Extension/modules/AOW_Actions/Ext/Actions/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SA_SMS.php',
            'to' => 'custom/Extension/modules/AOW_Actions/Ext/Language/en_us.SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/AOW_WorkFlow/Ext/Language/en_us.SA_SMS.php',
            'to' => 'custom/Extension/modules/AOW_WorkFlow/Ext/Language/en_us.SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/SA_SMS.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.SA_SMS.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.SA_SMS.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/SA_SMS.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Layoutdefs/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/SA_SMS.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Layoutdefs/SA_SMS.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Layoutdefs/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/SA_SMS.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/SA_SMS/Ext/LogicHooks/SA_SMS.php',
            'to' => 'custom/Extension/modules/SA_SMS/Ext/LogicHooks/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/Language/en_us.PollHistoricSMSScheduler.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.PollHistoricSMSScheduler.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/PollHistoricSMSScheduler.php',
            'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/PollHistoricSMSScheduler.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/Clients/SA_SMSTwilioClient.php',
            'to' => 'custom/include/Services/SA_SMS/Clients/SA_SMSTwilioClient.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/PollHistoricSMSService.php',
            'to' => 'custom/include/Services/SA_SMS/PollHistoricSMSService.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/SA_SMSClient.php',
            'to' => 'custom/include/Services/SA_SMS/SA_SMSClient.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/SA_SMSTwilioWebHook.php',
            'to' => 'custom/include/Services/SA_SMS/SA_SMSTwilioWebHook.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/SMSDialogEntry.php',
            'to' => 'custom/include/Services/SA_SMS/SMSDialogEntry.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/SMSDialogSendEntry.php',
            'to' => 'custom/include/Services/SA_SMS/SMSDialogSendEntry.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/TestConnectionEntry.php',
            'to' => 'custom/include/Services/SA_SMS/TestConnectionEntry.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SA_SMS/tpls/SMSDialog.tpl',
            'to' => 'custom/include/Services/SA_SMS/tpls/SMSDialog.tpl',
            ],
        [
            'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/DetailView.tpl',
            'to' => 'custom/include/SugarFields/Fields/Phone/DetailView.tpl',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Deserialize.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Deserialize.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Domain.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Domain.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/ConfigurationException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/ConfigurationException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/DeserializeException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/DeserializeException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/EnvironmentException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/EnvironmentException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/HttpException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/HttpException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/RestException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/RestException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/TwilioException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/TwilioException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Exceptions/TwimlException.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Exceptions/TwimlException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Http/Client.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Http/Client.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Http/CurlClient.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Http/CurlClient.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Http/GuzzleClient.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Http/GuzzleClient.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Http/Response.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Http/Response.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/InstanceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/InstanceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/InstanceResource.php',
            'to' => 'custom/lib/SA_SMS/Twilio/InstanceResource.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/AccessToken.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/AccessToken.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Client/ScopeURI.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Client/ScopeURI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/ClientToken.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/ClientToken.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/ChatGrant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/ChatGrant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/Grant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/Grant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/PlaybackGrant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/PlaybackGrant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/SyncGrant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/SyncGrant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/TaskRouterGrant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/TaskRouterGrant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/VideoGrant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/VideoGrant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/Grants/VoiceGrant.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/Grants/VoiceGrant.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/JWT.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/JWT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/CapabilityToken.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/CapabilityToken.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/Policy.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/Policy.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/TaskQueueCapability.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/TaskQueueCapability.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/WorkerCapability.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/WorkerCapability.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/WorkspaceCapability.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Jwt/TaskRouter/WorkspaceCapability.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/ListResource.php',
            'to' => 'custom/lib/SA_SMS/Twilio/ListResource.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Options.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Options.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Page.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Page.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/AuthTokenPromotionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/AwsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/Credential/PublicKeyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Accounts/V1/SecondaryAuthTokenPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Address/DependentPhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Address/DependentPhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Address/DependentPhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Address/DependentPhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Address/DependentPhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Address/DependentPhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AddressPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ApplicationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/LocalPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachineInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachineInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachineList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachineList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachineOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachineOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachinePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MachineToMachinePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobileInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobileInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobileList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobileList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobileOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobileOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobilePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/MobilePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/NationalPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/SharedCostPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/TollFreePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountry/VoipPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/AvailablePhoneNumberCountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/BalanceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/BalanceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/BalanceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/BalanceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/BalancePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/BalancePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/EventInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/EventInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/EventList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/EventList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/EventPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/EventPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/FeedbackSummaryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/NotificationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/PaymentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/RecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/SiprecPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Call/StreamPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/CallPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/ParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Conference/RecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferenceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferencePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConferencePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ConnectAppPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOn/AssignedAddOnExtensionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/AssignedAddOnPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/LocalPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobileInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobileInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobileList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobileList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobileOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobileOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobilePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/MobilePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumber/TollFreePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/KeyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/FeedbackPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Message/MediaPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewKeyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NewSigningKeyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/NotificationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/OutgoingCallerIdPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Queue/MemberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueueOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueuePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/QueuePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResult/PayloadPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/AddOnResultPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Recording/TranscriptionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/RecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ShortCodePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SigningKeyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialList/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/CredentialListPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsCredentialListMappingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCalls/AuthCallsIpAccessControlListMappingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCallsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCallsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCallsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCallsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCallsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeCallsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrations/AuthRegistrationsCredentialListMappingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrationsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrationsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrationsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrationsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrationsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypes/AuthTypeRegistrationsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypesInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypesInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypesList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypesList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypesPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/AuthTypesPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/CredentialListMappingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/Domain/IpAccessControlListMappingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/DomainPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlList/IpAddressPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Sip/IpAccessControlListPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SipInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SipInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SipList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SipList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SipPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/SipPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TokenPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/TranscriptionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/AllTimePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/DailyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/LastMonthPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/MonthlyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/ThisMonthPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/TodayPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YearlyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/Record/YesterdayPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/RecordPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/Usage/TriggerPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/UsageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/UsageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/UsageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/UsageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/UsagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/UsagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/Account/ValidationRequestPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Api/V2010/AccountPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DefaultsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialogueContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialogueContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialogueInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialogueInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialogueList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialogueList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialoguePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/DialoguePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValueOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValuePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldType/FieldValuePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/FieldTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/ModelBuildPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/QueryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/StyleSheetPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/FieldPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SampleOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SamplePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/SamplePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskActionsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/Task/TaskStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/TaskPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/Assistant/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/AssistantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/RestoreAssistantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/RestoreAssistantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/RestoreAssistantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/RestoreAssistantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/RestoreAssistantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Autopilot/V1/RestoreAssistantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/DayPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/ExportCustomJobPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/Export/JobPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Bulkexports/V1/ExportPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InviteOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InvitePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/InvitePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MemberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/Channel/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RoleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RoleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RoleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RoleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RoleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RoleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RolePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/RolePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/User/UserChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/User/UserChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/User/UserChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/User/UserChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/User/UserChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/User/UserChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/Service/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/BindingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InviteOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InvitePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/InvitePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MemberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/Channel/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RoleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RoleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RoleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RoleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RoleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RoleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RolePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/RolePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserBindingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/User/UserChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/Service/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V2/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V3.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V3.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Chat/V3/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Client.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Client.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/AddressConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Configuration/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/Message/DeliveryReceiptPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/ParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Conversation/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ConversationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ParticipantConversationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RoleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RoleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RoleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RoleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RoleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RoleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RolePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/RolePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/BindingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/NotificationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Configuration/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/Message/DeliveryReceiptPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/ParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/Conversation/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ConversationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/ParticipantConversationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RoleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RoleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RoleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RoleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RoleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RoleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RolePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/RolePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/User/UserConversationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/Service/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/User/UserConversationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Conversations/V1/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/EventTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Schema/SchemaVersionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SchemaPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkTestInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkTestInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkTestList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkTestList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkTestPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkTestPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkValidateInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkValidateInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkValidateList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkValidateList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkValidatePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Sink/SinkValidatePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SinkPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/Subscription/SubscribedEventPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Events/V1/SubscriptionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/Fax/FaxMediaPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Fax/V1/FaxPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/ConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/FlexFlowPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelInviteInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelInviteInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelInviteList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelInviteList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelInvitePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelInvitePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannel/InteractionChannelParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/Interaction/InteractionChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/InteractionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FlexApi/V1/WebChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/FrontlineApi/V1/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/AnnotationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/CallSummaryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/EventPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Call/MetricPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/CallSummariesPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Conference/ConferenceParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferenceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferencePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/ConferencePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/Room/ParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/RoomPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Insights/V1/SettingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InviteOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InvitePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/InvitePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MemberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/Channel/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RoleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RoleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RoleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RoleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RoleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RoleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RolePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/RolePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/User/UserChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/User/UserChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/User/UserChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/User/UserChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/User/UserChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/User/UserChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/Service/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/BindingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InviteOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InvitePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/InvitePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MemberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/MessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/Channel/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RoleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RoleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RoleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RoleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RoleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RoleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RolePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/RolePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserBindingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/User/UserChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/Service/UserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/IpMessaging/V2/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Lookups/V1/PhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaProcessorPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/MediaRecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamer/PlaybackGrantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Media/V1/PlayerStreamerPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistration/BrandVettingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/BrandRegistrationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/DeactivationsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ExternalCampaignInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ExternalCampaignInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ExternalCampaignList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ExternalCampaignList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ExternalCampaignPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ExternalCampaignPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/AlphaSenderPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/PhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/ShortCodePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecaseInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecaseInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecaseList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecaseList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecaseOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecaseOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecasePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/Service/UsAppToPersonUsecasePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/UsecaseInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/UsecaseInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/UsecaseList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/UsecaseList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/UsecasePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Messaging/V1/UsecasePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/AlertPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Monitor/V1/EventPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/CredentialPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/BindingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/Service/NotificationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Notify/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/BundleCopyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/EvaluationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ItemAssignmentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ReplaceItemsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ReplaceItemsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ReplaceItemsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ReplaceItemsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ReplaceItemsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/Bundle/ReplaceItemsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundleOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundlePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/BundlePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/EndUserTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/RegulationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliance/SupportingDocumentTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryComplianceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryComplianceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryComplianceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryComplianceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliancePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Numbers/V2/RegulatoryCompliancePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/DayPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/ExportCustomJobPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/Export/JobPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/BulkExports/ExportPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificateOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificatePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/CertificatePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeploymentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DeviceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DevicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/DevicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/Fleet/KeyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/DeployedDevices/FleetPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocument/DependentHostedNumberOrderPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/AuthorizationDocumentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/HostedNumbers/HostedNumberOrderPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOn/AvailableAddOnExtensionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/AvailableAddOnPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOn/InstalledAddOnExtensionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Marketplace/InstalledAddOnPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/Document/DocumentPermissionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/DocumentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListItemPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncList/SyncListPermissionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncListPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapItemPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMap/SyncMapPermissionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/Service/SyncMapPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Sync/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannel/ChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannel/ChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannel/ChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannel/ChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannel/ChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannel/ChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandedChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/BrandsInformationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CpsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/TrustedComms/CurrentCallPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantFallbackActionsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/AssistantInitiationActionsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialogueContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialogueContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialogueInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialogueInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialogueList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialogueList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialoguePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/DialoguePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValueOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValuePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldType/FieldValuePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/FieldTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/ModelBuildPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/QueryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/StyleSheetPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/FieldPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SampleOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SamplePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/SamplePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskActionsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/Task/TaskStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/Assistant/TaskPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Understand/AssistantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/CommandPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/RatePlanPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsageOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/Sim/UsagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Preview/Wireless/SimPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Messaging/CountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/MessagingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/MessagingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/MessagingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/MessagingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/MessagingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/MessagingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumber/CountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/PhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/CountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/Voice/NumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/VoiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/VoiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/VoiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/VoiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/VoicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V1/VoicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/CountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/NumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/CountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/Voice/NumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/VoiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/VoiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/VoiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/VoiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/VoicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Pricing/V2/VoicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/PhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/InteractionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/Participant/MessageInteractionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/Session/ParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/SessionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/Service/ShortCodePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Proxy/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Asset/AssetVersionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/AssetPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Build/BuildStatusPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/BuildPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/DeploymentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/LogPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariableOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariablePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/Environment/VariablePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/EnvironmentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/FunctionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersion/FunctionVersionContentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/Service/TwilioFunction/FunctionVersionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Serverless/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/EngagementContextPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/Step/StepContextPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Engagement/StepPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/EngagementPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionContextPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStep/ExecutionStepContextPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/Execution/ExecutionStepPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/Flow/ExecutionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V1/FlowPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionContextPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStep/ExecutionStepContextPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/Execution/ExecutionStepPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/ExecutionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowRevisionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/Flow/FlowTestUserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidateInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidateInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidateList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidateList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidateOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidateOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidatePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Studio/V2/FlowValidatePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfileOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfilePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/EsimProfilePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/FleetPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/IpCommandPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfile/NetworkAccessProfileNetworkPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfileOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfilePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkAccessProfilePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/NetworkPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/Sim/BillingPeriodInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/Sim/BillingPeriodInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/Sim/BillingPeriodList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/Sim/BillingPeriodList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/Sim/BillingPeriodPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/Sim/BillingPeriodPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SimPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/SmsCommandPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Supersim/V1/UsageRecordPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/Document/DocumentPermissionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/DocumentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListItemPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncList/SyncListPermissionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncListPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapItemPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMap/SyncMapPermissionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncMapPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStream/StreamMessageInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStream/StreamMessageInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStream/StreamMessageList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStream/StreamMessageList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStream/StreamMessagePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStream/StreamMessagePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/Service/SyncStreamPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Sync/V1/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/ActivityPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/EventPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Task/ReservationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueCumulativeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueRealTimeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueueStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueue/TaskQueuesStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueueOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueuePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/TaskQueuePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/ReservationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerChannelPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkerStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersCumulativeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersRealTimeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Worker/WorkersStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkerPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowCumulativeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowRealTimeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/Workflow/WorkflowStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkflowPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceCumulativeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceRealTimeStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/Workspace/WorkspaceStatisticsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspaceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspacePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Taskrouter/V1/WorkspacePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/CredentialListPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/IpAccessControlListPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/OriginationUrlPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/PhoneNumberPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/Trunk/RecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trunking/V1/TrunkPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesChannelEndpointAssignmentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEntityAssignmentsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfiles/CustomerProfilesEvaluationsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/CustomerProfilesPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/EndUserTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/PoliciesPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/SupportingDocumentTypePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsChannelEndpointAssignmentPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEntityAssignmentsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProducts/TrustProductsEvaluationsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Trusthub/V1/TrustProductsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/FormPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/AccessTokenPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/Challenge/NotificationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengeOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/ChallengePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/FactorPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/Entity/NewFactorPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/EntityPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/MessagingConfigurationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimit/BucketPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/RateLimitPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationCheckPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/VerificationPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/Service/WebhookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServiceOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServicePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/ServicePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplateInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplateInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplateList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplateList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplateOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplateOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplatePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/TemplatePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Verify/V2/VerificationAttemptsSummaryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionHookPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/CompositionSettingsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RecordingSettingsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/PublishedTrackPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribeRulesPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/Participant/SubscribedTrackPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/ParticipantPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RecordingRulesPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/Room/RoomRecordingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Video/V1/RoomPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ArchivedCallPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ByocTrunkPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicy/ConnectionPolicyTargetPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/ConnectionPolicyPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/BulkCountryUpdateInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/BulkCountryUpdateInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/BulkCountryUpdateList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/BulkCountryUpdateList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/BulkCountryUpdatePage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/BulkCountryUpdatePage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/Country/HighriskSpecialPrefixInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/Country/HighriskSpecialPrefixInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/Country/HighriskSpecialPrefixList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/Country/HighriskSpecialPrefixList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/Country/HighriskSpecialPrefixPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/Country/HighriskSpecialPrefixPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/CountryPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissions/SettingsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissionsInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissionsInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissionsList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissionsList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissionsPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/DialingPermissionsPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/IpRecordPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Voice/V1/SourceIpMappingPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/CommandPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/RatePlanPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/DataSessionInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/DataSessionInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/DataSessionList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/DataSessionList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/DataSessionPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/DataSessionPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/Sim/UsageRecordPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimContext.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimContext.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/SimPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordInstance.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordInstance.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordList.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordList.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordOptions.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordOptions.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordPage.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Rest/Wireless/V1/UsageRecordPage.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Security/RequestValidator.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Security/RequestValidator.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Serialize.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Serialize.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Stream.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Stream.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TaskRouter/WorkflowConfiguration.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TaskRouter/WorkflowConfiguration.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TaskRouter/WorkflowRule.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TaskRouter/WorkflowRule.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TaskRouter/WorkflowRuleTarget.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TaskRouter/WorkflowRuleTarget.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Fax/Receive.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Fax/Receive.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/FaxResponse.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/FaxResponse.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/GenericNode.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/GenericNode.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Messaging/Body.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Messaging/Body.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Messaging/Media.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Messaging/Media.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Messaging/Message.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Messaging/Message.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Messaging/Redirect.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Messaging/Redirect.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/MessagingResponse.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/MessagingResponse.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/TwiML.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/TwiML.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Video/Room.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Video/Room.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Autopilot.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Autopilot.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Client.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Client.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Conference.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Conference.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Connect.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Connect.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Dial.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Dial.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Echo_.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Echo_.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Enqueue.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Enqueue.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Gather.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Gather.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Hangup.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Hangup.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Identity.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Identity.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Leave.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Leave.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Number.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Number.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Parameter.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Parameter.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Pause.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Pause.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Pay.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Pay.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Play.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Play.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Prompt.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Prompt.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Queue.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Queue.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Record.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Record.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Redirect.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Redirect.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Refer.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Refer.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/ReferSip.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/ReferSip.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Reject.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Reject.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Room.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Room.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Say.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Say.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Sim.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Sim.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Sip.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Sip.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Siprec.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Siprec.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Sms.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Sms.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlBreak.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlBreak.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlEmphasis.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlEmphasis.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlLang.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlLang.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlP.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlPhoneme.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlPhoneme.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlProsody.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlProsody.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlS.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlSayAs.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlSayAs.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlSub.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlSub.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlW.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/SsmlW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Start.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Start.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Stop.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Stop.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Stream.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Stream.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/Task.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/Task.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/Voice/VirtualAgent.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/Voice/VirtualAgent.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/TwiML/VoiceResponse.php',
            'to' => 'custom/lib/SA_SMS/Twilio/TwiML/VoiceResponse.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Values.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Values.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/Version.php',
            'to' => 'custom/lib/SA_SMS/Twilio/Version.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/VersionInfo.php',
            'to' => 'custom/lib/SA_SMS/Twilio/VersionInfo.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/Twilio/autoload.php',
            'to' => 'custom/lib/SA_SMS/Twilio/autoload.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/actionSendSMS.php',
            'to' => 'custom/modules/AOW_Actions/actions/actionSendSMS.php',
            ],
        [
            'from' => '<basepath>/custom/modules/AOW_Actions/actions/actionSendSMS.tpl',
            'to' => 'custom/modules/AOW_Actions/actions/actionSendSMS.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/SA_SMS.php',
            'to' => 'custom/modules/Administration/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/SA_SMS.tpl',
            'to' => 'custom/modules/Administration/SA_SMS.tpl',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_SMS.gif',
            'to' => 'custom/themes/default/images/CreateSA_SMS.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_SMS.svg',
            'to' => 'custom/themes/default/images/CreateSA_SMS.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_SMS.gif',
            'to' => 'custom/themes/default/images/SA_SMS.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_SMS.svg',
            'to' => 'custom/themes/default/images/SA_SMS.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_SMS.gif',
            'to' => 'custom/themes/default/images/icon_SA_SMS.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_SMS_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_SMS_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_SMS_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_SMS_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_SMS.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_SMS.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_SMS.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_SMS.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_SMS.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_SMS.svg',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/Dashlets/SA_SMSDashlet/SA_SMSDashlet.meta.php',
            'to' => 'modules/SA_SMS/Dashlets/SA_SMSDashlet/SA_SMSDashlet.meta.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/Dashlets/SA_SMSDashlet/SA_SMSDashlet.php',
            'to' => 'modules/SA_SMS/Dashlets/SA_SMSDashlet/SA_SMSDashlet.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/JS/util.js',
            'to' => 'modules/SA_SMS/JS/util.js',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/LogicHooks/SA_SMSAppHooks.php',
            'to' => 'modules/SA_SMS/LogicHooks/SA_SMSAppHooks.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/Menu.php',
            'to' => 'modules/SA_SMS/Menu.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/SA_SMS.php',
            'to' => 'modules/SA_SMS/SA_SMS.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/language/en_us.lang.php',
            'to' => 'modules/SA_SMS/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/SearchFields.php',
            'to' => 'modules/SA_SMS/metadata/SearchFields.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/dashletviewdefs.php',
            'to' => 'modules/SA_SMS/metadata/dashletviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/detailviewdefs.php',
            'to' => 'modules/SA_SMS/metadata/detailviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/editviewdefs.php',
            'to' => 'modules/SA_SMS/metadata/editviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/listviewdefs.php',
            'to' => 'modules/SA_SMS/metadata/listviewdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/metafiles.php',
            'to' => 'modules/SA_SMS/metadata/metafiles.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/popupdefs.php',
            'to' => 'modules/SA_SMS/metadata/popupdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/quickcreatedefs.php',
            'to' => 'modules/SA_SMS/metadata/quickcreatedefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/searchdefs.php',
            'to' => 'modules/SA_SMS/metadata/searchdefs.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/studio.php',
            'to' => 'modules/SA_SMS/metadata/studio.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/subpanels/ForHistory.php',
            'to' => 'modules/SA_SMS/metadata/subpanels/ForHistory.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/metadata/subpanels/default.php',
            'to' => 'modules/SA_SMS/metadata/subpanels/default.php',
            ],
        [
            'from' => '<basepath>/modules/SA_SMS/vardefs.php',
            'to' => 'modules/SA_SMS/vardefs.php',
            ],
        ],
    'language' => [
        ],
    'id' => '1652707904',
    ];