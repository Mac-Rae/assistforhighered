<?php
global $current_user, $modInvisList, $mod_strings, $app_strings, $app_list_strings, $sugar_config, $beanList;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->allow_undefined[] = 'mccd_athena';
    unset($cfg->config['mccd_athena']['historic_field_mapping']);
    foreach($_REQUEST['mccd_athena_athena_fields'] as $key => $athenaField){
        $cfg->config['mccd_athena']['historic_field_mapping'][$athenaField] = $_REQUEST['mccd_athena_crm_fields'][$key];
    }
    $otherFields = ['historic_table','last_historic_run','last_historic_id','historic_updated_field','historic_module','historic_id_field'];
    foreach($otherFields as $field) {
        $cfg->config['mccd_athena'][$field] = $_REQUEST['mccd_athena'][$field];
    }
    $cfg->addKeyToIgnoreOverride("mccd_athena",$cfg->config['mccd_athena']);
    $cfg->handleOverride();
    $cfg->clearCache();
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}

$sugar_smarty = new Sugar_Smarty();

$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$selectedModule = !empty($sugar_config['mccd_athena']['historic_module']) ? $sugar_config['mccd_athena']['historic_module'] : "Contacts";
$syncableModuleList = [];
foreach($app_list_strings['moduleList']  as $module => $display){
    if(in_array($module,$modInvisList)){
        continue;
    }
    if(!array_key_exists($module, $beanList)){
        continue;
    }
    $syncableModuleList[$module] = $display;
}
$sugar_smarty->assign('historicModuleOptions',get_select_options_with_id($syncableModuleList,$selectedModule));

$sugar_smarty->display('custom/modules/Administration/AthenaHistoricFieldConfig.tpl');
