<?php
// created: 2021-03-09 15:32:57
$dictionary["sa_institutions_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sa_institutions_contacts' => 
    array (
      'lhs_module' => 'SA_Institutions',
      'lhs_table' => 'sa_institutions',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_institutions_contacts_c',
      'join_key_lhs' => 'sa_institutions_contactssa_institutions_ida',
      'join_key_rhs' => 'sa_institutions_contactscontacts_idb',
    ),
  ),
  'table' => 'sa_institutions_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sa_institutions_contactssa_institutions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_institutions_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_institutions_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_institutions_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_institutions_contactssa_institutions_ida',
        1 => 'sa_institutions_contactscontacts_idb',
      ),
    ),
  ),
);