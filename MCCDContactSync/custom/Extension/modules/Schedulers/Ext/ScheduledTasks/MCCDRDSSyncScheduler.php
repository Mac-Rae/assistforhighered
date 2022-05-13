<?php

$job_strings[] = 'MCCDRDSSyncScheduler';
$job_strings[] = 'MCCDRDSSyncHistoricScheduler';
$job_strings[] = 'MCCDRDSSyncRemoveDeletedScheduler';

function MCCDRDSSyncScheduler()
{
    require_once 'custom/modules/Schedulers/Services/MCCDRDSSyncService.php';

    $service = new MCCDRDSSyncService();

    return $service->run();
}
function MCCDRDSSyncHistoricScheduler(){
    require_once 'custom/modules/Schedulers/Services/MCCDRDSSyncService.php';

    $service = new MCCDRDSSyncService();

    return $service->historicRun();
}