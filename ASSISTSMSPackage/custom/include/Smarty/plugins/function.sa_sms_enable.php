<?php
require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';
function smarty_function_sa_sms_enable($params, &$smarty)
{
    if(empty($params['module'])){
        return false;
    }
    if(empty($params['vardef_name'])){
        return false;
    }
    if(empty($params['optin'])){
        return false;
    }
    if($params['module'] != 'Contacts' && $params['module'] != 'Leads'){
        return false;
    }
    if($params['vardef_name'] != 'phone_mobile'){
        return false;
    }
    if($params['optin'] != 'Y'){
        return false;
    }
    return SA_SMSClient::isNumberValid($params['number']);
}
