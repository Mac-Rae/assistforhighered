<?php

$hook_array['after_login'][] = [1,'SA Auditor Module After Login','modules/SA_Audits/Services/SAAuditor.php','SAAuditor','afterLogin'];
$hook_array['after_logout'][] = [1,'SA Auditor Module After Logout','modules/SA_Audits/Services/SAAuditor.php','SAAuditor','afterLogout'];

$hook_array['after_save'][] = [1,'SA Auditor Module After Logout','modules/SA_Audits/Services/SAAuditor.php','SAAuditor','afterSave'];

$hook_array['after_delete'][] = [1,'SA Auditor Module After Logout','modules/SA_Audits/Services/SAAuditor.php','SAAuditor','afterDelete'];
$hook_array['after_restore'][] = [1,'SA Auditor Module After Logout','modules/SA_Audits/Services/SAAuditor.php','SAAuditor','afterRestore'];
