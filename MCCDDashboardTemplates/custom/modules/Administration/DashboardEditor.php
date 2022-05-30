<?php
global $db, $theme, $current_user,$mod_strings,$app_strings,$app_list_strings,$sugar_config;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->addKeyToIgnoreOverride('assist_dashboardtemplates',$_REQUEST['assist_dashboardtemplates']);
    $cfg->allow_undefined[] = 'assist_dashboardtemplates';
    $cfg->saveConfig();
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}

$sugar_smarty = new Sugar_Smarty();

$roles = ['' => ''];
$res = $db->query("SELECT id,name FROM acl_roles WHERE deleted = 0 ORDER BY name");

while($row = $db->fetchByAssoc($res)){
    $roles[$row['id']] = $row['name'];
}
$roleOptions = get_select_options_with_id($roles,'');
$sugar_smarty->assign('roleOptions', $roleOptions);

$dashboards = ['' => ''];
$res = $db->query("SELECT id,name FROM sa_dashboardtemplates WHERE deleted = 0 ORDER BY name");

while($row = $db->fetchByAssoc($res)){
    $dashboards[$row['id']] = $row['name'];
}
$dashboardOptions = get_select_options_with_id($dashboards,'');
$sugar_smarty->assign('dashboardOptions', $dashboardOptions);

$lines = [];
foreach($sugar_config['assist_dashboardtemplates']['dashboard'] as $key => $val){
    $lines[] = ['dashboard' => $val, 'role' => $sugar_config['assist_dashboardtemplates']['target_role'][$key]];
}
$linesJSON = json_encode($lines);
$sugar_smarty->assign('linesJSON', $linesJSON);


$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->display('custom/modules/Administration/DashboardEditor.tpl');



