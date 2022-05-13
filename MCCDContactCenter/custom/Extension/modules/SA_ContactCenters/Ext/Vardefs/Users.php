<?php

$dictionary['SA_ContactCenter']['fields']['users'] = array(
    'name' => 'users',
    'type' => 'link',
    'relationship' => 'SA_ContactCenters_Users',
    'source' => 'non-db',
);

$dictionary['SA_ContactCenter']['relationships']['SA_ContactCenters_Users'] = array(
    'lhs_module' => 'SA_ContactCenters',
    'lhs_table' => 'sa_contactcenters',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'sa_contactcenters_id',
    'relationship_type' => 'one-to-many'
);