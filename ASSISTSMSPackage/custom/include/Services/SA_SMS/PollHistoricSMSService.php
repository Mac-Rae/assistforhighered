<?php
require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';

class PollHistoricSMSService
{
    public function storeRunDate($date){
        $cfg = new Configurator();
        $cfg->config['sa_sms']['historic_sms_run_date'] = $date;
        $cfg->saveConfig();
    }
    public function getRunDate(){
        global $sugar_config;
        $default = "2010-01-01 00:00:00";
        if(empty($sugar_config['sa_sms']['historic_sms_run_date'])){
            return $default;
        }
        return $sugar_config['sa_sms']['historic_sms_run_date'];
    }

    public function processSingleSMS($sms,$client){
        $smsBean = BeanFactory::newBean('SA_SMS');
        $matchingSMS = $smsBean->retrieve_by_string_fields(
            [
                'third_party_id' => $sms['third_party_id'],
                'third_party' => $sms['third_party']
            ]
        );
        if($matchingSMS){
            $newSMS = $matchingSMS;
        }else{
            $newSMS = BeanFactory::newBean('SA_SMS');
        }
        $newSMS->name = "From: ".$sms['from_number']." To: ".$sms['to_number'];
        $newSMS->from_number = $sms['from_number'];
        $newSMS->to_number = $sms['to_number'];
        $newSMS->sms_type = $sms['direction'];
        $newSMS->description = $sms['body'];
        $newSMS->status = $sms['status'];
        $newSMS->date_sent = $sms['date_sent'];
        $newSMS->third_party = $sms['third_party'];
        $newSMS->third_party_id = $sms['third_party_id'];
        $newSMS->is_scheduled = false;
        if(!empty($newSMS->from_number) && !$client->isSystemNumber($newSMS->from_number)){
            $linkedRecord = $client->getPersonFromNumber($newSMS->from_number);
            if($linkedRecord){
                $newSMS->from_record_id = $linkedRecord->id;
                $newSMS->from_record_type = $linkedRecord->module_name;
                $newSMS->parent_id = $linkedRecord->id;
                $newSMS->parent_type = $linkedRecord->module_name;
                $newSMS->assigned_user_id = $linkedRecord->assigned_user_id;
            }
        }
        if(!empty($newSMS->to_number) && !$client->isSystemNumber($newSMS->to_number)){
            $linkedRecord = $client->getPersonFromNumber($newSMS->to_number);
            if($linkedRecord){
                $newSMS->to_record_id = $linkedRecord->id;
                $newSMS->to_record_type = $linkedRecord->module_name;
                $newSMS->parent_id = $linkedRecord->id;
                $newSMS->parent_type = $linkedRecord->module_name;
                $newSMS->assigned_user_id = $linkedRecord->assigned_user_id;
            }
        }
        $newSMS->save();
        return $newSMS;
    }

    public function run()
    {
        $runDate = $this->getRunDate();
        $limit = 5000;
        try{
            $client = SA_SMSClient::getClientFromConfig();
            if(empty($client)){
                //SMS Disabled
                return true;
            }
            //pull sms after grab date
            $historicSMS = $client->getHistoricSMS($runDate,$limit);

            $latestRunDate = $runDate;
            foreach($historicSMS as $sms){
                $this->processSingleSMS($sms,$client);
                $latestRunDate = $sms['date_sent'];
            }
            $this->storeRunDate($latestRunDate);
        }catch(Exception $ex){
            $GLOBALS['log']->error("Failed to run SMS sync ".$ex->getMessage());
            return false;
        }
        return true;
    }
}
