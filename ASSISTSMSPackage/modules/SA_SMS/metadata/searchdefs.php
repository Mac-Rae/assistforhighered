<?php
$module_name = 'SA_SMS';
$searchdefs [$module_name] =
    array (
        'layout' =>
            array (
                'basic_search' =>
                    array (
                        'parent_name' =>
                            array (
                                'type' => 'parent',
                                'label' => 'LBL_RELATED_TO',
                                'link' => true,
                                'sortable' => false,
                                'ACLTag' => 'PARENT',
                                'dynamic_module' => 'PARENT_TYPE',
                                'id' => 'PARENT_ID',
                                'related_fields' =>
                                    array (
                                        0 => 'parent_id',
                                        1 => 'parent_type',
                                    ),
                                'width' => '10%',
                                'default' => true,
                                'name' => 'parent_name',
                            ),
                        'date_sent' =>
                            array (
                                'type' => 'datetime',
                                'label' => 'LBL_DATE_SENT',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'date_sent',
                            ),
                        'to_number' =>
                            array (
                                'type' => 'varchar',
                                'label' => 'LBL_TO_NUMBER',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'to_number',
                            ),
                        'from_number' =>
                            array (
                                'type' => 'varchar',
                                'label' => 'LBL_FROM_NUMBER',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'from_number',
                            ),
                        'favorites_only' =>
                            array (
                                'name' => 'favorites_only',
                                'label' => 'LBL_FAVORITES_FILTER',
                                'type' => 'bool',
                                'default' => true,
                                'width' => '10%',
                            ),
                    ),
                'advanced_search' =>
                    array (
                        'parent_name' =>
                            array (
                                'type' => 'parent',
                                'label' => 'LBL_RELATED_TO',
                                'link' => true,
                                'sortable' => false,
                                'related_fields' =>
                                    array (
                                        0 => 'parent_id',
                                        1 => 'parent_type',
                                    ),
                                'width' => '10%',
                                'default' => true,
                                'ACLTag' => 'PARENT',
                                'dynamic_module' => 'PARENT_TYPE',
                                'id' => 'PARENT_ID',
                                'name' => 'parent_name',
                            ),
                        'date_sent' =>
                            array (
                                'type' => 'datetime',
                                'label' => 'LBL_DATE_SENT',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'date_sent',
                            ),
                        'to_number' =>
                            array (
                                'type' => 'varchar',
                                'label' => 'LBL_TO_NUMBER',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'to_number',
                            ),
                        'from_number' =>
                            array (
                                'type' => 'varchar',
                                'label' => 'LBL_FROM_NUMBER',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'from_number',
                            ),
                        'sms_type' =>
                            array (
                                'type' => 'enum',
                                'label' => 'LBL_SMS_TYPE',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'sms_type',
                            ),
                        'status' =>
                            array (
                                'type' => 'varchar',
                                'label' => 'LBL_STATUS',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'status',
                            ),
                        'favorites_only' =>
                            array (
                                'name' => 'favorites_only',
                                'label' => 'LBL_FAVORITES_FILTER',
                                'type' => 'bool',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'date_entered' =>
                            array (
                                'type' => 'datetime',
                                'label' => 'LBL_DATE_ENTERED',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'date_entered',
                            ),
                        'date_modified' =>
                            array (
                                'type' => 'datetime',
                                'label' => 'LBL_DATE_MODIFIED',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'date_modified',
                            ),
                        'modified_user_id' =>
                            array (
                                'type' => 'assigned_user_name',
                                'label' => 'LBL_MODIFIED',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'modified_user_id',
                            ),
                        'created_by' =>
                            array (
                                'type' => 'assigned_user_name',
                                'label' => 'LBL_CREATED',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'created_by',
                            ),
                        'assigned_user_id' =>
                            array (
                                'name' => 'assigned_user_id',
                                'label' => 'LBL_ASSIGNED_TO',
                                'type' => 'enum',
                                'function' =>
                                    array (
                                        'name' => 'get_user_array',
                                        'params' =>
                                            array (
                                                0 => false,
                                            ),
                                    ),
                                'default' => true,
                                'width' => '10%',
                            ),
                        'current_user_only' =>
                            array (
                                'label' => 'LBL_CURRENT_USER_FILTER',
                                'type' => 'bool',
                                'default' => true,
                                'width' => '10%',
                                'name' => 'current_user_only',
                            ),
                    ),
            ),
        'templateMeta' =>
            array (
                'maxColumns' => '3',
                'maxColumnsBasic' => '4',
                'widths' =>
                    array (
                        'label' => '10',
                        'field' => '30',
                    ),
            ),
    );
;
?>
