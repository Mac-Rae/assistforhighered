<?php
$hook_array['after_save'][] = Array(
    1,
    'ASSIST Save Related KB Articles',
    'custom/modules/Cases/Services/ASSISTCaseManagementHooks.php',
    'ASSISTCaseManagementHooks',
    'saveRelatedKBArticles');
$hook_array['after_save'][] = Array(
    1,
    'storeWYSIWYGImages',
    'custom/include/Services/WYSIWYG/WYSIWYGLogicHooks.php',
    'WYSIWYGLogicHooks',
    'storeWYSIWYGImages');
$hook_array['after_save'][] = Array(
    1,
    'Create Call',
    'custom/modules/Cases/Services/ASSISTCaseManagementHooks.php',
    'ASSISTCaseManagementHooks',
    'createCall');