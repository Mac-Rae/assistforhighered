<?php
global $timedate, $moduleList, $modInvisList,$current_user, $app_list_strings, $sugar_config;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->allow_undefined[] = 'customizefielddisplay';
    $cfg->config['customizefielddisplay'] = array();
    foreach($_REQUEST['cfd_name'] as $key => $name){
        $rule = array(
            'index' => $key,
            'name' => $name,
            'module' => $_REQUEST['cfd_module'][$key],
            'field' => $_REQUEST['cfd_field'][$key],
            'enable' => $_REQUEST['cfd_enable'][$key],
            'list' => $_REQUEST['cfd_list'][$key],
            'detail' => $_REQUEST['cfd_detail'][$key],
            'subpanel' => $_REQUEST['cfd_subpanel'][$key],
            'dashlets' => $_REQUEST['cfd_dashlets'][$key],
            'bg_colour' => $_REQUEST['cfd_bg_colour'][$key],
            'text_colour' => $_REQUEST['cfd_text_colour'][$key],
            'link_colour' => $_REQUEST['cfd_link_colour'][$key],
            'operator' => $_REQUEST['cfd_operator'][$key],
            'type' => $_REQUEST['cfd_type'][$key],
            'value' => $_REQUEST['cfd_value'][$key],
        );
        $seed = BeanFactory::newBean($rule['module']);
        $def = $seed->field_defs[$rule['field']];
        if($rule['type'] == 'Value' && $def['type'] == "datetime"){
            $dateOb = $timedate->fromUser($rule['value']);
            if($dateOb){
                $rule['value'] = $timedate->asDb($dateOb);
            }
        }
        $cfg->config['customizefielddisplay'][] = $rule;
    }
    $cfg->handleOverride();
    $cfg->clearCache();
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
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
//TODO: Deletions don't work
$moduleOptions = get_select_options_with_id($modules,'');
$sugar_smarty->assign('moduleOptions', $moduleOptions);
$sugar_smarty->assign('data', $sugar_config['customizefielddisplay']);

$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->display('custom/modules/Administration/CustomizeFieldDisplay.tpl');
