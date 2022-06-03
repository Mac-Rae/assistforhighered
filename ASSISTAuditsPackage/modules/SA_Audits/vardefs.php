<?php
$dictionary['SA_Audits'] = array(
    'table' => 'sa_audits',
    'audited' => true,
    'inline_edit' => false,
    'duplicate_merge' => true,
    'fields' => array(

        'parent_type'=>
            [
                'name'=>'parent_type',
                'vname'=>'LBL_PARENT_TYPE',
                'type' =>'enum',
                'dbType' => 'varchar',
                'group'=>'parent_name',
                'options'=> 'moduleList',
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
                'vname'=>'LBL_PARENT',
                'type'=>'parent',
                'source'=>'non-db',
                'options'=> 'record_type_display_sa_audits',
            ],




'ip_address' => array(
    'name' => 'ip_address',
    'vname' => 'LBL_IP_ADDRESS',
    'type' => 'varchar',
    'len' => 255,
    'required' => false,
    'audited' => true,
    'reportable' => true,
    'importable' => true,
    'unified_search' => true,
    'duplicate_merge' => 'true',
    'inline_edit' => true
),



'audit_action' => array(
    'name' => 'audit_action',
    'vname' => 'LBL_AUDIT_ACTION',
    'type' => 'varchar',
    'len' => 255,
    'required' => false,
    'audited' => true,
    'reportable' => true,
    'importable' => true,
    'unified_search' => true,
    'duplicate_merge' => 'true',
    'inline_edit' => true
),
        'change_log_link' => array(
            'name' => 'change_log_link',
            'vname' => 'LBL_CHANGE_LOG_LINK',
            'type' => 'function',
            'source' => 'non-db',
            'function' =>
                array(
                    'name' => array('SA_Audits','getChangeLogLink'),
                    'returns' => 'html',
                  #  'include' => 'modules/AOS_Products_Quotes/Line_Items.php'
                ),
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
VardefManager::createVardef('SA_Audits', 'SA_Audits', array(
    'basic',
    'assignable',
    'security_groups'
));
