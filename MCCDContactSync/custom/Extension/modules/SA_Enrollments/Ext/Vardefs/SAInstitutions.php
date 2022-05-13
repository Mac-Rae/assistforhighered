<?php
$dictionary['SA_Enrollment']['fields']['sa_institutions'] = array(
    'name' => 'sa_institutions',
    'vname' => 'LBL_SA_INSTITUTIONS',
    'type' => 'link',
    'relationship' => 'SA_Institutions_SA_Enrollments',
    'source' => 'non-db'
);

$dictionary['SA_Enrollment']['fields']['sa_institutions_id'] = array(
    'name' => 'sa_institutions_id',
    'vname' => 'LBL_SA_INSTITUTIONS_ID',
    'type' => 'id',
    'link' => 'sa_institutions',
    'audited' => true
);$dictionary['SA_Enrollment']['fields']['sa_institutions_name'] = array(
    'name' => 'sa_institutions_name',
    'rname' => 'name',
    'id_name' => 'sa_institutions_id',
    'vname' => 'LBL_SA_INSTITUTIONS_NAME',
    'join_name' => '',
    'type' => 'relate',
    'link' => 'sa_institutions',
    'table' => '',
    'module' => 'SA_Institutions',
    'source' => 'non-db'
);
