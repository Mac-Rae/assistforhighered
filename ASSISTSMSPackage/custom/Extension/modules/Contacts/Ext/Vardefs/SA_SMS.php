<?php
$dictionary['Contact']['fields']['sa_sms'] =
    [
      'name' => 'sa_sms',
      'type' => 'link',
      'relationship' => 'contacts_sa_sms',
      'source' => 'non-db',
      'vname' => 'LBL_SA_SMS',
    ];


$dictionary['Contact']['relationships']['contacts_sa_sms'] = [
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'SA_SMS',
    'rhs_table' => 'sa_sms',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts'
];

$dictionary['Contact']['fields']['threaded_sa_sms'] =
    [
        'name' => 'threaded_sa_sms',
        'type' => 'function',
        'source' => 'non-db',
        'vname' => 'LBL_SA_SMS_THREADED',
        'audited' => false,
        'reportable' => false,
        'inline_edit' => false,
        'studio' => 'visible',
        'function' =>
            array (
                'name' => 'display_threaded_sms',
                'returns' => 'html',
                'include' => 'modules/SA_SMS/UI/SA_SMSThreaded.php',
            ),
    ];
$dictionary['Contact']['fields']['sa_sms_opt_in'] = [
    'name' => 'sa_sms_opt_in',
    'vname' => 'LBL_SA_SMS_OPT_IN',
    'type' => 'enum',
    'options' => 'sa_sms_opt_in_options',
];