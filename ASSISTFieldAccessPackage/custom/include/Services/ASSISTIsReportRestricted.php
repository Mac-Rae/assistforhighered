<?php
require_once 'custom/include/Services/ASSISTFieldRestriction.php';
$assistClass = new ASSISTFieldRestriction();
$res = false;
if(empty($_REQUEST['bean'])){
    return $res;
}
$report = BeanFactory::getBean('AOR_Reports', $_REQUEST['bean']);
if(empty($report->id)){
    return $res;
}
$res = $assistClass->isReportRestricted($report);
echo json_encode($res);