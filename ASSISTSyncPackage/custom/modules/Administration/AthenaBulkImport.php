<?php
require_once 'custom/modules/Schedulers/Services/ASSISTRDSSyncService.php';
global $current_user, $sugar_config,$mod_strings,$app_strings,$app_list_strings,$db;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}
$tpl = 'custom/modules/Administration/AthenaBulkImport.tpl';
$sugar_smarty = new Sugar_Smarty();
if (isset($_REQUEST['do']) && $_REQUEST['do'] === 'upload') {
    $fileInfo = $_FILES['athenaconfig_bulk_file'];
    if($fileInfo['error']){
        SugarApplication::redirect('index.php?module=Administration&action=AthenaBulkImport&error=file');
        exit();
    }
    if($fileInfo['type'] != 'text/csv'){
        SugarApplication::redirect('index.php?module=Administration&action=AthenaBulkImport&error=fileType');
        exit();
    }


    if(!move_uploaded_file($fileInfo['tmp_name'],"upload://athenaupload/".$current_user->id.".csv")){
        SugarApplication::redirect('index.php?module=Administration&action=AthenaBulkImport&error=fileUpload');
        exit();
    }
    $fh = fopen("upload://athenaupload/".$current_user->id.".csv",'r');
    $header = fgetcsv($fh);
    fclose($fh);
    $tpl = 'custom/modules/Administration/AthenaBulkImportProcess.tpl';
    $sugar_smarty->assign('headers',$header);

    $contact = BeanFactory::getBean('Contacts');
    $fieldOptions = [];
    foreach($contact->field_defs as $def){
        $fieldOptions[$def['name']] = trim(translate($def['vname'],"Contacts"),":");
    }
    $sugar_smarty->assign('default_mapping',$sugar_config['assist_athena']['field_mapping']);
    $sugar_smarty->assign('field_options',$fieldOptions);
    $bulkTypes = get_select_options_with_id($app_list_strings['assist_rds_sync_bulk_types'],'');
    $sugar_smarty->assign('bulkTypes',$bulkTypes);
}elseif (isset($_REQUEST['do']) && $_REQUEST['do'] === 'process') {
    $service = new ASSISTRDSSyncService();
    $fh = fopen("upload://athenaupload/".$current_user->id.".csv",'r');
    $header = fgetcsv($fh);

    if(empty($_REQUEST['athenaconfig_bulk_type'])){
        SugarApplication::redirect('index.php?module=Administration&action=AthenaBulkImport&error=noType');
        exit();
    }
    $type = $_REQUEST['athenaconfig_bulk_type'];
    $mapping = array_combine($_REQUEST['mapping_from'],$_REQUEST['mapping_to']);
    $processed = 0;
    $failed = 0;
    if($type == 'clear'){
        $db->query("UPDATE contacts SET deleted = 1;");
    }elseif($type == 'addUpdateDelete'){
        $db->query("DROP TABLE IF EXISTS sale_details;");
        $db->query("CREATE TEMPORARY TABLE assist_bulk_import(emplid INT);");
    }
    $tmp = array_flip($mapping);
    $idField = $tmp['emplid'];
    while($row = fgetcsv($fh)){

        $mappedRow = [];
        foreach($row as $k => $v){
            $mappedRow[$header[$k]] = $v;
        }
        if($type == 'addUpdateDelete'){
            $db->query("INSERT INTO assist_bulk_import (emplid) VALUES (".$db->quote($mappedRow[$idField]).")");
        }

        $suc = $service->addOrUpdateContact($mappedRow,$mapping);
        if($suc){
            $processed++;
        }else{
            $failed++;
        }
    }
    if($type == 'addUpdateDelete'){
        $db->query("UPDATE contacts SET deleted = 1 WHERE emplid IS NULL OR emplid NOT IN (SELECT emplid FROM assist_bulk_import);");
        $db->query("DROP TABLE assist_bulk_import;");
    }
    SugarApplication::appendSuccessMessage(sprintf($mod_strings['LBL_ATHENACONFIG_UPLOAD_MESSAGE'],$processed,$failed));
    SugarApplication::redirect('index.php?module=Administration&action=AthenaBulkImport&success=true');
    exit();
}
switch($_REQUEST['error']){
    case 'file':
    case 'fileType':
    case 'fileUpload':
        $sugar_smarty->assign('error', $mod_strings['LBL_ATHENACONFIG_UPLOAD_ERROR']);
        break;
    case 'noType':
        $sugar_smarty->assign('error', $mod_strings['LBL_ATHENACONFIG_UPLOAD_NO_TYPE']);
        break;
}

$loadingGif = SugarThemeRegistry::current()->getImage('loading.gif');
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('JAVASCRIPT', get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->display($tpl);
