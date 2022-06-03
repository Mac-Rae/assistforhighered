<?php
global $current_user,$app_list_strings;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}
$module = $_REQUEST['assist_module'];
$role = $_REQUEST['assist_role'];
if(empty($module) || empty($role) || empty($_REQUEST['fields_edit']) || empty($_REQUEST['fields_view'])){
    echo json_encode(["error" => "Failed to save"]);
    return;
}

foreach($_REQUEST['fields_edit'] as $key => $fieldInfo){
    $name = substr($fieldInfo['name'],0,-10);
    $viewInfo = $_REQUEST['fields_view'][$key];
    $assistFieldAccess = getBeanForASSISTFieldAccess($module,$role, $name);
    $assistFieldAccess->access_type = $fieldInfo['value'];
    $assistFieldAccess->view_type = $viewInfo['value'];
    $assistFieldAccess->save();

}
echo json_encode(["message" => "Save successful"]);

function getBeanForASSISTFieldAccess($module, $role, $field){
    $assistFieldAccess = BeanFactory::newBean("SA_FieldAccess");
    $assistFieldAccess->retrieve_by_string_fields(['access_role' => $role,'access_field' => $field, 'access_module' => $module]);
    if(!$assistFieldAccess->id){
        $assistFieldAccess->access_role = $role;
        $assistFieldAccess->access_field = $field;
        $assistFieldAccess->access_module = $module;
    }
    return $assistFieldAccess;

}