<?php
$dictionary['User']['fields']['managed_sa_contactcenters'] = array(
    'name' => 'managed_sa_contactcenters',
    'vname' => 'LBL_MANAGED_SA_CONTACTCENTERS',
    'type' => 'link',
    'relationship' => 'managed_SA_ContactCenters_Users',
    'source' => 'non-db'
);

$dictionary['User']['fields']['managed_sa_contactcenters_id'] = array(
    'name' => 'managed_sa_contactcenters_id',
    'vname' => 'LBL_MANAGED_SA_CONTACTCENTERS_ID',
    'type' => 'id',
    'link' => 'managed_sa_contactcenters',
    'audited' => true
);

$dictionary['User']['fields']['managed_sa_contactcenters_name'] = array(
    'name' => 'managed_sa_contactcenters_name',
    'rname' => 'name',
    'id_name' => 'managed_sa_contactcenters_id',
    'vname' => 'LBL_MANAGED_SA_CONTACTCENTERS_NAME',
    'join_name' => '',
    'type' => 'relate',
    'link' => 'managed_sa_contactcenters',
    'table' => '',
    'module' => 'SA_ContactCenters',
    'source' => 'non-db'
);
