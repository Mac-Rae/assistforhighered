<?php

$dictionary['Contact']['fields']['emplid'] = array(
    'name' => 'emplid',
    'vname' => 'LBL_EMPLID',
    'type' => 'int',
    'len' => 10,
    'disable_num_format' => true,
    'required' => false,
    'audited' => true,
    'reportable' => true,
    'importable' => true,
    'unified_search' => true,
    'duplicate_merge' => 'true',
    'inline_edit' => true
);
$dictionary['Contact']['indices']['emplid_unique'] =
    array (
        'name' => 'emplid_unique',
        'type' => 'unique',
        'fields' =>
            array (
                0 => 'emplid',
            ),
    );