<?php
global $current_user,$app_list_strings;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}
$module = $_REQUEST['assist_module'];
$role = $_REQUEST['assist_role'];

$fields = [];
$bean = BeanFactory::newBean($module);
if(empty($bean)){
    sugar_die('Bad module');
}
$roleBean = BeanFactory::getBean('ACLRoles', $role);
if(empty($roleBean)){
    sugar_die('Bad role');
}
$fieldTypeBlacklist = [
    'link',
    'parent_type'
];
$fieldNameBlacklist = [
    'id',
    'date_entered',
    'date_modified',
    'modified_user_id',
    'created_by',
    'deleted'];
$labelMap = [];
foreach($bean->field_defs as $field => $def) {
    if($def['id_name'] && $field != $def['id_name']){
        $labelMap[$field] = $def['vname'];
        $labelMap[$def['id_name']] = $def['vname'];
    }else{
        if(empty($labelMap[$field])){
            $labelMap[$field] = $def['vname'];
        }

    }
}
foreach($bean->field_defs as $field => $def){
    if(in_array($field,$fieldNameBlacklist)){
        continue;
    }
    if(in_array($def['type'],$fieldTypeBlacklist)){
        continue;
    }
    if($def['type'] !== 'relate'
        && $def['type'] !== 'email'
        && $def['type'] !== 'function'
        && $def['source'] == 'non-db'
    ){
        continue;
    }
    if(!empty($def['id_name']) && $def['id_name'] != $field){
        continue;
    }
    if(!empty($def['link_type']) && $def['link_type'] == 'relationship_info'){
        continue;
    }
    $def['actual_label'] = translate($labelMap[$field],$module);
    $assistFieldAccess = BeanFactory::newBean('SA_FieldAccess');
    $assistFieldAccess->retrieve_by_string_fields(['access_role' => $role,'access_field' => $field, 'access_module' => $module]);
    $def['assist_field_access_options_edit'] = get_select_options_with_id($app_list_strings['assist_field_access_action_options'],$assistFieldAccess->access_type);
    $def['assist_field_access_options_view'] = get_select_options_with_id($app_list_strings['assist_field_access_action_options'],$assistFieldAccess->view_type);

    $fields[] = $def;
}
uasort($fields,function($a,$b){
    return strcmp($a['actual_label'],$b['actual_label']);
});
$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign('fields', $fields);
$sugar_smarty->display('custom/modules/Administration/ASSISTFieldAccessPage.tpl');