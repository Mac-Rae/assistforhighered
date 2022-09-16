<?php
$dictionary['Contact']['fields']['early_alert'] = [
    'name' => 'early_alert',
    'vname' => 'LBL_EARLY_ALERT',
    'required' => false,
    'type' => 'function',
    'source' => 'non-db',
    'massupdate' => 0,
    'studio' => 'visible',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'function' =>
        array (
            'name' => 'display_early_alert',
            'returns' => 'html',
            'include' => 'custom/modules/Contacts/Services/ASSISTEarlyAlert.php',
        ),
];