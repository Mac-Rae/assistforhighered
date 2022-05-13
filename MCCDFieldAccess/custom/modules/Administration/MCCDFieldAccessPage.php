<?php
global $current_user,$app_list_strings;
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}
$module = $_REQUEST['mccd_module'];
$role = $_REQUEST['mccd_role'];

$fields = [];
$bean = BeanFactory::newBean($module);
if(empty($bean)){
    sugar_die('Bad module');
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
foreach($bean->field_defs as $field => $def){
    if(in_array($field,$fieldNameBlacklist)){
        continue;
    }
    if(in_array($def['type'],$fieldTypeBlacklist)){
        continue;
    }
    if($def['type'] !== 'relate' && $def['type'] !== 'email' && $def['source'] == 'non-db'){
        continue;
    }
    if(!empty($def['id_name']) && $def['id_name'] != $field){
        continue;
    }
    if(!empty($def['link_type']) && $def['link_type'] == 'relationship_info'){
        continue;
    }
    $def['actual_label'] = translate($def['vname'],$module);
    $mccdFieldAccess = BeanFactory::newBean('SA_FieldAccess');
    $mccdFieldAccess->retrieve_by_string_fields(['access_role' => $role,'access_field' => $field, 'access_module' => $module]);
    $def['mccd_field_access_options_edit'] = get_select_options_with_id($app_list_strings['mccd_field_access_action_options'],$mccdFieldAccess->access_type);
    $def['mccd_field_access_options_view'] = get_select_options_with_id($app_list_strings['mccd_field_access_action_options'],$mccdFieldAccess->view_type);

    $fields[] = $def;
}
uasort($fields,function($a,$b){
    return strcmp($a['actual_label'],$b['actual_label']);
});
$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign('fields', $fields);
$sugar_smarty->display('custom/modules/Administration/MCCDFieldAccessPage.tpl');