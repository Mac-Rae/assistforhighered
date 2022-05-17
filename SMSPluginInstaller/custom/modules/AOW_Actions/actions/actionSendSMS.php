<?php
require_once 'modules/AOW_Actions/actions/actionBase.php';
require_once 'custom/include/Services/SA_SMS/SA_SMSClient.php';

class actionSendSMS extends actionBase{
    public function __construct($id = '')
    {
        parent::__construct($id);
    }

    public function getToOptions(SugarBean $bean){
        global $app_list_strings;
        $smsAble = ['Contacts','Leads'];
        $options = [];
        $checked_link = array();
        if(in_array($bean->module_dir,$smsAble)){
            $options["self"] = $app_list_strings['moduleListSingular'][$bean->module_dir];
        }
        foreach($bean->get_related_fields() as $field){
            if (isset($field['link'])) {
                $checked_link[] = $field['link'];
            }
            if (!isset($field['module']) || !in_array($field['module'], $smsAble) || (isset($field['dbType']) && $field['dbType'] == "id")) {
                continue;
            }
            $options[$field['name']] = translate($field['module']) . ": "
                . trim(translate($field['vname'], $bean->module_name), ":");
        }

        foreach ($bean->get_linked_fields() as $field) {
            if (!in_array($field['name'], $checked_link) && !in_array($field['relationship'], $checked_link)) {
                if (isset($field['module']) && $field['module'] != '') {
                    $rel_module = $field['module'];
                } elseif ($bean->load_relationship($field['name'])) {
                    $relField = $field['name'];
                    $rel_module = $bean->$relField->getRelatedModuleName();
                }

                if (in_array($rel_module, $smsAble)) {
                    if (isset($field['vname']) && $field['vname'] != '') {
                        $options[$field['name']] = $app_list_strings['moduleList'][$rel_module] . ' : ' . translate($field['vname'], $bean->module_dir);
                    } else {
                        $options[$field['name']] = $app_list_strings['moduleList'][$rel_module] . ' : ' . $field['name'];
                    }
                }
            }
        }
        return $options;
    }

    public function edit_display($line, SugarBean $bean = null, $params = array())
    {
        global $mod_strings;
        $ss = new Sugar_Smarty();

        $currentTo = $params['to'];
        $ss->assign('to_options',get_select_options_with_id(
            $this->getToOptions($bean),
            $currentTo
        ));
        $ss->assign('smsBody',$params['sms_body']);
        $ss->assign('MOD',$mod_strings);
        $ss->assign('line',$line);
        $html = $ss->fetch('custom/modules/AOW_Actions/actions/actionSendSMS.tpl');
        return $html;
    }

    public function getPeopleFromParams(SugarBean $bean, $params){
        if(empty($params['to'])){
            return false;
        }
        if($params['to'] == 'self'){
            return [$bean];
        }

        $relatedFields = array_merge($bean->get_related_fields(), $bean->get_linked_fields());
        $field = $relatedFields[$params['to']];
        if ($field['type'] == 'relate') {
            $linkedBeans = array();
            $idName = $field['id_name'];
            $id = $bean->$idName;
            $linkedBeans[] = BeanFactory::getBean($field['module'], $id);
        } else {
            if ($field['type'] == 'link') {
                $relField = $field['name'];
                if (isset($field['module']) && $field['module'] != '') {
                    $rel_module = $field['module'];
                } else {
                    if ($bean->load_relationship($relField)) {
                        $rel_module = $bean->$relField->getRelatedModuleName();
                    }
                }
                $linkedBeans = $bean->get_linked_beans($relField, $rel_module);
            } else {
                $linkedBeans = $bean->get_linked_beans($field['link'], $field['module']);
            }
        }
        return $linkedBeans;
    }

    /**
     * Return true on success otherwise false.
     *
     * @param SugarBean $bean
     * @param array $params
     * @param bool $in_save
     * @return boolean
     */
    public function run_action(SugarBean $bean, $params = array(), $in_save = false)
    {
        global $current_user;
        $client = SA_SMSClient::getClientFromConfig();
        $people = $this->getPeopleFromParams($bean, $params);
        $sentAnSMS = false;
        try {
            foreach ($people as $person) {
                if (empty($person->sms_opt_in_c) || $person->sms_opt_in_c != 'Y') {
                    continue;
                }
                if (empty($person->phone_mobile)) {
                    continue;
                }
                //TODO: Check Phone number validity
                $res = $client->sendSMS($person->phone_mobile, $params['sms_body']);
                $sentAnSMS = true;
                $smsBean = BeanFactory::newBean('SA_SMS');
                $smsBean->name = "From: ".$client->getFrom()." To: ".$person->phone_mobile;
                $smsBean->description = $params['sms_body'];
                $smsBean->from_number = $client->getFrom();
                $smsBean->to_number = $person->phone_mobile;
                $smsBean->sms_type = 'crm_out';
                $smsBean->send_record_id = $current_user->id;
                $smsBean->send_record_type = "Users";
                $smsBean->to_record_id = $person->id;
                $smsBean->to_record_type = $person->module_name;
                $smsBean->parent_id = $person->id;
                $smsBean->parent_type = $person->module_name;
                if($res){
                    $smsBean->third_party = $res['third_party'];
                    $smsBean->third_party_id = $res['third_party_id'];
                    $smsBean->status = $res['status'];
                }
                $smsBean->save();
            }
        }catch(Exception $ex){
            $GLOBALS['log']->error("Failed to send SMS in workflow action [".$this->id."] ".$ex->getMessage());
            if($sentAnSMS){
                //If we have sent an SMS we don't want to mark this as failed. Otherwise it could repeatedly retry.
                return true;
            }
            return false;
        }
        return true;
    }
}