<?php
class MCCDPrimaryEmailsHook{
    public function isMatchingEmail($email){
        $suffix = "Maricopa.edu";
        $length = strlen( $suffix );
        if( !$length ) {
            return true;
        }
        return substr($email, -$length) === $suffix;
    }
    public function updatePrimaryAddresses(SugarBean $bean, $event, $args){
        if(empty($bean->emailAddress) || empty($bean->emailAddress->addresses)){
            return;
        }
        $hasMatchingEmail = false;
        foreach($bean->emailAddress->addresses as $key => $vals){
            if($this->isMatchingEmail($vals['email_address'])){
                $hasMatchingEmail = true;
                break;
            }
        }
        if(!$hasMatchingEmail){
            return;
        }
        foreach($bean->emailAddress->addresses as $key => $vals){
            $bean->emailAddress->addresses[$key]['primary_address'] = $this->isMatchingEmail($vals['email_address']);
        }
        $bean->emailAddress->saveEmail($bean->id,$bean->module_dir);
    }
}