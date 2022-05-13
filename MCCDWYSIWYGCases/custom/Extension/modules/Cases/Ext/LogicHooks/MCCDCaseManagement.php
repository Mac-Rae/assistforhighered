<?php
$hook_array['after_save'][] = Array(
    1,
    'MCCD Save Related KB Articles',
    'custom/modules/Cases/Services/MCCDCaseManagementHooks.php',
    'MCCDCaseManagementHooks',
    'saveRelatedKBArticles');
$hook_array['after_save'][] = Array(
    1,
    'storeWYSIWYGImages',
    'custom/include/Services/WYSIWYG/WYSIWYGLogicHooks.php',
    'WYSIWYGLogicHooks',
    'storeWYSIWYGImages');