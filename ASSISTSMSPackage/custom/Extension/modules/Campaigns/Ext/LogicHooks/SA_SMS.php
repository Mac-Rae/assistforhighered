<?php
$hook_array['before_save'][] =
    Array(99,
        'Update SMS Campaign Date',
        'modules/SA_SMS/LogicHooks/SA_SMSAppHooks.php',
        'SA_SMSAppHooks',
        'updateCampaignDate');