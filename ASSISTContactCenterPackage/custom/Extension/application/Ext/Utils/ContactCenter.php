<?php
function getContactCenterBannerText(){
    global $current_user, $app_strings;
    if(empty($current_user->sa_contactcenters_id)){
        return "";
    }
    $contactCenter = BeanFactory::getBean('SA_ContactCenters',$current_user->sa_contactcenters_id);
    if(empty($contactCenter->id)){
        return "";
    }
    return $contactCenter->name . ": <a href='https://".$contactCenter->sso_login_url."'>".$app_strings['LBL_CONTACT_CENTER_BANNER_LOGIN']."</a>";
}