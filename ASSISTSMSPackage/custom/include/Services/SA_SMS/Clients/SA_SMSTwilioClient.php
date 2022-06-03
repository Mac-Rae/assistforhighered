<?php
require_once 'custom/lib/SA_SMS/Twilio/autoload.php';

use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

class SA_SMSTwilioClient extends SA_SMSClient {

    public function __construct($params){
        try {
            $sid = $params['sid'];
            $token = $params['token'];
            $this->from = $params['from_number'];
            $this->client = new Client($sid, $token);
        }catch(ConfigurationException $cex){
            throw new Exception($cex->getMessage());
        }
    }

    public function sendSMS($to, $body, $from=""){
        $res = $this->client->messages->create(
            $to,
            [
                'from' => $this->from,
                'body' => $body
            ]
        );
        if(!$res){
            return false;
        }
        return [
            'third_party_id' => $res->sid,
            'third_party' => 'Twilio',
            'status' => $res->status
        ];
    }

    public function testConnection()
    {
        try {
            $this->client->account->fetch();
        }catch(Exception $ex){
            return false;
        }
        return true;
    }

    public function getFrom(){
        return $this->from;
    }
    public function convertDate($date){
        return $date->format("Y-m-d H:i:s");
    }
    public function convertDirection($direction){
        switch($direction){
            case 'outbound-api':
                return 'crm_out';
            case 'inbound':
                return 'crm_in';
            default:
                return $direction;
        }
    }

    public function convertToArray($sms){
        return [
            'body' => $sms->body,
            'from_number' => $sms->from,
            'to_number' => $sms->to,
            'status' => $sms->status,
            'date_modified' => $this->convertDate($sms->dateUpdated),
            'date_sent' => $this->convertDate($sms->dateSent),
            'date_created' => $this->convertDate($sms->dateCreated),
            'direction' => $this->convertDirection($sms->direction),
            'third_party_id' => $sms->sid,
            'third_party' => 'Twilio'
        ];
    }

    public function getSMS($id){
        return $this->convertToArray($this->client->messages($id)->fetch());
    }

    public function getHistoricSMS($from,$limit=5000){
        foreach($this->client->messages->stream(['DateSent>'=>$from],$limit) as $sms){
            yield $this->convertToArray($sms);
        }
    }
}