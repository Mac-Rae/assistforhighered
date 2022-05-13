<?php
$mccdAssignmentFields = [];
$subQueryClause = '';
$hasCstm = false;
$contactBean = BeanFactory::getBean('Contacts');

$first = true;
foreach($contactBean->field_defs as $field => $def){
    if($def['type'] != 'MCCDAssignment' || empty($def['id_name'])){
        continue;
    }
    if(!$first){
        $subQueryClause .= " OR ";
    }else{
        $first = false;
    }
    if(!empty($def['custom_module'])){
        $hasCstm = true;
        $subQueryClause .= "contacts_cstm.".$contactBean->db->quoteIdentifier($def['id_name']) . " = '{1}'";
    }else{
        $subQueryClause .= "contacts.".$contactBean->db->quoteIdentifier($def['id_name']) . " = '{1}'";
    }

}
if($hasCstm){
    $subQuery = "SELECT contacts.id FROM contacts LEFT JOIN contacts_cstm ON contacts.id = contacts_cstm.id_c WHERE contacts.deleted = 0 AND (". $subQueryClause . ")";
}else{
    $subQuery = "SELECT contacts.id FROM contacts WHERE contacts.deleted = 0 AND (". $subQueryClause . ")";
}

if(!$first) {
    $searchFields['Contacts']['my_students'] = array(
        'query_type' => 'format',
        'operator' => 'subquery',
        'checked_only' => true,
        'subquery' => $subQuery,
        'db_field' => array('id')
    );
}