<?php
require_once 'modules/AOW_Actions/actions/actionSendEmail.php';

class customactionSendEmail extends actionSendEmail{

    public function parse_template(SugarBean $bean, &$template, $object_override = array())
    {
        global $sugar_config;

        require_once 'custom/modules/AOW_Actions/actions/ASSISTTemplateParser.php';

        $object_arr[$bean->module_dir] = $bean->id;

        foreach ($bean->field_defs as $bean_arr) {
            if ($bean_arr['type'] == 'relate') {
                if (isset($bean_arr['module']) &&  $bean_arr['module'] != '' && isset($bean_arr['id_name']) &&  $bean_arr['id_name'] != '' && $bean_arr['module'] != 'EmailAddress') {
                    $idName = $bean_arr['id_name'];
                    if (isset($bean->field_defs[$idName]) && $bean->field_defs[$idName]['source'] != 'non-db') {
                        if (!isset($object_arr[$bean_arr['module']])) {
                            $object_arr[$bean_arr['module']] = $bean->$idName;
                        }
                    }
                }
            } else {
                if ($bean_arr['type'] == 'link') {
                    if (!isset($bean_arr['module']) || $bean_arr['module'] == '') {
                        $bean_arr['module'] = getRelatedModule($bean->module_dir, $bean_arr['name']);
                    }
                    if (isset($bean_arr['module']) &&  $bean_arr['module'] != ''&& !isset($object_arr[$bean_arr['module']])&& $bean_arr['module'] != 'EmailAddress') {
                        $linkedBeans = $bean->get_linked_beans($bean_arr['name'], $bean_arr['module'], array(), 0, 1);
                        if ($linkedBeans) {
                            $linkedBean = $linkedBeans[0];
                            if (!isset($object_arr[$linkedBean->module_dir])) {
                                $object_arr[$linkedBean->module_dir] = $linkedBean->id;
                            }
                        }
                    }
                }
            }
        }
        $useCase = false;
        if($bean->module_name == 'Cases'){
            $useCase = $bean;
        }
        if($bean->module_name == 'AOP_Case_Updates' && !empty($object_arr['Cases'])){
            $useCase = BeanFactory::getBean('Cases',$object_arr['Cases']);
        }
        if($useCase && !empty($useCase->parent_type) && !empty($useCase->parent_id)){
            $object_arr = array($useCase->parent_type => $useCase->parent_id) + $object_arr;
            if($useCase->parent_type == 'Leads' && empty($object_arr['Contacts'])){
                unset($object_arr['Contacts']);
            }
        }

        $object_arr['Users'] = is_a($bean, 'User') ? $bean->id : $bean->assigned_user_id;

        $object_arr = array_merge($object_arr, $object_override);

        $parsedSiteUrl = parse_url($sugar_config['site_url']);
        $host = $parsedSiteUrl['host'];
        if (!isset($parsedSiteUrl['port'])) {
            $parsedSiteUrl['port'] = 80;
        }

        $port		= ($parsedSiteUrl['port'] != 80) ? ":".$parsedSiteUrl['port'] : '';
        $path		= !empty($parsedSiteUrl['path']) ? $parsedSiteUrl['path'] : "";
        $cleanUrl	= "{$parsedSiteUrl['scheme']}://{$host}{$port}{$path}";

        $url =  $cleanUrl."/index.php?module={$bean->module_dir}&action=DetailView&record={$bean->id}";

        $template->subject = str_replace("\$contact_user", "\$user", $template->subject);
        $template->body_html = str_replace("\$contact_user", "\$user", $template->body_html);
        $template->body = str_replace("\$contact_user", "\$user", $template->body);
        $template->subject = ASSISTTemplateParser::parse_template($template->subject, $object_arr);
        $template->body_html = ASSISTTemplateParser::parse_template($template->body_html, $object_arr);
        $template->body_html = str_replace("\$url", $url, $template->body_html);
        $template->body_html = str_replace('$sugarurl', $sugar_config['site_url'], $template->body_html);
        $template->body = ASSISTTemplateParser::parse_template($template->body, $object_arr);
        $template->body = str_replace("\$url", $url, $template->body);
        $template->body = str_replace('$sugarurl', $sugar_config['site_url'], $template->body);
    }


    private function getEmailsFromParams(SugarBean $bean, $params)
    {
        $emails = array();
        //backward compatible
        if (isset($params['email_target_type']) && !is_array($params['email_target_type'])) {
            $email = '';
            switch ($params['email_target_type']) {
                case 'Email Address':
                    $params['email'] = array($params['email']);
                    break;
                case 'Specify User':
                    $params['email'] = array($params['email_user_id']);
                    break;
                case 'Related Field':
                    $params['email'] = array($params['email_target']);
                    break;
            }
            $params['email_target_type'] = array($params['email_target_type']);
            $params['email_to_type'] = array('to');
        }
        //end backward compatible
        if (isset($params['email_target_type'])) {
            foreach ($params['email_target_type'] as $key => $field) {
                switch ($field) {
                    case 'Email Address':
                        if (trim($params['email'][$key]) != '') {
                            $emails[$params['email_to_type'][$key]][] = $params['email'][$key];
                        }
                        break;
                    case 'Specify User':
                        $user = BeanFactory::newBean('Users');
                        $user->retrieve($params['email'][$key]);
                        $user_email = $user->emailAddress->getPrimaryAddress($user);
                        if (trim($user_email) != '') {
                            $emails[$params['email_to_type'][$key]][] = $user_email;
                            $emails['template_override'][$user_email] = array('Users' => $user->id);
                        }

                        break;
                    case 'Users':
                        $users = array();
                        switch ($params['email'][$key][0]) {
                            case 'security_group':
                                if (file_exists('modules/SecurityGroups/SecurityGroup.php')) {
                                    require_once('modules/SecurityGroups/SecurityGroup.php');
                                    $security_group = BeanFactory::newBean('SecurityGroups');
                                    $security_group->retrieve($params['email'][$key][1]);
                                    $users = $security_group->get_linked_beans('users', 'User');
                                    $r_users = array();
                                    if ($params['email'][$key][2] != '') {
                                        require_once('modules/ACLRoles/ACLRole.php');
                                        $role = BeanFactory::newBean('ACLRoles');
                                        $role->retrieve($params['email'][$key][2]);
                                        $role_users = $role->get_linked_beans('users', 'User');
                                        foreach ($role_users as $role_user) {
                                            $r_users[$role_user->id] = $role_user->name;
                                        }
                                    }
                                    foreach ($users as $user_id => $user) {
                                        if ($params['email'][$key][2] != '' && !isset($r_users[$user->id])) {
                                            unset($users[$user_id]);
                                        }
                                    }
                                    break;
                                }
                            //No Security Group module found - fall through.
                            // no break
                            case 'role':
                                require_once('modules/ACLRoles/ACLRole.php');
                                $role = BeanFactory::newBean('ACLRoles');
                                $role->retrieve($params['email'][$key][2]);
                                $users = $role->get_linked_beans('users', 'User');
                                break;
                            case 'all':
                            default:
                                $db = DBManagerFactory::getInstance();
                                $sql = "SELECT id from users WHERE status='Active' AND portal_only=0 ";
                                $result = $db->query($sql);
                                while ($row = $db->fetchByAssoc($result)) {
                                    $user = BeanFactory::newBean('Users');
                                    $user->retrieve($row['id']);
                                    $users[$user->id] = $user;
                                }
                                break;
                        }
                        foreach ($users as $user) {
                            $user_email = $user->emailAddress->getPrimaryAddress($user);
                            if (trim($user_email) != '') {
                                $emails[$params['email_to_type'][$key]][] = $user_email;
                                $emails['template_override'][$user_email] = array('Users' => $user->id);
                            }
                        }
                        break;
                    case 'Related Field':
                        $emailTarget = $params['email'][$key];
                        $relatedFields = array_merge($bean->get_related_fields(), $bean->get_linked_fields());
                        $field = $relatedFields[$emailTarget];
                        if($emailTarget == 'case_contact'){
                            $caseRelBean = BeanFactory::getBean("Cases",$bean->case_id);
                            if(!empty($caseRelBean->id)){
                                $relBean = BeanFactory::getBean($caseRelBean->parent_type,$caseRelBean->parent_id);
                                if(!empty($relBean->id)){
                                    $linkedBeans = [$relBean];
                                }
                            }
                        }elseif($emailTarget == 'parent_name'){
                            $relBean = BeanFactory::getBean($bean->parent_type,$bean->parent_id);
                            if(!empty($relBean->id)){
                                $linkedBeans = [$relBean];
                            }
                        }elseif ($field['type'] == 'relate') {
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
                        if ($linkedBeans) {
                            foreach ($linkedBeans as $linkedBean) {
                                if (!empty($linkedBean)) {
                                    $rel_email = $linkedBean->emailAddress->getPrimaryAddress($linkedBean);
                                    if (trim($rel_email) != '') {
                                        $emails[$params['email_to_type'][$key]][] = $rel_email;
                                        $emails['template_override'][$rel_email] = array($linkedBean->module_dir => $linkedBean->id);
                                    }
                                }
                            }
                        }
                        break;
                    case 'Record Email':
                        $recordEmail = $bean->emailAddress->getPrimaryAddress($bean);
                        if ($recordEmail == '' && isset($bean->email1)) {
                            $recordEmail = $bean->email1;
                        }
                        if (trim($recordEmail) != '') {
                            $emails[$params['email_to_type'][$key]][] = $recordEmail;
                        }
                        break;
                }
            }
        }
        return $emails;
    }

    /**
     * Return true on success otherwise false.
     * Use actionSendEmail::getLastEmailsSuccess() and actionSendEmail::getLastEmailsFailed()
     * methods to get last email sending status
     *
     * @param SugarBean $bean
     * @param array $params
     * @param bool $in_save
     * @return boolean
     */
    public function run_action(SugarBean $bean, $params = array(), $in_save = false)
    {
        include_once __DIR__ . '/../../EmailTemplates/EmailTemplate.php';

        $this->clearLastEmailsStatus();

        $emailTemp = BeanFactory::newBean('EmailTemplates');
        $emailTemp->retrieve($params['email_template']);

        if ($emailTemp->id == '') {
            return false;
        }

        $emails = $this->getEmailsFromParams($bean, $params);

        if (!isset($emails['to']) || empty($emails['to'])) {
            return false;
        }

        $attachments = $this->getAttachments($emailTemp);

        $ret = true;
        if (isset($params['individual_email']) && $params['individual_email']) {
            foreach ($emails['to'] as $email_to) {
                $emailTemp = BeanFactory::newBean('EmailTemplates');
                $emailTemp->retrieve($params['email_template']);
                $template_override = isset($emails['template_override'][$email_to]) ? $emails['template_override'][$email_to] : array();
                $this->parse_template($bean, $emailTemp, $template_override);
                if (!$this->sendEmail(array($email_to), $emailTemp->subject, $emailTemp->body_html, $emailTemp->body, $bean, $emails['cc'], $emails['bcc'], $attachments)) {
                    $ret = false;
                    $this->lastEmailsFailed++;
                } else {
                    $this->lastEmailsSuccess++;
                }
            }
        } else {
            $this->parse_template($bean, $emailTemp);
            if ($emailTemp->text_only == '1') {
                $email_body_html = $emailTemp->body;
            } else {
                $email_body_html = $emailTemp->body_html;
            }

            if (!$this->sendEmail($emails['to'], $emailTemp->subject, $email_body_html, $emailTemp->body, $bean, $emails['cc'], $emails['bcc'], $attachments)) {
                $ret = false;
                $this->lastEmailsFailed++;
            } else {
                $this->lastEmailsSuccess++;
            }
        }
        return $ret;
    }

}