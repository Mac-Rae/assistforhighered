<?php
require_once 'custom/modules/Schedulers/Services/MCCDRDSSyncService.php';
class mccdRDSSync
{
    public function run()
    {
        global $app_strings;
        $service = new MCCDRDSSyncService();
        if(empty($_REQUEST['record'])){
            echo $app_strings['LBL_MCCD_RDS_SYNC_NO_RECORD'];
            return;
        }
        $result = $service->syncRecord($_REQUEST['record']);
        if(!empty($result['success'])){
            echo $app_strings['LBL_MCCD_RDS_SYNC_SUCCESS'];
            SugarApplication::appendSuccessMessage($app_strings['LBL_MCCD_RDS_SYNC_SUCCESS']);
            return;
        }
        switch($result["error"]){
            case MCCDRDSSyncService::RESULT_NO_EMPLID:
                echo $app_strings['LBL_MCCD_RDS_SYNC_NO_EMPLID'];
                SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_RDS_SYNC_NO_EMPLID']);
                return;
            default:
                echo $app_strings['LBL_MCCD_RDS_SYNC_UNKNOWN_ERROR'];
                SugarApplication::appendErrorMessage($app_strings['LBL_MCCD_RDS_SYNC_UNKNOWN_ERROR']. " ".$result['message']);
        }
    }
}
