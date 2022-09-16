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
$bean = BeanFactory::getBean($module);
$bean = BeanFactory::newBean($module);
if(empty($bean)){
    echo json_encode(["error" => "Failed to save"]);
    return;
}
$roleBean = BeanFactory::getBean('ACLRoles', $role);
if(empty($roleBean)){
    echo json_encode(["error" => "Failed to save"]);
    return;
}
$fileName = 'custom/modules/'.$bean->module_dir.'/metadata/SearchFields.php';
if(!file_exists($fileName)){
    copy('modules/'.$bean->module_dir.'/metadata/SearchFields.php',$fileName);
}

$contents = file_get_contents($fileName);
if(!str_contains($contents, "//ASSIST Field Restriction Check")){
    $newContents = <<<EOF

//ASSIST Field Restriction Check
require_once 'custom/include/Services/ASSISTFieldRestriction.php';
\$searchFields = ASSISTFieldRestriction::processSearchFields(\$searchFields);

EOF;
    if(substr(trim($contents), -2) === "?>"){
        $newContents = "<?php ".$newContents;
    }
    sugar_file_put_contents($fileName,$newContents,FILE_APPEND);
}

$fileName = 'custom/modules/'.$bean->module_dir.'/metadata/searchdefs.php';
if(!file_exists($fileName)){
    copy('modules/'.$bean->module_dir.'/metadata/searchdefs.php',$fileName);
}

$contents = file_get_contents($fileName);
if(!str_contains($contents, "//ASSIST Field Restriction Check")){
    $newContents = <<<EOF

//ASSIST Field Restriction Check
require_once 'custom/include/Services/ASSISTFieldRestriction.php';
\$searchdefs = ASSISTFieldRestriction::processSearchDefs(\$searchdefs);

EOF;
    if(substr(trim($contents), -2) === "?>"){
        $newContents = "<?php ".$newContents;
    }
    sugar_file_put_contents($fileName,$newContents,FILE_APPEND);
}

foreach($_REQUEST['fields_edit'] as $key => $fieldInfo){
    $name = substr($fieldInfo['name'],0,-10);
    if(empty($bean->field_defs[$name])){
        continue;
    }
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