<?php
$dictionary['Campaign']['fields']['assist_case_name'] = array(
    'name' => 'assist_case_name',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_SUBJECT',
    'type' => 'varchar',
);
$dictionary['Campaign']['fields']['assist_case_priority'] = array(
    'name' => 'assist_case_priority',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_PRIORITY',
    'type' => 'enum',
    'options' => 'case_priority_dom',
);
$dictionary['Campaign']['fields']['assist_case_type'] = array(
    'name' => 'assist_case_type',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_TYPE',
    'type' => 'enum',
    'options' => 'case_type_dom',
);
$dictionary['Campaign']['fields']['assist_case_notify_close'] = array(
    'name' => 'assist_case_notify_close',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_NOTIFY_CLOSE',
    'type' => 'bool',
);
$dictionary['Campaign']['fields']['assist_case_notify_update'] = array(
    'name' => 'assist_case_notify_update',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_NOTIFY_UPDATE',
    'type' => 'bool',
);
$dictionary['Campaign']['fields']['assist_case_institution'] = array(
    'name' => 'assist_case_institution',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_INSTITUTION',
    'type' => 'id',
);
$dictionary['Campaign']['fields']['assist_case_assigned'] = array(
    'name' => 'assist_case_assigned',
    'vname' => 'LBL_ASSIST_CASE_DETAILS_ASSIGNED',
    'type' => 'id',
);