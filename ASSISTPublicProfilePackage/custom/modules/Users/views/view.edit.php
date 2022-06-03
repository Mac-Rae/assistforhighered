<?php
require_once 'modules/Users/views/view.edit.php';
require_once 'custom/modules/Users/PublicProfile/SAPublicProfile.php';

class CustomUsersViewEdit extends UsersViewEdit{
    public function display()
    {
        global $current_user, $app_list_strings, $mod_strings, $sugar_config;


        //lets set the return values
        if (isset($_REQUEST['return_module'])) {
            $this->ss->assign('RETURN_MODULE', $_REQUEST['return_module']);
        }
        $allowPublicProfile = in_array($current_user->id,$sugar_config['publicprofile']['users']);
        $this->ss->assign('allowPublicProfile',$allowPublicProfile);
        $this->ss->assign('IS_ADMIN', $current_user->is_admin ? true : false);

        //make sure we can populate user type dropdown.  This usually gets populated in predisplay unless this is a quickeditform
        if (!isset($this->fieldHelper)) {
            $this->fieldHelper = new UserViewHelper($this->ss, $this->bean, 'EditView');
            $this->fieldHelper->setupAdditionalFields();
        }

        if (isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true') {
            $this->ss->assign('RETURN_MODULE', $_REQUEST['return_module']);
            $this->ss->assign('RETURN_ACTION', $_REQUEST['return_action']);
            $this->ss->assign('RETURN_ID', $_REQUEST['record']);
            $this->bean->id = "";
            $this->bean->user_name = "";
            $this->ss->assign('ID', '');
        } else {
            if (isset($_REQUEST['return_module'])) {
                $this->ss->assign('RETURN_MODULE', $_REQUEST['return_module']);
            } else {
                $this->ss->assign('RETURN_MODULE', $this->bean->module_dir);
            }

            $return_id = isset($_REQUEST['return_id'])?$_REQUEST['return_id']:$this->bean->id;
            if (isset($return_id)) {
                $return_action = isset($_REQUEST['return_action'])?$_REQUEST['return_action']:'DetailView';
                $this->ss->assign('RETURN_ID', $return_id);
                $this->ss->assign('RETURN_ACTION', $return_action);
            }
        }


        ///////////////////////////////////////////////////////////////////////////////
        ////	REDIRECTS FROM COMPOSE EMAIL SCREEN
        if (isset($_REQUEST['type']) && (isset($_REQUEST['return_module']) && $_REQUEST['return_module'] == 'Emails')) {
            $this->ss->assign('REDIRECT_EMAILS_TYPE', $_REQUEST['type']);
        }
        ////	END REDIRECTS FROM COMPOSE EMAIL SCREEN
        ///////////////////////////////////////////////////////////////////////////////

        ///////////////////////////////////////////////////////////////////////////////
        ////	NEW USER CREATION ONLY
        if (empty($this->bean->id)) {
            $this->ss->assign('SHOW_ADMIN_CHECKBOX', 'height="30"');
            $this->ss->assign('NEW_USER', '1');
        } else {
            $this->ss->assign('NEW_USER', '0');
            $this->ss->assign('NEW_USER_TYPE', 'DISABLED');
        }

        ////	END NEW USER CREATION ONLY
        ///////////////////////////////////////////////////////////////////////////////


        // FIXME: Translate error prefix
        if (isset($_REQUEST['error_string'])) {
            LoggerManager::getLogger()->warn('Using error string in request is deprecated: ' . $_REQUEST[
                'error_string']);
            $this->ss->assign('ERROR_STRING', '<span class="error">Error: ' . $mod_strings['LBL_ERROR'] . '</span>');
        }
        if (isset($_REQUEST['error_password'])) {
            LoggerManager::getLogger()->warn('Using password error in request is deprecated: ' . $_REQUEST[
                'error_password']);
            $this->ss->assign('ERROR_PASSWORD', '<span id="error_pwd" class="error">Error: ' . $mod_strings['LBL_ERROR'
                ] . '</span>');
        }




        // Build viewable versions of a few fields for non-admins
        if (!empty($this->bean->id)) {
            if (!empty($this->bean->status)) {
                $this->ss->assign('STATUS_READONLY', $app_list_strings['user_status_dom'][$this->bean->status]);
            }
            if (!empty($this->bean->employee_status)) {
                $this->ss->assign('EMPLOYEE_STATUS_READONLY', $app_list_strings['employee_status_dom'][$this->bean->employee_status]);
            }
            if (!empty($this->bean->reports_to_id)) {
                $reportsToUser = get_assigned_user_name($this->bean->reports_to_id);
                $reportsToUserField = "<input type='text' name='reports_to_name' id='reports_to_name' value='{$reportsToUser}' disabled>\n";
                $reportsToUserField .= "<input type='hidden' name='reports_to_id' id='reports_to_id' value='{$this->bean->reports_to_id}'>";
                $this->ss->assign('REPORTS_TO_READONLY', $reportsToUserField);
            }
            if (!empty($this->bean->title)) {
                $this->ss->assign('TITLE_READONLY', $this->bean->title);
            }
            if (!empty($this->bean->department)) {
                $this->ss->assign('DEPT_READONLY', $this->bean->department);
            }
        }

        $processSpecial = false;
        $processFormName = '';
        if (isset($this->fieldHelper->usertype) && (
                $this->fieldHelper->usertype == 'GROUP'
            )) {
            $this->ev->formName = 'EditViewGroup';

            $processSpecial = true;
            $processFormName = 'EditViewGroup';
        }

        //Bug#51609 Replace {php} code block in EditViewHeader.tpl
        $action_button = array();
        $APP = $this->ss->get_template_vars('APP');
        $PWDSETTINGS = $this->ss->get_template_vars('PWDSETTINGS');
        $REGEX = $this->ss->get_template_vars('REGEX');
        $CHOOSER_SCRIPT = $this->ss->get_template_vars('CHOOSER_SCRIPT');
        $REASSIGN_JS = $this->ss->get_template_vars('REASSIGN_JS');
        $RETURN_ACTION = $this->ss->get_template_vars('RETURN_ACTION');
        $RETURN_MODULE = $this->ss->get_template_vars('RETURN_MODULE');
        $RETURN_ID = $this->ss->get_template_vars('RETURN_ID');

        $minpwdlength = !empty($PWDSETTINGS['minpwdlength']) ? $PWDSETTINGS['minpwdlength'] : '';
        $maxpwdlength =  !empty($PWDSETTINGS['maxpwdlength']) ? $PWDSETTINGS['maxpwdlength'] : '';
        $action_button_header[] = <<<EOD
                    <input type="button" id="SAVE_HEADER" title="{$APP['LBL_SAVE_BUTTON_TITLE']}" accessKey="{$APP['LBL_SAVE_BUTTON_KEY']}"
                          class="button primary" onclick="var _form = $('#EditView')[0]; if (!set_password(_form,newrules('{$minpwdlength}','{$maxpwdlength}','{$REGEX}'))) return false; if (!Admin_check()) return false; _form.action.value='Save'; {$CHOOSER_SCRIPT} {$REASSIGN_JS} if(verify_data(EditView)) _form.submit();"
                          name="button" value="{$APP['LBL_SAVE_BUTTON_LABEL']}">
EOD
        ;
        $action_button_header[] = <<<EOD
                    <script>
                       $('#EditView').submit(function(){
                                            var theForm =$('#EditView');
                                           if (!set_password(theForm[0],newrules('{$minpwdlength}','{$maxpwdlength}','{$REGEX}'))){
                                             return false;
                                           }
                                           if (!Admin_check()){
                                                return false;
                                            }
                                             $('#EditView input[name=action]').val('save');
                                            return true;
                        });
                     </script>
EOD
        ;
        $action_button_header[] = <<<EOD
                    <input	title="{$APP['LBL_CANCEL_BUTTON_TITLE']}" id="CANCEL_HEADER" accessKey="{$APP['LBL_CANCEL_BUTTON_KEY']}"
                              class="button" onclick="var _form = $('#EditView')[0]; _form.action.value='{$RETURN_ACTION}'; _form.module.value='{$RETURN_MODULE}'; _form.record.value='{$RETURN_ID}'; _form.submit()"
                              type="button" name="button" value="{$APP['LBL_CANCEL_BUTTON_LABEL']}">
EOD
        ;
        $action_button_header = array_merge($action_button_header, $this->ss->get_template_vars('BUTTONS_HEADER'));
        $this->ss->assign('ACTION_BUTTON_HEADER', $action_button_header);

        $action_button_footer[] = <<<EOD
                    <input type="button" id="SAVE_FOOTER" title="{$APP['LBL_SAVE_BUTTON_TITLE']}" accessKey="{$APP['LBL_SAVE_BUTTON_KEY']}"
                          class="button primary" onclick="var _form = $('#EditView')[0]; if (!set_password(_form,newrules('{$minpwdlength}','{$maxpwdlength}','{$REGEX}'))) return false; if (!Admin_check()) return false; _form.action.value='Save'; {$CHOOSER_SCRIPT} {$REASSIGN_JS} if(verify_data(EditView)) _form.submit();"
                          name="button" value="{$APP['LBL_SAVE_BUTTON_LABEL']}">
EOD
        ;
        $action_button_footer[] = <<<EOD
                    <input	title="{$APP['LBL_CANCEL_BUTTON_TITLE']}" id="CANCEL_FOOTER" accessKey="{$APP['LBL_CANCEL_BUTTON_KEY']}"
                              class="button" onclick="var _form = $('#EditView')[0]; _form.action.value='{$RETURN_ACTION}'; _form.module.value='{$RETURN_MODULE}'; _form.record.value='{$RETURN_ID}'; _form.submit()"
                              type="button" name="button" value="{$APP['LBL_CANCEL_BUTTON_LABEL']}">
EOD
        ;
        $action_button_footer = array_merge($action_button_footer, $this->ss->get_template_vars('BUTTONS_FOOTER'));
        $this->ss->assign('ACTION_BUTTON_FOOTER', $action_button_footer);

        //if the request object has 'scrolltocal' set, then we are coming here from the tour window box and need to set flag to true
        // so that footer.tpl fires off script to scroll to calendar section
        if (!empty($_REQUEST['scrollToCal'])) {
            $this->ss->assign('scroll_to_cal', true);
        }



        $this->ss->assign('SUBTHEMES', $this->bean->getSubThemes());
        $this->ss->assign('SUBTHEME', $this->bean->getSubTheme());

        $this->ss->assign("public_profile_url", $sugar_config['site_url']."/?entryPoint=PublicProfile&user=".$this->bean->id);
        $this->ss->assign("public_profile_url_vanity_base", $sugar_config['site_url']."/public");

        $publicProfilePrefs = BeanFactory::getBean('SA_PublicProfile');
        $publicProfilePrefs->retrieve_by_string_fields(['assigned_user_id'=>$this->bean->id]);

        foreach($publicProfilePrefs->getPrefFields() as $pppName => $pppVal){
            $this->ss->assign($pppName, $pppVal);
        }
        $this->ss->assign('days', ['monday','tuesday','wednesday','thursday','friday','saturday','sunday']);
        $hours = [''=>''];
        for($x = 0;$x < 24;$x++){
            $hours[$x] = $this->formatHours($x);
        }
        $prepop = [
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'title' => 'title',
            'department' => 'department',
            'email1' => 'email_address'
        ];
        foreach($prepop as $userField => $profileField){
            $profileField = "public_profile_value_".$profileField;
            if($this->ss->get_template_vars($profileField)){
                continue;
            }
            $this->ss->assign($profileField, $this->bean->$userField);
        }
        $minutes = ['' => '','00' => '00','15' => '15', '30' => '30', '45' => '45'];
        $this->ss->assign('businessHoursStartHours',get_select_options_with_id($hours,$this->getSelectedKeyForDD($publicProfilePrefs->business_hours_start_hours)));
        $this->ss->assign('businessHoursStartMinutes',get_select_options_with_id($minutes,$publicProfilePrefs->business_hours_start_minutes));
        $this->ss->assign('businessHoursEndHours',get_select_options_with_id($hours,$this->getSelectedKeyForDD($publicProfilePrefs->business_hours_end_hours)));
        $this->ss->assign('businessHoursEndMinutes',get_select_options_with_id($minutes,$publicProfilePrefs->business_hours_end_minutes));
        $this->ss->assign('meetingHoursStartHours',get_select_options_with_id($hours,$this->getSelectedKeyForDD($publicProfilePrefs->meeting_hours_start_hours)));
        $this->ss->assign('meetingHoursStartMinutes',get_select_options_with_id($minutes,$publicProfilePrefs->meeting_hours_start_minutes));
        $this->ss->assign('meetingHoursEndHours',get_select_options_with_id($hours,$this->getSelectedKeyForDD($publicProfilePrefs->meeting_hours_end_hours)));
        $this->ss->assign('meetingHoursEndMinutes',get_select_options_with_id($minutes,$publicProfilePrefs->meeting_hours_end_minutes));

        require_once('modules/Emails/EmailUI.php');
        $efocus = BeanFactory::newBean('Emails');
        $efocus->email2init();
        //$efocus->et->preflightUser($current_user);
        $out = $efocus->et->displayEmailFrame('modules/Users/_baseEmail.tpl');
        echo $out;
        echo "<script>var composePackage = null;</script>";

        $this->ev->process($processSpecial, $processFormName);

        echo $this->ev->display($this->showTitle);
    }

    private function getSelectedKeyForDD($val){
        if($val === null || $val === ''){
            return '-1';
        }
        return $val;
    }

    private function formatHours($x){
        $st = $x % 12;
        if($st == 0){
            $st = "12";
        }
        if($x < 12){
            $st .= "am";
        }else{
            $st .= "pm";
        }

        return $st;
    }
}