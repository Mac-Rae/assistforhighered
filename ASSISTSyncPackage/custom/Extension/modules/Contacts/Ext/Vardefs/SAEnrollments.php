<?php

$dictionary['Contact']['fields']['sa_enrollments'] = array(
    'name' => 'sa_enrollments',
    'type' => 'link',
    'relationship' => 'Contacts_SA_Enrollments',
    'source' => 'non-db',
    'vname' => 'LBL_SA_ENROLLMENTS'
);

$dictionary['Contact']['relationships']['Contacts_SA_Enrollments'] = array(
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'SA_Enrollments',
    'rhs_table' => 'sa_enrollments',
    'rhs_key' => 'contacts_id',
    'relationship_type' => 'one-to-many'
);