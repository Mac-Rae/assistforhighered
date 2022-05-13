<?php

$dictionary['SA_Program']['fields']['emplid'] = array(
    'name' => 'emplid',
    'vname' => 'LBL_EMPLID',
    'type' => 'int',
    'len' => 10,
    'disable_num_format' => true,
    'required' => false,
    'audited' => true,
    'reportable' => true,
    'importable' => true,
    'unified_search' => false,
    'duplicate_merge' => 'true',
    'inline_edit' => true
);
$dictionary['SA_Program']['indices']['sa_program_emplid'] =
    array (
        'name' => 'sa_program_emplid',
        'type' => 'index',
        'fields' =>
            array (
                0 => 'emplid',
            ),
    );