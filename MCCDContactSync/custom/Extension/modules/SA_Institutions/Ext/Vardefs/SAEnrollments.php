<?php

$dictionary['SA_Institutions']['fields']['sa_enrollments'] = array(
    'name' => 'sa_enrollments',
    'type' => 'link',
    'relationship' => 'SA_Institutions_SA_Enrollments',
    'source' => 'non-db',
);

$dictionary['SA_Institutions']['relationships']['SA_Institutions_SA_Enrollments'] = array(
    'lhs_module' => 'SA_Institutions',
    'lhs_table' => 'sa_institutions',
    'lhs_key' => 'id',
    'rhs_module' => 'SA_Enrollments',
    'rhs_table' => 'sa_enrollments',
    'rhs_key' => 'sa_institutions_id',
    'relationship_type' => 'one-to-many'
);