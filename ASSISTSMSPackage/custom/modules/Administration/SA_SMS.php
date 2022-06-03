<?php
global $current_user, $sugar_config, $mod_strings, $app_strings, $app_list_strings;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->allow_undefined[] = 'sa_sms';

    $cfg->populateFromPost();
    $cfg->handleOverride();
    $cfg->clearCache();
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}

$sugar_smarty = new Sugar_Smarty();

$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$provider = !empty($sugar_config['sa_sms']['provider']) ? $sugar_config['sa_sms']['provider'] : '';
$sugar_smarty->assign('PROVIDER_LIST',get_select_options_with_id($app_list_strings['sa_sms_providers'],$provider));
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('TWILIO_WEBHOOK_URL', $sugar_config['site_url']."/index.php?entryPoint=SA_SMSTwilioWebHook");
$sugar_smarty->assign('config', $sugar_config['sa_sms']);
$sugar_smarty->display('custom/modules/Administration/SA_SMS.tpl');
