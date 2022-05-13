<?php
global $db, $theme, $current_user,$mod_strings,$app_strings,$app_list_strings,$sugar_config;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    if(empty($_REQUEST['template_user_id'])){
        SugarApplication::appendErrorMessage($mod_strings['LBL_DASHBOARDTEMPLATES_NO_USER_ID']);
        SugarApplication::redirect('index.php?module=Administration&action=DashboardTemplates');
        exit();
    }
    if(empty($_REQUEST['template_name'])){
        SugarApplication::appendErrorMessage($mod_strings['LBL_DASHBOARDTEMPLATES_NO_TEMPLATE_NAME']);
        SugarApplication::redirect('index.php?module=Administration&action=DashboardTemplates');
        exit();
    }
    $user = BeanFactory::getBean('Users',$_REQUEST['template_user_id']);
    if(empty($user->id)){
        SugarApplication::appendErrorMessage($mod_strings['LBL_DASHBOARDTEMPLATES_NO_USER_ID']);
        SugarApplication::redirect('index.php?module=Administration&action=DashboardTemplates');
        exit();
    }
    $template = BeanFactory::newBean('SA_DashboardTemplates');
    $template->assigned_user_id = $user->id;
    $template->name = $_REQUEST['template_name'];

    $prefs = [];
    $prefs['dashlets'] = $user->getPreference('dashlets','Home');
    $prefs['pages'] = $user->getPreference('pages','Home');
    $template->contents = base64_encode(json_encode($prefs));

    $template->save();

    SugarApplication::redirect('index.php?module=Administration&action=DashboardTemplates');
    exit();
}

$sugar_smarty = new Sugar_Smarty();


$users = get_user_array();
$userOptions = get_select_options_with_id($users,'');
$sugar_smarty->assign('userOptions', $userOptions);

$res = $db->query("SELECT dt.id,dt.name,u.user_name,dt.date_modified FROM sa_dashboardtemplates dt LEFT JOIN users u ON (u.id = dt.assigned_user_id) WHERE dt.deleted = 0 ORDER BY dt.name");
$templates = [];
while($row = $db->fetchByAssoc($res)){
    $templates[$row['id']] = $row;
}

$sugar_smarty->assign('templates', $templates);
$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->display('custom/modules/Administration/DashboardTemplates.tpl');



