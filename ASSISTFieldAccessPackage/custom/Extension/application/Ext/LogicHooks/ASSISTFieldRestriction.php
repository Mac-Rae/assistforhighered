<?php
$hook_array['pre_process_tasks'][] = Array(
    99,
    'ASSIST Set Field Restriction flags',
    'custom/include/Services/ASSISTFieldRestriction.php',
    'ASSISTFieldRestriction',
    'setFieldFlags');
$hook_array['pre_process_tasks'][] = Array(
    99,
    'ASSIST Set Field Restriction Mass Update',
    'custom/include/Services/ASSISTFieldRestriction.php',
    'ASSISTFieldRestriction',
    'cleanMassUpdate');
$hook_array['process_record'][] = Array(
    99,
    'ASSIST Set Field Restriction flags - Process Record',
    'custom/include/Services/ASSISTFieldRestriction.php',
    'ASSISTFieldRestriction',
    'setFieldFlags');

$hook_array['before_save'][] = Array(
    99,
    'ASSIST Check Disallowed field changes',
    'custom/include/Services/ASSISTFieldRestriction.php',
    'ASSISTFieldRestriction',
    'checkChanges');