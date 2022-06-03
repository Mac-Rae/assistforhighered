<?php
$module_name = 'SA_SMS';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'PARENT_NAME' =>
  array(
    'width' => '20%',
    'label' => 'LBL_LIST_RELATED_TO',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'link' => true,
    'default' => true,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'related_fields' =>
        array(
            0 => 'parent_id',
            1 => 'parent_type',
        ),
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'SMS_TYPE' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SMS_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_SENT' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_SENT',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
