<?php
require_once 'custom/include/Services/SANormalisedPhoneHooks.php';

class SAPublicProfile
{
    public static function getPublicProfileColours(){
        global $sugar_config;
        $mod_strings = return_module_language("", "Administration");
        $colours = [
            [
                'name' => 'page-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_PAGE_BG'],
                'value' => $sugar_config['publicprofile']['theme']['page-bg-color'],
                'default' => '#ffffff',
                'attribute' => 'background-color',
                'selector' => "body",
            ],
            [
                'name' => 'page-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_PAGE_TEXT'],
                'value' => $sugar_config['publicprofile']['theme']['page-text-color'],
                'default' => '#212529',
                'attribute' => 'color',
                'selector' => "main",
            ],
            [
                'name' => 'top-bar-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_TOP_BAR'],
                'value' => $sugar_config['publicprofile']['theme']['top-bar-color'],
                'default' => '#002b5c',
                'attribute' => 'background-color',
                'selector' => ".topBar",
            ],
            [
                'name' => 'top-bar-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_TOP_BAR_TEXT'],
                'value' => $sugar_config['publicprofile']['theme']['top-bar-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".topBar h2",
            ],
            [
                'name' => 'footer-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_FOOTER'],
                'value' => $sugar_config['publicprofile']['theme']['footer-color'],
                'default' => '#002b5c',
                'attribute' => 'background-color',
                'selector' => ".footer",
            ],
            [
                'name' => 'panel-header-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_PANEL_HEADER_BG'],
                'value' => $sugar_config['publicprofile']['theme']['panel-header-bg-color'],
                'default' => '#002b5c',
                'attribute' => 'background-color',
                'selector' => ".card-header",
            ],
            [
                'name' => 'panel-header-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_PANEL_HEADER_TEXT'],
                'value' => $sugar_config['publicprofile']['theme']['panel-header-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".card-header",
            ],
            [
                'name' => 'warning-card-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_WARNING_CARD_BG'],
                'value' => $sugar_config['publicprofile']['theme']['warning-card-bg-color'],
                'default' => '#ffc107',
                'attribute' => 'background-color',
                'selector' => ".bg-warning",
            ],
            [
                'name' => 'warning-card-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_WARNING_CARD_TEXT'],
                'value' => $sugar_config['publicprofile']['theme']['warning-card-text-color'],
                'default' => '#212529',
                'attribute' => 'color',
                'selector' => ".bg-warning",
            ],
            [
                'name' => 'success-card-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_SUCCESS_CARD_BG'],
                'value' => $sugar_config['publicprofile']['theme']['success-card-bg-color'],
                'default' => '#74AA50',
                'attribute' => 'background-color',
                'selector' => ".bg-success",
            ],
            [
                'name' => 'success-card-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_SUCCESS_CARD_TEXT'],
                'value' => $sugar_config['publicprofile']['theme']['success-card-text-color'],
                'default' => '#212529',
                'attribute' => 'color',
                'selector' => ".bg-success",
            ],
            [
                'name' => 'btn-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_BG'],
                'value' => $sugar_config['publicprofile']['theme']['btn-bg-color'],
                'default' => '#74aa50',
                'attribute' => 'background-color',
                'selector' => ".btn-primary",
            ],
            [
                'name' => 'btn-border-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_BORDER'],
                'value' => $sugar_config['publicprofile']['theme']['btn-border-color'],
                'default' => '#74aa50',
                'attribute' => 'border-color',
                'selector' => ".btn-primary",
            ],
            [
                'name' => 'btn-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_TEXT_COLOR'],
                'value' => $sugar_config['publicprofile']['theme']['btn-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".btn-primary",
            ],
            [
                'name' => 'btn-disabled-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_DISABLED_BTN_BG'],
                'value' => $sugar_config['publicprofile']['theme']['btn-disabled-bg-color'],
                'default' => '#3d3d3d',
                'attribute' => 'background-color',
                'selector' => ".btn-primary:disabled",
            ],
            [
                'name' => 'btn-disabled-border-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_DISABLED_BORDER'],
                'value' => $sugar_config['publicprofile']['theme']['btn-disabled-border-color'],
                'default' => '#3d3d3d',
                'attribute' => 'border-color',
                'selector' => ".btn-primary:disabled",
            ],
            [
                'name' => 'btn-disabled-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_DISABLED_TEXT_COLOR'],
                'value' => $sugar_config['publicprofile']['theme']['btn-disabled-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".btn-primary:disabled",
            ],
            [
                'name' => 'btn-selected-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_SELECTED_BTN_BG'],
                'value' => $sugar_config['publicprofile']['theme']['btn-selected-bg-color'],
                'default' => '#28a745',
                'attribute' => 'background-color',
                'selector' => ".btn:hover",
            ],
            [
                'name' => 'btn-selected-border-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_SELECTED_BORDER'],
                'value' => $sugar_config['publicprofile']['theme']['btn-selected-border-color'],
                'default' => '#28a745',
                'attribute' => 'border-color',
                'selector' => ".btn:hover",
            ],
            [
                'name' => 'btn-selected-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_SELECTED_TEXT_COLOR'],
                'value' => $sugar_config['publicprofile']['theme']['btn-selected-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".btn:hover",
            ],
            [
                'name' => 'btn-success-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_SUCCESS_BTN_BG'],
                'value' => $sugar_config['publicprofile']['theme']['btn-success-bg-color'],
                'default' => '#74AA50',
                'attribute' => 'background-color',
                'selector' => ".btn-success",
            ],
            [
                'name' => 'btn-success-border-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_SUCCESS_BORDER'],
                'value' => $sugar_config['publicprofile']['theme']['btn-success-border-color'],
                'default' => '#74AA50',
                'attribute' => 'border-color',
                'selector' => ".btn-success",
            ],
            [
                'name' => 'btn-success-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_BTN_SUCCESS_TEXT_COLOR'],
                'value' => $sugar_config['publicprofile']['theme']['btn-success-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".btn-success",
            ],
            [
                'name' => 'matrix-bg-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_MATRIX_BG'],
                'value' => $sugar_config['publicprofile']['theme']['matrix-bg-color'],
                'default' => '#D3D3D3',
                'attribute' => 'background-color',
                'selector' => ".meeting_slots_form table",
            ],
            [
                'name' => 'matrix-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_MATRIX_TEXT_COLOR'],
                'value' => $sugar_config['publicprofile']['theme']['matrix-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".meeting_slots_form table",
            ],
            [
                'name' => 'header-text-color',
                'label' => $mod_strings['LBL_ASSIST_PUBLIC_PROFILE_COLOUR_HEADER_TEXT'],
                'value' => $sugar_config['publicprofile']['theme']['header-text-color'],
                'default' => '#ffffff',
                'attribute' => 'color',
                'selector' => ".topBar h2",
            ],

        ];
        foreach ($colours as $k => $colour) {
            if (empty($colour['value'])) {
                $colours[$k]['value'] = $colour['default'];
            }
        }
        return $colours;
    }

    public static function getUserPublicProfilePreferences(User $user){
        $items = ['name','photo','email'];
        $ret = [];
        $ret['public_profile_enable'] = $user->getPreference('public_profile_enable','public_profile');
        foreach($items as $item){
            $ret['public_profile_show_'.$item] = $user->getPreference('public_profile_show_'.$item,'public_profile');
        }
        return $ret;
    }

    public function checkWithinBusinessHours(SA_PublicProfile $profile){
        global $timedate;
        $user = BeanFactory::getBean('Users',$profile->assigned_user_id);
        $now = $timedate->getNow();
        $now = $timedate->tzUser($now, $user);
        $today = $now->format("l");

        $workingDay = false;
        foreach(unencodeMultienum($profile->business_days) as $day){
            if($day == strtolower($today)){
                $workingDay = true;
                break;
            }
        }
        if(!$workingDay){
            return false;
        }
        $now = $now->format("Y-m-d H:i");
        $startTime = DateTime::createFromFormat('H:i', $this->formatTime($profile->business_hours_start_hours, $profile->business_hours_start_minutes));
        $startTime = $startTime->format("Y-m-d H:i");
        $endTime = DateTime::createFromFormat('H:i',$this->formatTime($profile->business_hours_end_hours,$profile->business_hours_end_minutes));
        $endTime = $endTime->format("Y-m-d H:i");
        return $now > $startTime && $now < $endTime;
    }

    private function formatTime($hours,$mins){
        return str_pad($hours,2,'0',STR_PAD_LEFT) . ":" . str_pad($mins,2,'0',STR_PAD_LEFT);
    }

    private function getDisplayItems(SA_PublicProfile $profile){
        global $timedate;
        $user = BeanFactory::getBean("Users",$profile->assigned_user_id);
        $items = [
            'photo',
            'first_name',
            'last_name',
            'title',
            'department',
            'institution',
            'email_address',
            'webex',
            'linkedin',
            'twitter',
            'biography',
            'live_chat',
            'business_days',
            'business_hours_start',
            'business_hours_end',
            'meeting_days',
            'meeting_hours_start',
            'meeting_hours_end',
            'out_of_office'
        ];
        $ret = [];
        $showMap = [
            'business_hours_start' => 'business_days',
            'business_hours_end' => 'business_days',
            'meeting_hours_start' => 'meeting_days',
            'meeting_hours_end' => 'meeting_days'
        ];
        foreach($items as $item){
            $showCheck = $item;
            if(!empty($showMap[$item])){
                $showCheck = $showMap[$item];
            }
            if(!$profile->{"show_".$showCheck}) {
                continue;
            }
            switch($item){
                case 'meeting_hours_start':
                case 'meeting_hours_end':
                case 'business_hours_start':
                case 'business_hours_end':
                    $t = $this->formatTime($profile->{$item."_hours"},$profile->{$item."_minutes"});
                    $t = DateTime::createFromFormat('H:i',$t);
                    $ret[$item] = $t->format($timedate->get_time_format($user));
                    break;
                case 'business_days':
                case 'meeting_days':
                    $days = unencodeMultienum($profile->$item);
                    $days = array_map(function($d){
                        return substr(ucwords($d),0,3);
                    },$days);
                      $ret[$item] = implode(",",$days);
                    break;
                case 'out_of_office':
                    $start = $timedate->fromDbDate($profile->{$item."_start"});
                    $end = $timedate->fromDbDate($profile->{$item."_end"});
                    $now = $timedate->getNow();
                    if($start && $end && $now > $start && $now < $end){
                        $outOfOffice = true;
                    }else{
                        $outOfOffice = false;
                    }
                    $ret['is_out_of_office'] = $outOfOffice;
                    if($start){
                        $ret[$item."_start"] = $start->format("m/d/Y");
                    }
                    if($end){
                        $ret[$item."_end"] = $end->format("m/d/Y");
                    }
                case 'photo':
                    $ret[$item] = base64_encode(file_get_contents('upload/public_profiles/' . $profile->id));
                    break;
                case 'institution':
                    $institution = BeanFactory::getBean('SA_Institutions',$profile->institution_id);
                    if(!empty($institution->id)) {
                        $ret['institution_name'] = $institution->get_summary_text();
                        $addrFields = [
                            $institution->billing_address_city,
                            $institution->billing_address_state,
                            $institution->billing_address_postalcode,
                        ];
                        $addrFields = array_filter($addrFields);
                        $ret['institution_address'] = '';
                        if ($institution->billing_address_street) {
                            $ret['institution_address'] = $institution->billing_address_street . "<br>";
                        }
                        $addrFields = implode(", ", $addrFields);
                        if ($addrFields){
                            $ret['institution_address'] .= $addrFields."<br>";
                        }
                        if($institution->billing_address_country){
                            $ret['institution_address'] .= $institution->billing_address_country;
                        }


                        $ret['institution_phone'] = $institution->phone_office;
                    }
                    break;
                default:
                    $ret[$item] = $profile->$item;
                    break;
            }
        }
        $ret['id'] = $profile->assigned_user_id;
        $ret['within_business'] = $this->checkWithinBusinessHours($profile);
        $tz = new DateTimeZone($user->getPreference('timezone'));
        $dateTime = new DateTime();
        $dateTime->setTimeZone($tz);
        $ret['tz_display'] = $dateTime->format( 'T' );
        return $ret;
    }

    public function getUserFromVanity($vanity){
        global $db, $sugar_config;
        $vanity = $db->quoted($vanity);
        $query = "SELECT assigned_user_id FROM sa_publicprofile WHERE deleted = 0 AND use_vanity AND vanity_url = $vanity";
        $row = $db->fetchOne($query);
        $userId = $row['assigned_user_id'];
        if(!in_array($userId,$sugar_config['publicprofile']['users'])){
            return '';
        }
        return $userId;
    }

    public function decodeHTMLSettings($setting){
        global $sugar_config;
        return html_entity_decode(str_replace('$siteURL',$sugar_config['site_url'],base64_decode($setting)));
    }

    public function assignCommonVariables(Sugar_Smarty $ss){
        global $sugar_config;
        $ss->assign('site_url',$sugar_config['site_url']);
        $ss->assign('custom_css',$this->decodeHTMLSettings($sugar_config['publicprofile']['custom_css']));
        $colourCSS = '';
        foreach(self::getPublicProfileColours() as $colourInfo){
            if(empty($colourInfo['value'])){
                continue;
            }
            $selector = $colourInfo['selector'];
            $attribute = $colourInfo['attribute'];
            $value = $colourInfo['value'];
            $colourCSS .= <<<EOF
            $selector {
                $attribute: $value !important;
            }
EOF;
        }
        $ss->assign('colour_css',$colourCSS);
        $ss->assign('request_user_id', $_REQUEST['user']);
        $ss->assign('top_html',$this->decodeHTMLSettings($sugar_config['publicprofile']['top_html']));
        $ss->assign('bottom_html',$this->decodeHTMLSettings($sugar_config['publicprofile']['bottom_html']));
    }

    public function run()
    {
        global $sugar_config;
        $ss = new Sugar_Smarty();
        $this->assignCommonVariables($ss);
        if (empty($_REQUEST['user']) && !empty($_REQUEST['vanity'])) {
            $_REQUEST['user'] = $this->getUserFromVanity($_REQUEST['vanity']);
        }
        if (empty($_REQUEST['user'])) {
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $profile = BeanFactory::getBean('SA_PublicProfile');
        $profile->retrieve_by_string_fields(['assigned_user_id' => $_REQUEST['user']]);
        if (empty($profile->id) || empty($profile->enable) || !in_array($profile->assigned_user_id,$sugar_config['publicprofile']['users'])) {
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $ss->assign("status", $_REQUEST['status'] ?? '');
        $ss->assign("user_data", $this->getDisplayItems($profile));
        if(empty($_REQUEST['vanity'])){
            $meetingURL = $sugar_config['site_url']."/index.php?entryPoint=PublicProfileMeeting&user=".$profile->assigned_user_id;
        }else{
            $meetingURL = $sugar_config['site_url']."/public/".$_REQUEST['vanity']."/meeting";
        }
        $ss->assign('meetingURL',$meetingURL);
        echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfile.tpl');
    }

    public function areMeetingsEnabled(SA_PublicProfile $profile){
        return $profile->show_meeting_days;
    }

    public function runMeetings()
    {
        global $sugar_config;
        $ss = new Sugar_Smarty();
        $this->assignCommonVariables($ss);
        if (empty($_REQUEST['user']) && !empty($_REQUEST['vanity'])) {
            $_REQUEST['user'] = $this->getUserFromVanity($_REQUEST['vanity']);
        }
        if(empty($_REQUEST['user'])){
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $profile = BeanFactory::getBean('SA_PublicProfile');
        $profile->retrieve_by_string_fields(['assigned_user_id'=>$_REQUEST['user']]);
        if(empty($profile->id) || empty($profile->enable) || !in_array($profile->assigned_user_id,$sugar_config['publicprofile']['users'])){
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        if(!$this->areMeetingsEnabled($profile)){
            $ss->assign("error","meetings_disabled");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }

        $ss->assign("user_data",$this->getDisplayItems($profile));
        $slots = $this->getSlots($profile);
        $blocks = $this->slotsToBlocks($slots);
        $slotTimes = [];
        foreach($blocks as $name => $block){
                $slotTimes[$name] = array_keys(reset($block));
        }
        $ss->assign("meeting_times",$slotTimes);
        $ss->assign("meeting_blocks",$blocks);
        if($profile->use_vanity && $profile->vanity_url){
            $link = $sugar_config['site_url']."/public/".$profile->vanity_url;
        }else {
            $link = $sugar_config['site_url']."/index.php?entryPoint=PublicProfile&user=" . $profile->assigned_user_id;
        }
        $ss->assign('profile_link',$link);
        echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileMeetings.tpl');
    }

    private function slotsToBlocks($slots){
        $blockNames = [
            "Earliest Morning",
            "Early Morning",
            "Morning",
            "Afternoon",
            "Evening",
            "Late Evening"
        ];
        $blocks = [];
        foreach($slots as $day => $slotTimes){
            foreach($slotTimes as $slot => $info){
                $slotDT = DateTime::createFromFormat('g:i A',$slot);
                $blockName = $blockNames[floor($slotDT->format("G") / 4)];
                if(empty($blocks[$blockName])){
                    $blocks[$blockName] = [];
                }
                if(empty($blocks[$blockName][$day])){
                    $blocks[$blockName][$day] = [];
                }
                $blocks[$blockName][$day][$slot] = $info;
            }

        }
        $blockMapping = array_flip($blockNames);
        uksort($blocks,function($a,$b) use ($blockMapping){
            return $blockMapping[$a] - $blockMapping[$b];
        });
        return $blocks;
    }

    private function getActivitiesForPeriod($userId,DateTime $startDate,DateTime $endDate){
        global $db, $timedate;
        $userQuoted = $db->quoted($userId);

        $user = BeanFactory::getBean('Users',$_REQUEST['user']);
        $tz = $user->getPreference('timezone','global');
        if($tz){
            $tz = new DateTimeZone($tz);
        }

        $start = $db->quoted($timedate->asDb($startDate));
        $end = $db->quoted($timedate->asDb($endDate));
        $sql = <<<EOF
SELECT m.id,m.date_start,m.date_end 
FROM meetings m 
LEFT JOIN meetings_users mu ON (
    m.id = mu.meeting_id AND mu.deleted = 0
    ) 
WHERE
      m.deleted = 0 
        AND (m.assigned_user_id = $userQuoted OR mu.user_id = $userQuoted)
        AND (
                (m.date_start >= $start AND m.date_start < $end)
                OR
                (m.date_end > $start AND m.date_end < $end)
                OR (m.date_start < $start AND m.date_end > $end)
            )
UNION
SELECT c.id,c.date_start,c.date_end
FROM calls c 
LEFT JOIN calls_users cu ON (
    c.id = cu.call_id AND cu.deleted = 0
    ) 
WHERE
      c.deleted = 0 
        AND (c.assigned_user_id = $userQuoted OR cu.user_id = $userQuoted)
        AND (
                (c.date_start >= $start AND c.date_start < $end)
                OR
                (c.date_end > $start AND c.date_end < $end)
                OR (c.date_start < $start AND c.date_end > $end)
            )
EOF;

        $res = $db->query($sql);
        $activities = [];
        while($row = $db->fetchByAssoc($res)){
            if($tz){
                $dateStart = $timedate->fromDb($row['date_start']);
                $dateEnd = $timedate->fromDb($row['date_end']);
                $offset = $tz->getOffset($dateStart);
                $dateStart->modify('+'.$offset.' second');
                $offset = $tz->getOffset($dateEnd);
                $dateEnd->modify($offset.' second');
                $row['date_start'] = $timedate->asDb($dateStart);
                $row['date_end'] = $timedate->asDb($dateEnd);
            }
            $activities[] = $row;
        }
        return $activities;
    }

    public function getSlots(SA_PublicProfile $profile){
        global $timedate, $db;
        $ret = [];
        $date = $timedate->getNow();
        $days = 15;

        $end = clone $date;
        $end->add(DateInterval::createFromDateString(($days+1).' days'));
        $activities = $this->getActivitiesForPeriod($profile->assigned_user_id,$date,$end);

        for($x = 0; $x < $days; $x++){
            $date->add(DateInterval::createFromDateString('1 days'));
            $dateKey = $date->format("D n/d");

            $checkDay = $date->format("l");
            $isMeetingDay = false;
            foreach(unencodeMultienum($profile->meeting_days) as $day){
                if($day == strtolower($checkDay)){
                    $isMeetingDay = true;
                    break;
                }
            }
            if($profile->show_out_of_office){
                $oooStart = $timedate->fromDbDate($profile->out_of_office_start);
                $oooEnd = $timedate->fromDbDate($profile->out_of_office_end);
                if($date > $oooStart && $date < $oooEnd){
                    $isMeetingDay = false;
                }
            }

            $ret[$dateKey] = [];
            $time = clone $date;
            $time->setTime($profile->meeting_hours_start_hours,$profile->meeting_hours_start_minutes);
            while(!($time->format("H") >= $profile->meeting_hours_end_hours && $time->format("i") >= $profile->meeting_hours_end_minutes)){
                $thisKey = $time->format("g:i A");
                $ret[$dateKey][$thisKey] = ['free' => 1,'slot_info'=>$time->format("Y-m-d H:i:s")];
                $startCheck = $time->format("Y-m-d H:i:s");

                $time->add(DateInterval::createFromDateString($this->getMeetingLength($profile).' minutes'));

                if(!$isMeetingDay){
                    $ret[$dateKey][$thisKey]['free'] = 0;
                    continue;
                }

                $endCheck = $time->format("Y-m-d H:i:s");
                foreach($activities as $activity){
                    if($activity['date_start'] >= $startCheck && $activity['date_start'] < $endCheck){
                        $ret[$dateKey][$thisKey]['free'] = 0;
                        break;
                    }
                    if($activity['date_end'] > $startCheck && $activity['date_end'] <= $endCheck){
                        $ret[$dateKey][$thisKey]['free'] = 0;
                        break;
                    }
                    if($activity['date_start'] <= $startCheck && $activity['date_end'] >= $endCheck){
                        $ret[$dateKey][$thisKey]['free'] = 0;
                        break;
                    }
                }
            }

        }
        return $ret;
    }

    public function runBookMeetings(){
        global $timedate, $sugar_config, $app_list_strings;
        $ss = new Sugar_Smarty();
        $this->assignCommonVariables($ss);
        if(empty($_REQUEST['user'])){
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $profile = BeanFactory::getBean('SA_PublicProfile');
        $profile->retrieve_by_string_fields(['assigned_user_id'=>$_REQUEST['user']]);
        if(empty($profile->id) || empty($profile->enable) || !in_array($profile->assigned_user_id,$sugar_config['publicprofile']['users'])){
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        if(!$this->areMeetingsEnabled($profile)){
            $ss->assign("error","meetings_disabled");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }

        $date = $timedate->fromDb($_REQUEST['slot']);
        if(empty($date)){
            $ss->assign("error","bad_meeting_date");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $end = clone $date;
        $end->add(DateInterval::createFromDateString($this->getMeetingLength($profile)." minutes"));
        if($this->getActivitiesForPeriod($profile->assigned_user_id,$date,$end)){
            $ss->assign("error","meeting_date_taken");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        if($sugar_config['publicprofile']['recaptcha_key']){
            $ss->assign('recaptchaKey',$sugar_config['publicprofile']['recaptcha_key']);
        }
        if($_REQUEST['error']){
            $ss->assign("error",$_REQUEST['error']);
        }
        $ss->assign("user_data",$this->getDisplayItems($profile));
        $ss->assign("slot",$date->format("Y-m-d H:i:s"));
        $ss->assign("slotDisplay",$date->format("l, F j Y g:i A"));
        if($profile->use_vanity && $profile->vanity_url){
            $link = $sugar_config['site_url']."/public/".$profile->vanity_url;
        }else {
            $link = $sugar_config['site_url']."/index.php?entryPoint=PublicProfile&user=" . $profile->assigned_user_id;
        }
        $ss->assign('profile_link',$link);

        $meetingOptions = $app_list_strings['sa_publicprofile_meeting_types'];
        $enabledMeetingOptions = [];
        $meetingDay = strtolower($date->format("l"));
        foreach($meetingOptions as $meetingOption => $label){
            if(empty($profile->{'show_meeting_'.$meetingOption})){
                continue;
            }
            $fieldKey = "meeting_".$meetingOption."_days";
            if(!in_array($meetingDay, unencodeMultienum($profile->$fieldKey))){
                continue;
            }
            $enabledMeetingOptions[$meetingOption] = $label;
        }

        $ss->assign('meeting_types',$enabledMeetingOptions);

        echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileBookMeetings.tpl');
    }

    private function getMeetingLength($profile){
        return $profile->meeting_length ? $profile->meeting_length : 30;
    }

    public function findOrCreateMeetingPerson($meId, $email, $phone, $firstName, $lastName, $reason){
        $phone = SANormalisedPhoneHooks::normalisePhone($phone);
        $contactBean = BeanFactory::getBean('Contacts');
        //1. Try to find contacts by meid
        if($meId){
            $contactBeanMatch = $contactBean->retrieve_by_string_fields(['meid_c' => $meId]);
            if($contactBeanMatch->id){
                return $contactBeanMatch;
            }
        }
        //2. Try to find contacts by email
        if($email){
            $emailBeans = $contactBean->emailAddress->getBeansByEmailAddress($email);
            foreach($emailBeans as $emailBean){
                if($emailBean->module_dir == 'Contacts'){
                    return $emailBean;
                }
            }
        }
        //3. Try to find contacts by phone
        if($phone){
            $contactBeanMatch = $contactBean->retrieve_by_string_fields(['phone_mobile_normalised' => $phone]);
            if($contactBeanMatch->id){
                return $contactBeanMatch;
            }
        }
        //4. Try to find lead by email
        if(!empty($emailBeans)){
            foreach($emailBeans as $emailBean){
                if($emailBean->module_dir == 'Leads'){
                    return $emailBean;
                }
            }
        }
        //5. Try to find Lead by phone
        $leadBean = BeanFactory::getBean('Leads');
        if($phone){
            $leadBeanMatch = $leadBean->retrieve_by_string_fields(['phone_mobile_normalised' => $phone]);
            if($leadBeanMatch->id){
                return $leadBeanMatch;
            }
        }
        //6. Fallback to creating a new lead
        $leadBean = BeanFactory::newBean('Leads');
        $leadBean->first_name = $firstName;
        $leadBean->last_name = $lastName;
        $leadBean->phone_mobile = $phone;
        $leadBean->email1 = $email;
        $leadBean->lead_source = 'ASSIST';
        $leadBean->description = <<<EOF
Created from Public Profile Meeting Request.
Meeting Reason: $reason
EOF;
        $leadBean->save();
        return $leadBean;

    }

    public function meetingFormError(){
        global $app_strings, $sugar_config;

        if($sugar_config['publicprofile']['recaptcha_key']){
            $recaptchaResponse = $_REQUEST['g-recaptcha-response'];
            $ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,[
                'secret' => $sugar_config['publicprofile']['recaptcha_secret'],
                'response' => $recaptchaResponse,
            ]);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $res = curl_exec($ch);
            $ob = json_decode($res,1);
            if(empty($ob) || empty($ob['success'])){
                return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_RECAPTCHA'];
            }
        }

        if(!empty($_REQUEST['maricopa_id']) && strlen($_REQUEST['maricopa_id']) != 10){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_MARICOPA_ID'];
        }
        if(empty($_REQUEST['first_name'])){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_FIRST_NAME'];
        }
        if(empty($_REQUEST['last_name'])){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_LAST_NAME'];
        }
        if(empty($_REQUEST['phone'])){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_PHONE'];
        }
        if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_REQUEST['phone'])) {
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_PHONE'];
        }
        if(empty($_REQUEST['email_address'])){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_EMAIL'];
        }
        if(empty($_REQUEST['reason'])){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_REASON'];
        }
        if(empty($_REQUEST['meeting_type'])){
            return $app_strings['LBL_ASSIST_PUBLIC_PROFILE_BOOK_MEETING_ERROR_MEETING_TYPE'];
        }
        return false;
    }

    public function bookMeeting(){
        global $timedate, $sugar_config, $app_list_strings;
        $ss = new Sugar_Smarty();
        $this->assignCommonVariables($ss);
        if(empty($_REQUEST['user'])){
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $error = $this->meetingFormError();
        if($error){
            $redirectURL = $sugar_config['site_url'].'/index.php?entryPoint=PublicProfileBookMeeting&user='.$_REQUEST['user'].'&slot='.$_REQUEST['slot'];
            $redirectURL .= "&error=$error";
            SugarApplication::redirect($redirectURL);
            return;
        }
        $profile = BeanFactory::getBean('SA_PublicProfile');
        $profile->retrieve_by_string_fields(['assigned_user_id'=>$_REQUEST['user']]);
        if(empty($profile->id) || empty($profile->enable) || !in_array($profile->assigned_user_id,$sugar_config['publicprofile']['users'])){
            $ss->assign("error","no_user");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        if(!$this->areMeetingsEnabled($profile)){
            $ss->assign("error","meetings_disabled");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $slot = $timedate->fromDb($_REQUEST['slot']);
        if(empty($slot)){
            $ss->assign("error","bad_meeting_date");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }
        $user = BeanFactory::getBean('Users',$_REQUEST['user']);
        $tz = $user->getPreference('timezone','global');

        if($tz){
            $tz = new DateTimeZone($tz);
            $offset = 0-$tz->getOffset($slot);
            $slot->modify('+'.$offset.' second');
        }

        $end = clone $slot;
        $end->add(DateInterval::createFromDateString($this->getMeetingLength($profile)." minutes"));
        if($this->getActivitiesForPeriod($profile->assigned_user_id,$slot,$end)){
            $ss->assign("error","meeting_date_taken");
            echo $ss->fetch('custom/modules/Users/PublicProfile/SAPublicProfileError.tpl');
            return;
        }

        $meetingPerson = $this->findOrCreateMeetingPerson(
            $_REQUEST['maricopa_id'],
            $_REQUEST['email_address'],
            $_REQUEST['phone'],
            $_REQUEST['first_name'],
            $_REQUEST['last_name'],
            $_REQUEST['reason']
        );
        $meeting = BeanFactory::newBean('Meetings');
        $name = $_REQUEST['first_name'] . ' '.$_REQUEST['last_name'];
        $meeting->name = "[".$name."] Public Profile Meeting";
        $meeting->date_start = $timedate->asDb($slot);
        $meeting->duration_hours = 0;
        $meeting->duration_minutes = $this->getMeetingLength($profile);
        $meeting->assigned_user_id = $profile->assigned_user_id;
        $meeting->meeting_source = 'PublicProfile';

        $meeting->description = <<<EOF
Name: {$name}
Maricopa ID: {$_REQUEST['maricopa_id']}
Email: {$_REQUEST['email_address']}
Phone: {$_REQUEST['phone']}
Reason: {$_REQUEST['reason']}
EOF;
        $meetingType = !empty($_REQUEST['meeting_type']) ? $_REQUEST['meeting_type'] : '';
        if($meetingType){
            $meeting->location = $profile->{'meeting_'.$meetingType};
            $meeting->meeting_type = $meetingType;
        }
        if($meetingPerson){
            $meeting->parent_id = $meetingPerson->id;
            $meeting->parent_type = $meetingPerson->module_dir;
        }
        $meeting->save();
        $meeting->load_relationship('users');
        $meeting->users->add($meeting->assigned_user_id,array('accept_status' => 'accept'));
        if($meetingPerson->module_dir == 'Contacts'){
            $meeting->load_relationship('contacts');
            $meeting->contacts->add($meetingPerson->id,array('accept_status' => 'accept'));
        }elseif($meetingPerson->module_dir == 'Leads'){
            $meeting->load_relationship('leads');
            $meeting->leads->add($meetingPerson->id,array('accept_status' => 'accept'));
        }

        if($profile->use_vanity && $profile->vanity_url){
            $redirectURL = $sugar_config['site_url'].'/public/'.$profile->vanity_url.'/booked';
        }else {
            $redirectURL = $sugar_config['site_url'].'/index.php?entryPoint=PublicProfile&status=booked&user=' . $profile->assigned_user_id;
        }
        SugarApplication::redirect($redirectURL);
    }
}
