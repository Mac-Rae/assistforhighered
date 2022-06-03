<?php
$entry_point_registry['SA_SMSTestConnection'] = array(
    'file' => 'custom/include/Services/SA_SMS/TestConnectionEntry.php',
    'auth' => true,
);
$entry_point_registry['SA_SMSDialog'] = array(
    'file' => 'custom/include/Services/SA_SMS/SMSDialogEntry.php',
    'auth' => true,
);
$entry_point_registry['SA_SMSDialog_Send'] = array(
    'file' => 'custom/include/Services/SA_SMS/SMSDialogSendEntry.php',
    'auth' => true,
);
$entry_point_registry['SA_SMSTwilioWebHook'] = array(
    'file' => 'custom/include/Services/SA_SMS/SA_SMSTwilioWebHook.php',
    'auth' => false,
);
$entry_point_registry['SA_SMSSchedule'] = array(
    'file' => 'custom/include/Services/SA_SMS/SA_SMSSchedule.php',
    'auth' => true
);
