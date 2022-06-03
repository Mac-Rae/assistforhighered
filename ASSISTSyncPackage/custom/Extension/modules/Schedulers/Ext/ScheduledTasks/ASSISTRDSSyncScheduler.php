<?php

$job_strings[] = 'ASSISTRDSSyncScheduler';
$job_strings[] = 'ASSISTRDSSyncHistoricScheduler';
$job_strings[] = 'ASSISTRDSSyncRemoveDeletedScheduler';

function ASSISTRDSSyncScheduler()
{
    require_once 'custom/modules/Schedulers/Services/ASSISTRDSSyncService.php';

    $service = new ASSISTRDSSyncService();

    return $service->run();
}
function ASSISTRDSSyncHistoricScheduler(){
    require_once 'custom/modules/Schedulers/Services/ASSISTRDSSyncService.php';

    $service = new ASSISTRDSSyncService();

    return $service->historicRun();
}