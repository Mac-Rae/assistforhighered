<?php
// created: 2021-03-09 15:32:57
$dictionary["sa_institutions_prospects"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sa_institutions_prospects' => 
    array (
      'lhs_module' => 'SA_Institutions',
      'lhs_table' => 'sa_institutions',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_institutions_prospects_c',
      'join_key_lhs' => 'sa_institutions_prospectssa_institutions_ida',
      'join_key_rhs' => 'sa_institutions_prospectsprospects_idb',
    ),
  ),
  'table' => 'sa_institutions_prospects_c',
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
      'name' => 'sa_institutions_prospectssa_institutions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_institutions_prospectsprospects_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_institutions_prospectsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_institutions_prospects_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_institutions_prospectssa_institutions_ida',
        1 => 'sa_institutions_prospectsprospects_idb',
      ),
    ),
  ),
);