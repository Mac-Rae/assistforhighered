<?php
global $sugar_config, $current_user;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->allow_undefined[] = 'mccd_athena';
    $cfg->saveConfig();
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}

$sugar_smarty = new Sugar_Smarty();

$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('syncTypes', get_select_options_with_id(['RDS' => 'RDS','Athena' => 'Athena','DB' => 'Database'],$sugar_config['mccd_athena']['sync_type']));
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->display('custom/modules/Administration/AthenaConfig.tpl');
