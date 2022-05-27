<?php
global $db,$current_user, $mod_strings, $app_strings, $app_list_strings,$moduleList, $modInvisList;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

$sugar_smarty = new Sugar_Smarty();

$modules = [];
$blackList = ['Home'];
foreach($moduleList as $module){
    if(in_array($module,$modInvisList)){
        continue;
    }
    if(in_array($module,$blackList)){
        continue;
    }
    $modules[$module] = $app_list_strings['moduleList'][$module];
}
$modules = ['' => ''] + SecurityGroup::getSecurityModules();
asort($modules);
$moduleOptions = get_select_options_with_id($modules,'');
$sugar_smarty->assign('moduleOptions', $moduleOptions);

$roles = ['' => ''];
$res = $db->query("SELECT id,name FROM acl_roles WHERE deleted = 0 ORDER BY name");

while($row = $db->fetchByAssoc($res)){
    $roles[$row['id']] = $row['name'];
}
$roleOptions = get_select_options_with_id($roles,'');
$sugar_smarty->assign('roleOptions', $roleOptions);



$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->display('custom/modules/Administration/ASSISTFieldAccess.tpl');
