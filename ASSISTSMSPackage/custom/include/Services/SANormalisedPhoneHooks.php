<?php
require_once 'custom/lib/SA_SMS/loadLibPhoneNumber.php';
class SANormalisedPhoneHooks{
    public static function normalisePhone($phone){
        return preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '$1$2$3', $phone);
    }
    public function updatePhone(&$bean){
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        try {
            $phoneOb = $phoneUtil->parse($bean->phone_mobile, "USA");
        } catch (\libphonenumber\NumberParseException $e) {
            $bean->phone_mobile_normalised = $bean->phone_mobile;
            return false;
        }
        $bean->phone_mobile_normalised = $phoneUtil->format($phoneOb, \libphonenumber\PhoneNumberFormat::E164);
    }
}