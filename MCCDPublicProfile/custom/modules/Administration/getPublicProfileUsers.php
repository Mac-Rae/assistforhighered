<?php
require_once 'include/MassUpdate.php';
if (!is_admin($current_user)) {
    sugar_die('Unauthorized access to Administration.');
}

if(empty($_REQUEST['data'])){
    echo json_encode([]);
    sugar_die("");
}
$ids = [];
if(!empty($_REQUEST['data']['name_to_value_array'])) {
    $ids[] = $_REQUEST['data']['name_to_value_array']['public_profile_user_id'];
}elseif(empty($_REQUEST['data']['select_entire_list'])){
    $ids = array_values($_REQUEST['data']['selection_list']);
}else{
    require_once 'include/SearchForm/SearchForm2.php';
    $userBean = BeanFactory::getBean('Users');
    $searchForm = new SearchForm($userBean,"Users");
    $query = json_decode(html_entity_decode($_REQUEST['data']['current_query_by_page']), true);
    $searchFields = getSearchFields("Users");
    $searchdefs = getSearchDefs("Users");
    $searchForm->setup($searchdefs, $searchFields, 'SearchFormGeneric.tpl');
    $searchForm->populateFromArray($query, "advanced", true);

    $where_clauses = $searchForm->generateSearchWhere(true, "Users");
    if(is_array($where_clauses)){
        $where_clauses = implode(" AND ",$where_clauses);
    }
    $query = $userBean->create_new_list_query(
        "",
        $where_clauses,
        array(),
        array('distinct' => true),
        0,
        '',
        false,
        $this,
        true,
        true
    );
    $result = $userBean->db->query($query, true);
    while($row = $userBean->db->fetchByAssoc($result)){
        $ids[] = $row['id'];
    }
}
$ret = [];
foreach($ids as $id) {
    $ret[$id] = get_user_name($id);
}
echo json_encode($ret);


function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}
function getSearchFields($module, $metafiles = array())
{
    if (file_exists('custom/modules/' . $module . '/metadata/SearchFields.php')) {
        require('custom/modules/' . $module . '/metadata/SearchFields.php');
    } elseif (!empty($metafiles[$module]['searchfields'])) {
        require($metafiles[$module]['searchfields']);
    } elseif (file_exists('modules/' . $module . '/metadata/SearchFields.php')) {
        require('modules/' . $module . '/metadata/SearchFields.php');
    }

    return isset($searchFields) ? $searchFields : array();
}
function getSearchDefs($module, $metafiles = array())
{
    if (file_exists('custom/modules/' . $module . '/metadata/searchdefs.php')) {
        require('custom/modules/' . $module . '/metadata/searchdefs.php');
    } elseif (!empty($metafiles[$module]['searchdefs'])) {
        require($metafiles[$module]['searchdefs']);
    } elseif (file_exists('modules/' . $module . '/metadata/searchdefs.php')) {
        require('modules/' . $module . '/metadata/searchdefs.php');
    }

    return isset($searchdefs) ? $searchdefs : array();
}