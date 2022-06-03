<?php
class SANormalisedPhoneHooks{
    public static function normalisePhone($phone){
        return preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '$1$2$3', $phone);
    }
    public function updatePhone(&$bean){
        $bean->phone_mobile_normalised = self::normalisePhone($bean->phone_mobile);
    }
}