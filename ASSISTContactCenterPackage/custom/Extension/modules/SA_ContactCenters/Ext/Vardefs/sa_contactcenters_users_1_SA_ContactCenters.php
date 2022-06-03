<?php
// created: 2021-07-01 09:32:59
$dictionary['SA_ContactCenter']['fields']['managers'] = array(
    'name' => 'managers',
    'type' => 'link',
    'relationship' => 'SA_ContactCenters_Managers',
    'source' => 'non-db',
);

$dictionary['SA_ContactCenter']['relationships']['SA_ContactCenters_Managers'] = array(
    'lhs_module' => 'SA_ContactCenters',
    'lhs_table' => 'sa_contactcenters',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'managed_sa_contactcenters_id',
    'relationship_type' => 'one-to-many'
);