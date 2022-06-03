<?php

require_once 'custom/modules/Schedulers/Services/ASSISTRDSSyncService.php';
global $app_strings;

$service = new ASSISTRDSSyncService();
$isHistoric = !empty($_REQUEST['type']) && $_REQUEST['type'] == "historic";
$mapping = [];
if($isHistoric) {
    $mappingRel = [];
    foreach($_REQUEST['assist_athena_rel_fields'] as $key => $relField){
        $mappingRel[$relField] = [
            'main' => $_REQUEST['assist_athena_main_fields'][$key],
            'secondary' => $_REQUEST['assist_athena_secondary_fields'][$key],
        ];
    }
    $mapping = [
        $_REQUEST['table'] =>
            [
                'module' => $_REQUEST['mapping_module'],
                'last_updated_field' => $_REQUEST['historic_updated_field'],
                'id_field' => $_REQUEST['historic_id_field'],
                'mapping' => array_combine($_REQUEST['assist_athena_athena_fields'],$_REQUEST['assist_athena_crm_fields']),
                'mapping_rel' => $mappingRel,
            ]
    ];
}else{
    foreach($_REQUEST as $field => $val){
        if(substr($field,0,strlen("mapping_table_name_")) != "mapping_table_name_"){
            continue;
        }
        $index = substr($field,strlen("mapping_table_name_"));
        foreach($_REQUEST['assist_athena_athena_fields'][$index] as $key => $athenaField) {
            if(empty($mapping[$val])){
                $mapping[$val] = [
                    'mapping' => [],
                    'mapping_rel' => []
                ];
            }
            $mapping[$val]['mapping'][$athenaField] = $_REQUEST['assist_athena_crm_fields'][$index][$key];
        }
        foreach($_REQUEST['assist_rel_fields'][$index] as $key => $relField) {
            if(empty($mapping[$val])){
                $mapping[$val] = [
                    'mapping' => [],
                    'mapping_rel' => []
                ];
            }
            $mapping[$val]['mapping_rel'][$relField] = [
                'main' => $_REQUEST['assist_athena_main_fields'][$index][$key],
                'secondary' => $_REQUEST['assist_athena_secondary_fields'][$index][$key],
            ];
        }
        $mapping[$val]['module']  = $_REQUEST['assist_athena_mapping_modules'][$index];
        $mapping[$val]['last_updated_field'] = $_REQUEST['assist_athena_last_updated_fields'][$index];
        $mapping[$val]['id_field'] = $_REQUEST['assist_athena_id_fields'][$index];
    }
}
$result = $service->checkMapping($mapping);
if(empty($result)){
    echo $app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_COMPLETE'];
    return;
}
if($result['error']){
    switch($result['error']){
        case ASSISTRDSSyncService::MAPPING_NO_RESULT:
            echo $app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_NO_RESULT'];
            return;
        case -1:
        default:
            echo $app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_UNKNOWN_ERROR'];
            return;
    }
}
echo $app_strings['LBL_ASSIST_RDS_SYNC_MAPPING_ISSUES_FOUND']."\n";
foreach($result as $error){
    echo "- ".$error."\n";
}
