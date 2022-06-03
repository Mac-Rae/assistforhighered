<?php

$hook_array['process_record'][] =
    Array(99,
        'Process SMS Names',
        'modules/SA_SMS/LogicHooks/SA_SMSAppHooks.php',
        'SA_SMSAppHooks',
        'processNames');