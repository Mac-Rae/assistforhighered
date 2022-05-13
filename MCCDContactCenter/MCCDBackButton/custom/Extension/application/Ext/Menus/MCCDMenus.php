<?php
global $app_strings, $sugar_config;
if(empty($_REQUEST['action'])){
    return;
}
if(empty($_REQUEST['offset'])){
    return;
}
if(empty($_REQUEST['return_module'])){
    return;
}
if(empty($_REQUEST['module'])){
    return;
}
if($_REQUEST['module'] != $_REQUEST['return_module']){
    return;
}
if(!in_array($_REQUEST['action'],['DetailView','EditView'])){
    return;
}

$offset = $_REQUEST['offset'];
$offset = intval(floor($offset/$sugar_config['list_max_entries_per_page'])*$sugar_config['list_max_entries_per_page']);
$offsetString = $_REQUEST['module']."2_".strtoupper($this->bean->object_name)."_offset";
//Fix to prevent the Ajax URL conversion from messing with our link.
$sugar_config['disableAjaxUI'] = 1;
array_unshift(
    $module_menu,
    array(
        "index.php?module=".$_REQUEST['module']."&$offsetString=".$offset,
        $app_strings['LNK_RETURN_TO_LIST_VIEW'],
        "back",
        $_REQUEST['module']));