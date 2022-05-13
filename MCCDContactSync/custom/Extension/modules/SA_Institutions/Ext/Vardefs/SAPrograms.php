<?php

$dictionary['']['fields']['sa_programs'] = array(
    'name' => 'sa_programs',
    'type' => 'link',
    'relationship' => 'SA_Institutions_SA_Programs',
    'source' => 'non-db',
);

$dictionary['']['relationships']['SA_Institutions_SA_Programs'] = array(
    'lhs_module' => 'SA_Institutions',
    'lhs_table' => '',
    'lhs_key' => 'id',
    'rhs_module' => 'SA_Programs',
    'rhs_table' => 'sa_programs',
    'rhs_key' => 'sa_institutions_id',
    'relationship_type' => 'one-to-many'
);