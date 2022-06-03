<?php
$hook_array['before_save'][] = array(
    99,
    'Update normalised phone',
    'custom/include/Services/SANormalisedPhoneHooks.php',
    'SANormalisedPhoneHooks',
    'updatePhone'
);