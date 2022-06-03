<?php
require_once 'custom/modules/Schedulers/Services/ASSISTRDSSyncService.php';
class assistRDSSync
{
    public function run()
    {
        global $app_strings;
        $service = new ASSISTRDSSyncService();
        if(empty($_REQUEST['record'])){
            echo $app_strings['LBL_ASSIST_RDS_SYNC_NO_RECORD'];
            return;
        }
        $result = $service->syncRecord($_REQUEST['record']);
        if(!empty($result['success'])){
            echo $app_strings['LBL_ASSIST_RDS_SYNC_SUCCESS'];
            SugarApplication::appendSuccessMessage($app_strings['LBL_ASSIST_RDS_SYNC_SUCCESS']);
            return;
        }
        switch($result["error"]){
            case ASSISTRDSSyncService::RESULT_NO_EMPLID:
                echo $app_strings['LBL_ASSIST_RDS_SYNC_NO_EMPLID'];
                SugarApplication::appendErrorMessage($app_strings['LBL_ASSIST_RDS_SYNC_NO_EMPLID']);
                return;
            default:
                echo $app_strings['LBL_ASSIST_RDS_SYNC_UNKNOWN_ERROR'];
                SugarApplication::appendErrorMessage($app_strings['LBL_ASSIST_RDS_SYNC_UNKNOWN_ERROR']. " ".$result['message']);
        }
    }
}
