<?php
$hook_array['pre_process_tasks'][] = Array(
    99,
    'MCCD Set Field Restriction flags',
    'custom/include/Services/MCCDFieldRestriction.php',
    'MCCDFieldRestriction',
    'setFieldFlags');

$hook_array['before_save'][] = Array(
    99,
    'MCCD Check Disallowed field changes',
    'custom/include/Services/MCCDFieldRestriction.php',
    'MCCDFieldRestriction',
    'checkChanges');