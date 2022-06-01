<?php

$hook_array['after_save'][] = Array(99,
    'ASSISTPrimaryEmailsHook',
    'custom/include/Services/ASSISTPrimaryEmailsHook.php',
    'ASSISTPrimaryEmailsHook',
    'updatePrimaryAddresses');