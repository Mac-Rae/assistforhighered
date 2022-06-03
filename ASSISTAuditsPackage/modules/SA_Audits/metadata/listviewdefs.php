<?php
$module_name = 'SA_Audits';
$listViewDefs[$module_name] = array(
    'PARENT_TYPE' => array(
        'type' => 'varchar',
        'link' => true,
        'label' => 'LBL_PARENT_TYPE',
        'width' => '10%',
        'default' => true
    ),
    'PARENT_NAME' =>
        array(
            'width' => '20%',
            'label' => 'LBL_PARENT',
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
    'AUDIT_ACTION' => array(
        'type' => 'varchar',
        'label' => 'LBL_AUDIT_ACTION',
        'width' => '10%',
        'default' => true
    ),
    'IP_ADDRESS' => array(
        'type' => 'varchar',
        'label' => 'LBL_IP_ADDRESS',
        'width' => '10%',
        'default' => true
    ),
    'ASSIGNED_USER_NAME' => array(
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true
    ),
    'DATE_ENTERED' => array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true
    ),
    'CHANGE_LOG_LINK' => array(
        'type' => 'varchar',
        'label' => 'LBL_CHANGE_LOG_LINK',
        'width' => '10%',
        'default' => true
    ),
);
