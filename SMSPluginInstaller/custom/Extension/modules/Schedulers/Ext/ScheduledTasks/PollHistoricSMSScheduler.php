<?php

$job_strings[] = 'PollHistoricSMSScheduler';

function PollHistoricSMSScheduler()
{
    require_once 'custom/include/Services/SA_SMS/PollHistoricSMSService.php';

    $service = new PollHistoricSMSService();

    return $service->run();
}
