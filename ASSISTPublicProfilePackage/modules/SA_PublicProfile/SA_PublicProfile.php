<?php

class SA_PublicProfile extends Basic
{

    const MODULE_NAME = 'SA_PublicProfile';
    const TABLE_NAME = 'sa_publicprofile';

    public $new_schema = true;
    public $module_dir = self::MODULE_NAME;
    public $object_name = 'SA_PublicProfile';
    public $table_name = self::TABLE_NAME;
    public $importable = true;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }
        
        return false;
    }

    public function getPrefFields(){
        global $sugar_config, $timedate;
        $ret = [];
        $fields = [
            'enable' => array(
            ),
            'first_name' => array(
                'showable' => true,
                'value' => true,
            ),
            'last_name' => array(
                'showable' => true,
                'value' => true,
            ),
            'email_address' => array(
                'showable' => true,
                'value' => true,
            ),
            'department' => array(
                'showable' => true,
                'value' => true,
            ),
            'biography' => array(
                'showable' => true,
                'value' => true,
            ),
            'linkedin' => array(
                'showable' => true,
                'value' => true,
            ),
            'twitter' => array(
                'showable' => true,
                'value' => true,
            ),
            'live_chat' => array(
                'showable' => true,
                'value' => true,
            ),
            'webex' => array(
                'showable' => true,
                'value' => true,
            ),
            'title' => array(
                'showable' => true,
                'value' => true,
            ),
            'photo' => array(
                'showable' => true,
                'type' => 'photo',
            ),
            'institution' => array(
                'showable' => true,
                'type' => 'relate',
                'module' => 'SA_Institutions',
            ),
            'business_days' => array(
                'showable' => true,
                'type' => 'days',
            ),
            'business_hours_start' => array(
                'type' => 'hours',
            ),
            'business_hours_end' => array(
                'type' => 'hours',
            ),
            'meeting_days' => array(
                'showable' => true,
                'type' => 'days',
            ),
            'meeting_hours_start' => array(
                'type' => 'hours',
            ),
            'meeting_hours_end' => array(
                'type' => 'hours',
            ),
            'out_of_office' => array(
                'showable' => true,
                'type' => 'date_range',
            ),
            'meeting_length' => array(
                'value' => true,
            ),
            'use_vanity' => array(
            ),
            'vanity_url' => array(
                'value' => true,
            ),
            'meeting_in_person' => array(
                'showable' => true,
                'value' => true,
            ),
            'meeting_phone_call' => array(
                'showable' => true,
                'value' => true,
            ),
            'meeting_virtual' => array(
                'showable' => true,
                'value' => true,
            ),
        ];
        foreach($fields as $name => $field){
            if(!empty($field['showable'])){
                $showName = "show_".$name;
                $ret['public_profile_'.$showName] = $this->$showName;
            }
            if(!empty($field['value'])){
                $ret['public_profile_value_'.$name] = $this->$name;
            }elseif(!empty($field['type'])){
                switch($field['type']){
                    case 'relate':
                        $idName = $name."_id";
                        $ret['public_profile_value_'.$name.'_id'] = $this->$idName;
                        $related = BeanFactory::getBean($field['module'],$this->$idName);
                        if($related){
                            $ret['public_profile_value_'.$name.'_name'] = $related->get_summary_text();
                        }
                        break;
                    case 'photo':
                        $ret['public_profile_'.$name."_mime"] = $this->{$name."_mime"};
                        $ret['public_profile_'.$name."_name"] = $this->{$name."_name"};
                        $ret['public_profile_'.$name."_link"] = $sugar_config['site_url']."?entryPoint=download&record=".$this->id;
                        break;
                    case 'days':
                        foreach(unencodeMultienum($this->$name) as $day){
                            $ret['public_profile_value_'.$name][$day] = 1;
                        }
                        break;
                    case 'date_range':
                        $startDate = $timedate->fromDbDate($this->{$name."_start"});
                        if($startDate){
                            $ret['public_profile_value_'.$name."_start"] = $startDate->format("m/d/Y");
                        }

                        $endDate = $timedate->fromDbDate($this->{$name."_end"});
                        if($endDate){
                            $ret['public_profile_value_'.$name."_end"] = $endDate->format("m/d/Y");
                        }

                        break;
                }
            }else{
                $ret['public_profile_'.$name] = $this->$name;
            }


        }
        return $ret;
    }
}
