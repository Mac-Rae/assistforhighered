<?php
$dictionary['Lead']['fields']['sa_sms'] =
    [
      'name' => 'sa_sms',
      'type' => 'link',
      'relationship' => 'leads_sa_sms',
      'source' => 'non-db',
      'vname' => 'LBL_SA_SMS_TO',
    ];


$dictionary['Lead']['relationships']['leads_sa_sms'] = [
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'SA_SMS',
    'rhs_table' => 'sa_sms',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads'
];