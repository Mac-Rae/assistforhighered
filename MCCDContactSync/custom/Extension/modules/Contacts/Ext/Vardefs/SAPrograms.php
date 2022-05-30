<?php

$dictionary['Contact']['fields']['sa_programs'] = array(
    'name' => 'sa_programs',
    'type' => 'link',
    'relationship' => 'Contacts_SA_Programs',
    'source' => 'non-db',
    'vname' => 'LBL_SA_PROGRAMS'
);

$dictionary['Contact']['relationships']['Contacts_SA_Programs'] = array(
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'SA_Programs',
    'rhs_table' => 'sa_programs',
    'rhs_key' => 'contacts_id',
    'relationship_type' => 'one-to-many'
);