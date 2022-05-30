<?php

if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'save') {
    $cfg = new Configurator();
    $cfg->allow_undefined[] = 'assist_athena';
    unset($cfg->config['assist_athena']['field_mapping']);
    foreach($_REQUEST as $field => $val){
        if(substr($field,0,strlen("mapping_table_name_")) != "mapping_table_name_"){
            continue;
        }
        $index = substr($field,strlen("mapping_table_name_"));
        foreach($_REQUEST['assist_athena_athena_fields'][$index] as $key => $athenaField) {
            $cfg->config['assist_athena']['field_mapping'][$val]['mapping'][$athenaField] = $_REQUEST['assist_athena_crm_fields'][$index][$key];
        }
        foreach($_REQUEST['assist_rel_fields'][$index] as $key => $relField) {
            $cfg->config['assist_athena']['field_mapping'][$val]['mapping_rel'][$relField] =
                [
                    'main' => $_REQUEST['assist_athena_main_fields'][$index][$key],
                    'secondary' => $_REQUEST['assist_athena_secondary_fields'][$index][$key],
                ];
        }
        if(!empty($_REQUEST['mapping_module_'.$index])) {
            $cfg->config['assist_athena']['field_mapping'][$val]['module'] = $_REQUEST['mapping_module_'.$index];
        }
        if(!empty($_REQUEST['mapping_last_updated_field_'.$index])) {
            $cfg->config['assist_athena']['field_mapping'][$val]['last_updated_field'] = $_REQUEST['mapping_last_updated_field_'.$index];
        }
        if(!empty($_REQUEST['mapping_id_field_'.$index])) {
            $cfg->config['assist_athena']['field_mapping'][$val]['id_field'] = $_REQUEST['mapping_id_field_'.$index];
        }

        if(isset($_REQUEST['assist_athena']['last_id'][$index])){
            $cfg->config['assist_athena']['last_run_info'][$val]['last_run_id'] = $_REQUEST['assist_athena']['last_id'][$index];
        }
        if(isset($_REQUEST['assist_athena']['last_run'][$index])){
            $cfg->config['assist_athena']['last_run_info'][$val]['last_run'] = $_REQUEST['assist_athena']['last_run'][$index];
        }

    }
    $cfg->addKeyToIgnoreOverride("assist_athena",$cfg->config['assist_athena']);
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
$sugar_smarty->assign('moduleOptions',get_select_options_with_id($syncableModuleList,"Contacts"));
$sugar_smarty->display('custom/modules/Administration/AthenaFieldConfig.tpl');
