<?php
$hook_array['before_save'][] = Array(
    99,
    'ASSIST Check Scheduled Report',
    'custom/include/Services/ASSISTFieldRestriction.php',
    'ASSISTFieldRestriction',
    'checkScheduledReport');