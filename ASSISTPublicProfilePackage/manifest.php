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
    'author' => 'SalesAgility',
    'description' => 'ASSIST Public User Profiles',
    'icon' => '',
    'is_uninstallable' => '1',
    'name' => 'ASSIST Public User Profiles',
    'published_date' => '2021-03-19 00:00:00',
    'type' => 'module',
    'version' => '61',
    'remove_tables' => 'prompt',
    ];
$installdefs = [
    'copy' => [
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Include/SA_PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/Include/SA_PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.SA_PublicProfile.php',
            'to' => 'custom/Extension/application/Ext/Language/en_us.SA_PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/PublicProfile.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Administration/PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.PublicProfile.php',
            'to' => 'custom/Extension/modules/Administration/Ext/Language/en_us.PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Language/en_us.ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/LogicHooks/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/ASSISTNormalisedPhone.php',
            'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/ASSISTNormalisedPhone.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Meetings/Ext/Language/en_us.ASSISTPublicProfile.php',
            'to' => 'custom/Extension/modules/Meetings/Ext/Language/en_us.ASSISTPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Meetings/Ext/Vardefs/ASSISTPublicProfile.php',
            'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/ASSISTPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.PublicProfile.php',
            'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/Extension/modules/Users/Ext/LogicHooks/SAPublicProfile.php',
            'to' => 'custom/Extension/modules/Users/Ext/LogicHooks/SAPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/include/Services/SANormalisedPhoneHooks.php',
            'to' => 'custom/include/Services/SANormalisedPhoneHooks.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/AlternateFormatsCountryCodeSet.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/AlternateFormatsCountryCodeSet.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/AsYouTypeFormatter.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/AsYouTypeFormatter.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/CountryCodeSource.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/CountryCodeSource.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/CountryCodeToRegionCodeMap.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/CountryCodeToRegionCodeMap.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/CountryCodeToRegionCodeMapForTesting.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/CountryCodeToRegionCodeMapForTesting.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/DefaultMetadataLoader.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/DefaultMetadataLoader.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Leniency.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Leniency.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Leniency/AbstractLeniency.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Leniency/AbstractLeniency.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Leniency/ExactGrouping.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Leniency/ExactGrouping.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Leniency/Possible.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Leniency/Possible.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Leniency/StrictGrouping.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Leniency/StrictGrouping.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Leniency/Valid.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Leniency/Valid.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/MatchType.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/MatchType.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/Matcher.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/Matcher.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/MatcherAPIInterface.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/MatcherAPIInterface.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/MetadataLoaderInterface.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/MetadataLoaderInterface.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/MetadataSourceInterface.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/MetadataSourceInterface.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/MultiFileMetadataSourceImpl.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/MultiFileMetadataSourceImpl.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/NumberFormat.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/NumberFormat.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/NumberParseException.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/NumberParseException.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneMetadata.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneMetadata.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumber.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumber.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberDesc.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberDesc.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberFormat.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberFormat.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberMatch.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberMatch.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberMatcher.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberMatcher.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberToCarrierMapper.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberToCarrierMapper.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberToTimeZonesMapper.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberToTimeZonesMapper.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberType.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberType.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/PhoneNumberUtil.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/PhoneNumberUtil.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/RegexBasedMatcher.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/RegexBasedMatcher.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/RegionCode.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/RegionCode.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/ShortNumberCost.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/ShortNumberCost.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/ShortNumberInfo.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/ShortNumberInfo.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/ShortNumbersRegionCodeSet.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/ShortNumbersRegionCodeSet.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/ValidationResult.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/ValidationResult.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/Map.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/Map.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/ar/965.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/ar/965.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/be/375.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/be/375.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/1.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/1.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/20.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/20.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/211.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/211.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/212.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/212.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/213.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/213.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/216.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/216.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/218.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/218.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/220.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/220.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/221.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/221.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/222.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/222.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/223.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/223.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/224.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/224.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/225.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/225.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/226.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/226.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/227.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/227.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/228.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/228.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/229.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/229.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/230.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/230.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/231.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/231.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/232.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/232.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/233.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/233.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/234.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/234.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/235.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/235.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/236.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/236.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/237.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/237.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/238.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/238.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/239.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/239.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/240.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/240.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/241.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/241.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/242.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/242.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/243.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/243.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/244.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/244.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/245.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/245.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/246.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/246.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/247.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/247.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/248.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/248.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/249.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/249.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/250.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/250.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/251.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/251.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/252.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/252.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/253.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/253.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/254.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/254.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/255.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/255.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/256.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/256.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/257.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/257.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/258.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/258.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/260.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/260.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/261.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/261.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/262.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/262.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/263.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/263.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/264.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/264.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/265.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/265.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/266.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/266.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/267.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/267.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/268.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/268.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/269.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/269.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/27.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/27.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/290.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/290.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/291.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/291.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/297.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/297.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/298.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/298.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/299.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/299.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/30.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/30.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/31.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/31.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/32.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/32.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/33.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/33.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/34.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/34.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/350.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/350.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/351.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/351.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/352.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/352.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/353.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/353.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/354.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/354.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/355.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/355.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/356.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/356.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/357.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/357.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/358.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/358.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/359.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/359.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/36.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/36.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/370.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/370.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/372.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/372.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/373.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/373.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/374.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/374.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/375.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/375.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/376.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/376.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/377.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/377.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/378.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/378.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/380.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/380.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/381.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/381.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/382.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/382.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/383.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/383.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/385.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/385.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/386.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/386.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/387.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/387.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/389.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/389.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/39.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/39.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/40.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/40.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/41.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/41.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/420.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/420.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/421.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/421.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/423.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/423.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/43.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/43.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/44.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/44.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/45.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/45.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/46.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/46.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/47.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/47.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/48.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/48.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/49.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/49.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/500.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/500.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/501.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/501.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/502.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/502.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/503.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/503.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/504.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/504.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/505.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/505.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/506.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/506.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/507.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/507.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/508.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/508.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/509.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/509.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/51.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/51.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/53.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/53.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/55.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/55.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/56.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/56.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/57.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/57.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/58.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/58.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/590.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/590.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/591.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/591.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/592.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/592.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/593.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/593.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/594.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/594.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/595.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/595.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/596.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/596.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/597.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/597.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/598.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/598.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/599.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/599.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/60.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/60.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/61.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/61.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/62.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/62.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/63.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/63.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/64.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/64.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/65.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/65.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/66.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/66.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/670.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/670.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/672.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/672.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/673.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/673.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/674.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/674.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/675.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/675.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/676.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/676.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/677.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/677.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/678.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/678.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/679.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/679.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/680.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/680.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/681.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/681.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/682.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/682.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/683.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/683.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/685.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/685.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/686.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/686.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/687.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/687.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/688.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/688.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/689.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/689.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/690.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/690.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/691.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/691.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/692.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/692.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/7.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/7.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/81.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/81.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/82.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/82.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/84.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/84.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/850.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/850.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/852.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/852.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/853.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/853.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/855.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/855.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/856.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/856.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/86.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/86.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/880.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/880.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/881.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/881.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/882.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/882.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/886.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/886.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/90.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/90.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/91.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/91.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/92.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/92.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/93.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/93.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/94.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/94.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/95.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/95.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/960.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/960.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/961.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/961.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/962.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/962.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/963.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/963.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/964.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/964.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/965.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/965.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/966.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/966.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/967.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/967.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/968.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/968.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/970.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/970.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/971.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/971.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/972.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/972.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/973.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/973.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/974.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/974.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/975.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/975.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/976.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/976.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/977.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/977.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/98.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/98.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/992.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/992.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/993.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/993.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/994.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/994.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/995.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/995.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/996.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/996.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/en/998.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/en/998.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/fa/93.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/fa/93.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/fa/98.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/fa/98.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/ko/82.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/ko/82.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/ru/374.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/ru/374.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/ru/375.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/ru/375.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/ru/7.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/ru/7.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/uk/380.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/uk/380.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/zh/852.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/zh/852.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/zh/86.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/zh/86.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/zh_Hant/852.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/zh_Hant/852.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/carrier/data/zh_Hant/86.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/carrier/data/zh_Hant/86.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_255.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_255.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_27.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_27.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_30.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_30.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_31.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_31.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_34.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_34.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_350.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_350.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_351.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_351.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_352.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_352.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_358.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_358.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_359.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_359.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_36.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_36.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_372.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_372.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_373.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_373.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_380.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_380.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_381.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_381.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_385.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_385.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_39.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_39.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_43.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_43.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_44.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_44.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_49.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_49.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_505.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_505.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_506.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_506.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_52.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_52.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_54.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_54.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_55.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_55.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_58.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_58.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_595.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_595.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_61.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_61.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_62.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_62.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_64.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_64.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_66.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_66.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_675.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_675.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_676.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_676.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_679.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_679.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_7.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_7.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_81.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_81.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_84.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_84.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_855.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_855.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_856.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_856.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_90.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_90.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_91.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_91.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_94.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_94.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_95.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_95.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_971.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_971.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_972.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_972.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_995.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberAlternateFormats_995.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_800.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_800.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_808.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_808.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_870.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_870.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_878.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_878.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_881.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_881.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_882.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_882.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_883.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_883.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_888.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_888.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_979.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_979.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_AZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_BZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_CZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_DZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_EH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ER.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ER.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ES.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ES.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ET.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ET.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_FR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_GY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_HU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ID.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ID.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_IT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_JP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_KZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_LY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ME.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ME.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ML.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ML.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_MZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_NZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_OM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_OM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_PY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_QA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_QA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_RW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ST.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ST.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_SZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_TZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_US.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_US.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_UZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_VU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_WF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_WF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_WS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_WS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_XK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_XK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_YE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_YE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_YT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_YT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ZA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ZA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ZM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ZM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ZW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/PhoneNumberMetadata_ZW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_AZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_BZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_CZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_DZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_EH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ER.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ER.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ES.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ES.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ET.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ET.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_FR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_GY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_HU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ID.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ID.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_IT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_JP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_KZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_LY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ME.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ME.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ML.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ML.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MQ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MQ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_MZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NP.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NP.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_NZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_OM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_OM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_PY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_QA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_QA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_RW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SB.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SB.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ST.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ST.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SX.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SX.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_SZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TD.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TD.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TH.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TH.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TJ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TJ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TL.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TL.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TO.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TO.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TR.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TR.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TV.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TV.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_TZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_US.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_US.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UY.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UY.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UZ.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_UZ.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VC.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VC.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VG.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VG.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VI.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VI.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VN.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VN.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VU.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_VU.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_WF.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_WF.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_WS.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_WS.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_XK.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_XK.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_YE.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_YE.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_YT.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_YT.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ZA.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ZA.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ZM.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ZM.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ZW.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/data/ShortNumberMetadata_ZW.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/PhoneNumberOfflineGeocoder.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/PhoneNumberOfflineGeocoder.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/Map.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/Map.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ar/966.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ar/966.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/be/375.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/be/375.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/bg/359.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/bg/359.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/bs/387.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/bs/387.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/de/32.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/de/32.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/de/352.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/de/352.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/de/41.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/de/41.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/de/43.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/de/43.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/de/49.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/de/49.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/el/30.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/el/30.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/12.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/12.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/13.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/13.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/14.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/14.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/15.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/15.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/16.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/16.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/17.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/17.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/18.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/18.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/19.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/19.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/20.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/20.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/212.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/212.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/213.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/213.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/216.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/216.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/218.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/218.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/220.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/220.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/221.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/221.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/222.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/222.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/223.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/223.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/224.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/224.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/225.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/225.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/226.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/226.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/227.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/227.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/228.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/228.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/229.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/229.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/230.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/230.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/232.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/232.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/233.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/233.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/234.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/234.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/236.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/236.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/237.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/237.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/238.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/238.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/239.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/239.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/240.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/240.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/241.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/241.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/242.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/242.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/243.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/243.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/244.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/244.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/245.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/245.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/247.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/247.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/249.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/249.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/251.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/251.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/252.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/252.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/254.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/254.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/255.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/255.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/256.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/256.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/257.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/257.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/258.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/258.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/260.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/260.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/261.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/261.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/263.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/263.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/264.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/264.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/266.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/266.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/267.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/267.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/268.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/268.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/269.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/269.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/27.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/27.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/290.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/290.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/299.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/299.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/30.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/30.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/31.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/31.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/32.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/32.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/33.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/33.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/34.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/34.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/351.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/351.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/352.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/352.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/353.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/353.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/354.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/354.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/355.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/355.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/358.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/358.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/359.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/359.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/36.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/36.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/370.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/370.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/371.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/371.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/372.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/372.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/373.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/373.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/374.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/374.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/375.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/375.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/380.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/380.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/381.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/381.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/382.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/382.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/383.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/383.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/385.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/385.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/386.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/386.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/387.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/387.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/389.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/389.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/39.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/39.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/40.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/40.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/41.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/41.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/420.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/420.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/421.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/421.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/43.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/43.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/44.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/44.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/46.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/46.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/47.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/47.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/48.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/48.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/49.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/49.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/501.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/501.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/504.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/504.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/51.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/51.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/52.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/52.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/53.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/53.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/54.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/54.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/55.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/55.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/56.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/56.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/57.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/57.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/58.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/58.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/592.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/592.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/593.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/593.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/595.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/595.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/598.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/598.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/599.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/599.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/60.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/60.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/61.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/61.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/62.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/62.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/63.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/63.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/64.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/64.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/66.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/66.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/670.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/670.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/672.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/672.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/673.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/673.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/675.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/675.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/676.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/676.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/678.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/678.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/679.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/679.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/680.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/680.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/682.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/682.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/685.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/685.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/686.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/686.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/688.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/688.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/689.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/689.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/690.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/690.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/7.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/7.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/81.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/81.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/82.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/82.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/84.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/84.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/850.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/850.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/8610.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/8610.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86130.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86130.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86131.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86131.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86132.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86132.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86133.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86133.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86134.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86134.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86135.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86135.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86136.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86136.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86137.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86137.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86138.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86138.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86139.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86139.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86145.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86145.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86147.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86147.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86150.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86150.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86151.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86151.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86152.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86152.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86153.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86153.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86155.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86155.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86156.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86156.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86157.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86157.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86158.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86158.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86159.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86159.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86170.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86170.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86176.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86176.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86177.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86177.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86178.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86178.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86180.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86180.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86181.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86181.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86182.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86182.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86183.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86183.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86184.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86184.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86185.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86185.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86186.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86186.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86187.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86187.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86188.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86188.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86189.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/86189.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/880.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/880.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/886.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/886.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/90.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/90.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/91.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/91.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/92.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/92.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/93.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/93.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/94.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/94.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/95.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/95.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/960.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/960.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/961.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/961.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/962.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/962.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/963.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/963.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/966.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/966.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/967.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/967.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/968.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/968.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/970.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/970.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/971.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/971.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/972.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/972.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/975.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/975.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/976.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/976.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/98.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/98.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/992.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/992.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/993.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/993.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/994.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/994.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/995.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/995.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/en/996.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/en/996.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/228.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/228.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/230.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/230.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/34.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/34.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/52.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/52.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/54.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/54.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/56.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/56.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/es/58.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/es/58.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fa/93.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fa/93.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fa/98.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fa/98.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fi/358.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fi/358.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/212.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/212.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/222.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/222.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/225.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/225.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/228.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/228.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/229.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/229.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/230.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/230.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/243.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/243.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/290.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/290.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/32.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/32.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/33.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/33.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/352.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/352.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/41.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/fr/41.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/hr/387.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/hr/387.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/hu/36.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/hu/36.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/hy/374.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/hy/374.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/id/62.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/id/62.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/it/39.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/it/39.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/it/41.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/it/41.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/iw/972.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/iw/972.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ja/81.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ja/81.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ko/82.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ko/82.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/nl/31.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/nl/31.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/nl/32.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/nl/32.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pl/48.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pl/48.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/238.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/238.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/239.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/239.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/244.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/244.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/245.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/245.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/258.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/258.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/351.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/351.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/55.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/pt/55.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ro/373.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ro/373.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ro/40.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ro/40.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/373.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/373.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/374.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/374.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/375.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/375.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/7.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/ru/7.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/sq/383.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/sq/383.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/sr/381.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/sr/381.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/sr/383.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/sr/383.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/sr/387.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/sr/387.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/sv/358.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/sv/358.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/th/66.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/th/66.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/tr/90.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/tr/90.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/uk/380.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/uk/380.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/vi/84.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/vi/84.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/8610.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/8610.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86130.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86130.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86131.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86131.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86132.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86132.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86133.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86133.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86134.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86134.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86135.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86135.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86136.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86136.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86137.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86137.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86138.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86138.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86139.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86139.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86145.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86145.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86147.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86147.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86150.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86150.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86151.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86151.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86152.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86152.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86153.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86153.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86155.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86155.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86156.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86156.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86157.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86157.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86158.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86158.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86159.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86159.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86170.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86170.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86176.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86176.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86177.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86177.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86178.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86178.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86180.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86180.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86181.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86181.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86182.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86182.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86183.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86183.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86184.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86184.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86185.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86185.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86186.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86186.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86187.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86187.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86188.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86188.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86189.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/86189.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/886.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh/886.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/geocoding/data/zh_Hant/886.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/geocoding/data/zh_Hant/886.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/prefixmapper/MappingFileProvider.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/prefixmapper/MappingFileProvider.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/prefixmapper/PhonePrefixMap.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/prefixmapper/PhonePrefixMap.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/prefixmapper/PrefixFileReader.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/prefixmapper/PrefixFileReader.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/prefixmapper/PrefixTimeZonesMap.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/prefixmapper/PrefixTimeZonesMap.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/libphonenumber/timezone/data/map_data.php',
            'to' => 'custom/lib/SA_SMS/libphonenumber/timezone/data/map_data.php',
            ],
        [
            'from' => '<basepath>/custom/lib/SA_SMS/loadLibPhoneNumber.php',
            'to' => 'custom/lib/SA_SMS/loadLibPhoneNumber.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/PublicProfile.php',
            'to' => 'custom/modules/Administration/PublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/PublicProfile.tpl',
            'to' => 'custom/modules/Administration/PublicProfile.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Administration/getPublicProfileUsers.php',
            'to' => 'custom/modules/Administration/getPublicProfileUsers.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfile.php',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfile.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfile.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfile.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileError.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileError.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileHooks.php',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileHooks.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl',
            'to' => 'custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/css/bootstrap.min.css',
            'to' => 'custom/modules/Users/PublicProfile/css/bootstrap.min.css',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/css/style.css',
            'to' => 'custom/modules/Users/PublicProfile/css/style.css',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/Linkedin.png',
            'to' => 'custom/modules/Users/PublicProfile/images/Linkedin.png',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/Twitter.png',
            'to' => 'custom/modules/Users/PublicProfile/images/Twitter.png',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/PublicProfile/images/logo.svg',
            'to' => 'custom/modules/Users/PublicProfile/images/logo.svg',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingHandlerRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileBookMeetingRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileMeetingRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/entrypoints/PublicProfileRunner.php',
            'to' => 'custom/modules/Users/entrypoints/PublicProfileRunner.php',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/tpls/EditViewFooter.tpl',
            'to' => 'custom/modules/Users/tpls/EditViewFooter.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/tpls/EditViewHeader.tpl',
            'to' => 'custom/modules/Users/tpls/EditViewHeader.tpl',
            ],
        [
            'from' => '<basepath>/custom/modules/Users/views/view.edit.php',
            'to' => 'custom/modules/Users/views/view.edit.php',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/CreateSA_PublicProfile.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/CreateSA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/CreateSA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/SA_PublicProfile.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile.gif',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile_32.gif',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile_32.gif',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/icon_SA_PublicProfile_32.svg',
            'to' => 'custom/themes/default/images/icon_SA_PublicProfile_32.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sidebar/modules/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sidebar/modules/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sub_panel/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/custom/themes/default/images/sub_panel/modules/SA_PublicProfile.svg',
            'to' => 'custom/themes/default/images/sub_panel/modules/SA_PublicProfile.svg',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/SA_PublicProfile.php',
            'to' => 'modules/SA_PublicProfile/SA_PublicProfile.php',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/controller.php',
            'to' => 'modules/SA_PublicProfile/controller.php',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/language/en_us.lang.php',
            'to' => 'modules/SA_PublicProfile/language/en_us.lang.php',
            ],
        [
            'from' => '<basepath>/modules/SA_PublicProfile/vardefs.php',
            'to' => 'modules/SA_PublicProfile/vardefs.php',
            ],
        [
            'from' => '<basepath>/public/.htaccess',
            'to' => 'public/.htaccess',
            ],
        ],
    'language' => [
        ],
    'id' => '1614868215',
    ];