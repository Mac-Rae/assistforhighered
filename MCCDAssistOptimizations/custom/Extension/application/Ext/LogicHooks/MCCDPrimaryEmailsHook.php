<?php

$hook_array['after_save'][] = Array(99,
    'MCCDPrimaryEmailsHook',
    'custom/include/Services/MCCDPrimaryEmailsHook.php',
    'MCCDPrimaryEmailsHook',
    'updatePrimaryAddresses');