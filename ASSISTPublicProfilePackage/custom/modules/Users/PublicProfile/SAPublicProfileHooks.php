<?php
require_once 'include/upload_file.php';
class SAPublicProfileHooks{

    private function parseDayFromString($str){
        $ind = strrpos($str,'_');
        return substr($str,$ind+1);
    }

    function checkVanityUnique($userId,$vanity){
        global $db;
        $vanity = $db->quoted($vanity);
        $query = "SELECT assigned_user_id FROM sa_publicprofile WHERE deleted = 0 AND vanity_url = $vanity";
        $row = $db->fetchOne($query);
        if(empty($row['assigned_user_id']) || $row['assigned_user_id'] === $userId){
            return true;
        }
        return false;
    }


    public function savePrefs(User $user, $event, $args){
        global $app, $mod_strings;
        if($_REQUEST['module'] != 'Users' || $_REQUEST['action'] != 'Save' || $_REQUEST['record'] != $user->id){
            return;
        }
        if($_REQUEST['is_public_profile_tab']){
            SugarApplication::appendSuccessMessage($mod_strings['LBL_PROFILE_SAVED_SUCCESSFULLY']);
            $app->controller->return_action = 'EditView&show_public_profile=1';
        }
        $profile = BeanFactory::getBean('SA_PublicProfile');
        $profile->retrieve_by_string_fields(['assigned_user_id' => $user->id]);
        $profile->assigned_user_id = $user->id;
        $meetingDays = [];
        $businessDays = [];
        foreach($_REQUEST as $key => $val){
            if(substr($key,0,strlen("public_profile_")) != 'public_profile_'){
                continue;
            }
            $field = substr($key,strlen("public_profile_"));
            if(substr($field,0,strlen("value_")) == 'value_'){
                $field = substr($field,strlen("value_"));
            }
            if($val && substr($field,0,strlen("business_days")) == 'business_days'){
               $businessDays[] = $this->parseDayFromString($field);
            }
            if($val && substr($field,0,strlen("meeting_days")) == 'meeting_days'){
                $meetingDays[] = $this->parseDayFromString($field);
            }
            if($field == "live_chat"){
                $val = preg_replace("/[^A-Za-z0-9]/", '', $val);
            }
            if($field == 'vanity_url' && !$this->checkVanityUnique($user->id,$val)){
                continue;
            }
            $profile->$field = $val;
        }
            $profile->meeting_days = encodeMultienumValue($meetingDays);
            $profile->business_days = encodeMultienumValue($businessDays);
        if(!empty($_REQUEST['public_profile_photo_remove_photo'])){
            $profile->photo_name = '';
            $profile->photo_mime = '';
        }
        $profile->save();
        if(empty($_FILES['public_profile_value_photo'])) {
            return;
        }

        $uf = new UploadFile('public_profile_value_photo');
        if(!$uf->confirm_upload()){
            return;
        }
        sugar_mkdir("upload://public_profiles");
        if(substr($uf->get_mime_type(),0,strlen("image/")) == "image/"){
            $profile->photo_name = $uf->stored_file_name;
            $profile->photo_mime = $uf->get_mime_type();
            $uf->final_move("public_profiles/".$profile->id);
            $profile->save();
        }


    }
}