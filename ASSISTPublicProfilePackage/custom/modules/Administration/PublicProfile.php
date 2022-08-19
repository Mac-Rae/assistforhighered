<?php

if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}
require_once 'custom/modules/Users/PublicProfile/SAPublicProfile.php';

$htmlFields = ['custom_css','top_html','bottom_html'];
if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->allow_undefined[] = 'publicprofile';
    if(!empty($_REQUEST['publicprofile']['users'])){
        $_REQUEST['publicprofile']['users'] = json_decode(html_entity_decode($_REQUEST['publicprofile']['users']),1);
        $_POST['publicprofile']['users'] = $_REQUEST['publicprofile']['users'];
    }
    $cfg->populateFromPost();
    if(empty($_REQUEST['publicprofile']['users'])){
        $cfg->config['publicprofile']['users'] = '';
    }

    foreach($htmlFields as $htmlField){
        if(!empty($_REQUEST['publicprofile'][$htmlField])){
            $cfg->config['publicprofile'][$htmlField] = base64_encode($cfg->config['publicprofile'][$htmlField]);
        }
    }

    $cfg->handleOverride();
    $cfg->clearCache();
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}

$sugar_smarty = new Sugar_Smarty();

$vanityURLUsers = [];
foreach($sugar_config['publicprofile']['users'] as $userId){
    $username = get_user_name($userId);
    if(!$username){
        continue;
    }
    $vanityURLUsers[$userId] = $username;
}
$vanityURLUsers = get_select_options_with_id($vanityURLUsers,'');
$sugar_smarty->assign('vanityURLUsers',$vanityURLUsers);

foreach($htmlFields as $htmlField){
    $sugar_config['publicprofile'][$htmlField] = base64_decode($sugar_config['publicprofile'][$htmlField]);
}

$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('colours',SAPublicProfile::getPublicProfileColours());
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->display('custom/modules/Administration/PublicProfile.tpl');
