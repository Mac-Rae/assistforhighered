<?php
$dictionary['Case']['fields']['parent_type'] =
    array (
        'name' => 'parent_type',
        'vname' => 'LBL_PARENT_TYPE',
        'type' => 'parent_type',
        'dbType' => 'varchar',
        'required' => false,
        'group' => 'parent_name',
        'options' => 'parent_type_display_assist_cases',
        'len' => 255,
        'comment' => 'The Sugar object to which the call is related',
    );
$dictionary['Case']['fields']['parent_name'] =
    array (
        'name' => 'parent_name',
        'parent_type' => 'record_type_display',
        'type_name' => 'parent_type',
        'id_name' => 'parent_id',
        'vname' => 'LBL_LIST_RELATED_TO',
        'type' => 'parent',
        'group' => 'parent_name',
        'source' => 'non-db',
        'options' => 'parent_type_display_assist_cases',
    );
$dictionary['Case']['fields']['parent_id'] =
    array (
        'name' => 'parent_id',
        'vname' => 'LBL_LIST_RELATED_TO_ID',
        'type' => 'id',
        'group' => 'parent_name',
        'reportable' => false,
        'comment' => 'The ID of the parent object identified by parent_type',
    );
$dictionary['Case']['fields']['create_call'] =
    array (
        'name' => 'create_call',
        'vname' => 'LBL_CREATE_CALL',
        'type' => 'bool',
        'required' => false,
        'source' => 'non-db',
        'studio' => ['editview' => true],
    );