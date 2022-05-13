<?php
global $current_user,$app_list_strings;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}
$module = $_REQUEST['mccd_module'];
$role = $_REQUEST['mccd_role'];
if(empty($module) || empty($role) || empty($_REQUEST['fields_edit']) || empty($_REQUEST['fields_view'])){
    echo json_encode(["error" => "Failed to save"]);
    return;
}

foreach($_REQUEST['fields_edit'] as $key => $fieldInfo){
    $name = substr($fieldInfo['name'],0,-10);
    $viewInfo = $_REQUEST['fields_view'][$key];
    $mccdFieldAccess = getBeanForMCCDFieldAccess($module,$role, $name);
    $mccdFieldAccess->access_type = $fieldInfo['value'];
    $mccdFieldAccess->view_type = $viewInfo['value'];
    $mccdFieldAccess->save();

}
echo json_encode(["message" => "Save successful"]);

function getBeanForMCCDFieldAccess($module, $role, $field){
    $mccdFieldAccess = BeanFactory::newBean("SA_FieldAccess");
    $mccdFieldAccess->retrieve_by_string_fields(['access_role' => $role,'access_field' => $field, 'access_module' => $module]);
    if(!$mccdFieldAccess->id){
        $mccdFieldAccess->access_role = $role;
        $mccdFieldAccess->access_field = $field;
        $mccdFieldAccess->access_module = $module;
    }
    return $mccdFieldAccess;

}