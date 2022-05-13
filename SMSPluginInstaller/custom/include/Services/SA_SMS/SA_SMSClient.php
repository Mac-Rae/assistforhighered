<?php
require_once 'custom/include/Services/SA_SMS/Clients/SA_SMSTwilioClient.php';
abstract class SA_SMSClient{

    public static function getClient($provider, $providerParams){
        switch($provider){
            case 'Twilio':
                return new SA_SMSTwilioClient($providerParams);
        }
        throw new Exception("Unrecognised SMS Provider");
    }

    public static function getClientFromConfig()
    {
        global $sugar_config;
        if(empty($sugar_config['sa_sms']['provider']) || $sugar_config['sa_sms']['provider'] == 'Disabled'){
            return false;
        }
        return self::getClient($sugar_config['sa_sms']['provider'], [
            'sid' => $sugar_config['sa_sms']['twilio_sid'],
            'token' => $sugar_config['sa_sms']['twilio_token'],
            'from_number' => $sugar_config['sa_sms']['from_number'],
        ]);
    }

    public abstract function sendSMS($to, $body, $from="");
    public abstract function testConnection();
    public abstract function getFrom();
    public abstract function getSMS($id);
    public abstract function getHistoricSMS($from,$limit=5000);

    public function isSystemNumber($number){
        global $sugar_config;
        //TODO: Allow storing historic numbers
        //TODO: Normalise numbers somehow
        if(empty($number)){
            return false;
        }
        if(empty($sugar_config['sa_sms']['from_number'])){
            return false;
        }
        return $sugar_config['sa_sms']['from_number'] == $number;
    }
    public function getPersonFromNumber($number){
        if(empty($number)){
            return false;
        }
        $searchModules = ['Contacts','Leads'];
        foreach($searchModules as $module){
            $bean = BeanFactory::getBean($module);
            $bean = $bean->retrieve_by_string_fields(['phone_mobile' => $number]);
            if(!empty($bean->id)){
                return $bean;
            }
        }
        return false;
    }
}