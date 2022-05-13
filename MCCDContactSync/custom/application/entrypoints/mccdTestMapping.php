<?php

require_once 'custom/modules/Schedulers/Services/MCCDRDSSyncService.php';
global $app_strings;

$service = new MCCDRDSSyncService();
$isHistoric = !empty($_REQUEST['type']) && $_REQUEST['type'] == "historic";
$mapping = [];
if($isHistoric) {
    $mapping = [
        $_REQUEST['table'] =>
            [
                'module' => $_REQUEST['mapping_module'],
                'last_updated_field' => $_REQUEST['historic_updated_field'],
                'id_field' => $_REQUEST['historic_id_field'],
                'mapping' => array_combine($_REQUEST['mccd_athena_athena_fields'],$_REQUEST['mccd_athena_crm_fields'])
            ]
    ];
}else{
    foreach($_REQUEST as $field => $val){
        if(substr($field,0,strlen("mapping_table_name_")) != "mapping_table_name_"){
            continue;
        }
        $index = substr($field,strlen("mapping_table_name_"));
        foreach($_REQUEST['mccd_athena_athena_fields'][$index] as $key => $athenaField) {
            if(empty($mapping[$val])){
                $mapping[$val] = [
                    'mapping' => [],
                ];
            }
            $mapping[$val]['mapping'][$athenaField] = $_REQUEST['mccd_athena_crm_fields'][$index][$key];
        }
        $mapping[$val]['module']  = $_REQUEST['mccd_athena_mapping_modules'][$index];
        $mapping[$val]['last_updated_field'] = $_REQUEST['mccd_athena_last_updated_fields'][$index];
        $mapping[$val]['id_field'] = $_REQUEST['mccd_athena_id_fields'][$index];
    }
}
$result = $service->checkMapping($mapping);
if(empty($result)){
    echo $app_strings['LBL_MCCD_RDS_SYNC_MAPPING_COMPLETE'];
    return;
}
if($result['error']){
    switch($result['error']){
        case MCCDRDSSyncService::MAPPING_NO_RESULT:
            echo $app_strings['LBL_MCCD_RDS_SYNC_MAPPING_NO_RESULT'];
            return;
        case -1:
        default:
            echo $app_strings['LBL_MCCD_RDS_SYNC_MAPPING_UNKNOWN_ERROR'];
            return;
    }
}
echo $app_strings['LBL_MCCD_RDS_SYNC_MAPPING_ISSUES_FOUND']."\n";
foreach($result as $error){
    echo "- ".$error."\n";
}
