<?php
$dictionary['SA_SMS'] = array(
    'table' => 'sa_sms',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'from_number' => [
            'name' => 'from_number',
            'type' => 'varchar',
            'vname' => 'LBL_FROM_NUMBER',
        ],
        'to_number' => [
            'name' => 'to_number',
            'type' => 'varchar',
            'vname' => 'LBL_TO_NUMBER',
        ],
        'sms_type' => [
            'name' => 'sms_type',
            'type' => 'enum',
            'vname' => 'LBL_SMS_TYPE',
            'options' => 'sa_sms_sms_type_enum',
        ],
        'send_record_id' => [
            'name' => 'send_record_id',
            'type' => 'id',
            'vname' => 'LBL_SEND_RECORD',
        ],
        'send_record_type' => [
            'name' => 'send_record_type',
            'type' => 'varchar',
            'vname' => 'LBL_SEND_RECORD',
        ],
         'to_record_id' => [
            'name' => 'to_record_id',
            'type' => 'id',
            'vname' => 'LBL_TO_RECORD',
        ],
        'to_record_type' => [
            'name' => 'to_record_type',
            'type' => 'varchar',
            'vname' => 'LBL_TO_RECORD',
        ],
        'third_party' => [
            'name' => 'third_party',
            'type' => 'varchar',
            'vname' => 'LBL_THIRD_PARTY',
        ],
        'third_party_id' => [
            'name' => 'third_party_id',
            'type' => 'varchar',
            'vname' => 'LBL_THIRD_PARTY_ID',
        ],
        'status' => [
            'name' => 'status',
            'type' => 'varchar',
            'vname' => 'LBL_STATUS',
        ],
        'date_sent' => [
            'name' => 'date_sent',
            'type' => 'datetime',
            'vname' => 'LBL_DATE_SENT',
        ],
        'parent_type'=>
            [
                'name'=>'parent_type',
                'vname'=>'LBL_PARENT_TYPE',
                'type' =>'parent_type',
                'dbType' => 'varchar',
                'group'=>'parent_name',
                'options'=> 'parent_type_display',
                'len'=> '255',
            ],

        'parent_id'=>
            [
                'name'=>'parent_id',
                'vname'=>'LBL_PARENT_ID',
                'type'=>'id',
                'required'=>false,
                'reportable'=>true,
            ],
        'parent_name'=>
            [
                'name'=> 'parent_name',
                'parent_type'=>'record_type_display' ,
                'type_name'=>'parent_type',
                'id_name'=>'parent_id',
                'vname'=>'LBL_RELATED_TO',
                'type'=>'parent',
                'source'=>'non-db',
                'options'=> 'record_type_display_notes',
            ],
        'contact_name' =>
            array (
                'name' => 'contact_name',
                'rname' => 'name',
                'id_name' => 'to_record_id',
                'vname' => 'LBL_CONTACT_NAME',
                'table' => 'contacts',
                'type' => 'relate',
                'link' => 'contact',
                'join_name' => 'contacts',
                'db_concat_fields' =>
                    array (
                        0 => 'first_name',
                        1 => 'last_name',
                    ),
                'isnull' => 'true',
                'module' => 'Contacts',
                'source' => 'non-db',
            ),
    ),
    'indices' => array(
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true
);
if (! class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('SA_SMS', 'SA_SMS', array(
    'basic',
    'assignable',
    'security_groups'
));
