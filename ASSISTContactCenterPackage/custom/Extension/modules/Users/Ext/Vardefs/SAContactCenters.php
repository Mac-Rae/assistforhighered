<?php
$dictionary['User']['fields']['sa_contactcenters'] = array(
    'name' => 'sa_contactcenters',
    'vname' => 'LBL_SA_CONTACTCENTERS',
    'type' => 'link',
    'relationship' => 'SA_ContactCenters_Users',
    'source' => 'non-db'
);

$dictionary['User']['fields']['sa_contactcenters_id'] = array(
    'name' => 'sa_contactcenters_id',
    'vname' => 'LBL_SA_CONTACTCENTERS_ID',
    'type' => 'id',
    'link' => 'sa_contactcenters',
    'audited' => true
);$dictionary['User']['fields']['sa_contactcenters_name'] = array(
    'name' => 'sa_contactcenters_name',
    'rname' => 'name',
    'id_name' => 'sa_contactcenters_id',
    'vname' => 'LBL_SA_CONTACTCENTERS_NAME',
    'join_name' => 'sa_contactcenters',
    'type' => 'relate',
    'link' => 'sa_contactcenters',
    'table' => '',
    'module' => 'SA_ContactCenters',
    'source' => 'non-db'
);
