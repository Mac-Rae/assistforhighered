<?php
function display_early_alert($bean,$field){
    global $sugar_config;
    $ss = new Sugar_Smarty();
    $ss->assign('early_alert_config',$sugar_config['assistearlyalert']);
    $ss->assign('report_url',json_encode($sugar_config['assistearlyalert']['report_base_url'].$bean->emplid));
    $ss->assign('support_url',json_encode($sugar_config['assistearlyalert']['support_url']));

    $themeDefaults = [
        "early_alert_hr_color" => "#534d64",
        "early_alert_title" => "#534d64",
        "early_alert_description" => "#534d64",
        "early_alert_button" => "f5f5f5",
        "early_alert_button_bg" => "#f08377",
        "early_alert_link" => "#f08377",
        "early_alert_link_hover" => "#f08377",
    ];
    $themeConfig = [];
    foreach($themeDefaults as $key => $default){
        if(empty($sugar_config['assisttheme'][$key])){
            $themeConfig[$key] = $default;
        }else{
            $themeConfig[$key] =  $sugar_config['assisttheme'][$key];
        }
    }
    $ss->assign('THEMECONFIG', $themeConfig);
    return $ss->fetch('custom/modules/Contacts/tpls/ASSISTEarlyAlert.tpl');
}