<?php


class SAMaintenance
{

    function getUserType(){
        session_start();
        if(empty($_SESSION['authenticated_user_id'])){
            return "Unauthenticated";
        }
        $user = BeanFactory::getBean('Users',$_SESSION['authenticated_user_id']);
        if(empty($user->id)){
            return "Unauthenticated";
        }
        if($user->is_admin){
            return "Admin";
        }
        return "Regular";
    }

    function checkMaintenance($event){
        global $sugar_config, $app;
        if(empty($sugar_config['maintenancemode']['enabled'])){
            return;
        }
        if(empty($sugar_config['maintenancemode']['page'])) {
            return;
        }
        if(strpos($_SERVER['SCRIPT_FILENAME'], 'Api/index.php') > 1){
            http_response_code(503);
            echo json_encode(
                [
                    'errors' => [
                        'status' => 503,
                        'title' => "Down for maintenance",
                        'detail' => "The site is currently down for maintenance"
                    ]
                ],
                JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
            );
            sugar_cleanup(true);
        }

        $userType = $this->getUserType();
        if($userType == 'Admin' || $userType == 'Unauthenticated'){
            return;
        }

        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
            echo "<script>document.location = 'index.php';</script>";
        }else{
            session_destroy();
            echo html_entity_decode($sugar_config['maintenancemode']['page']);
        }
        sugar_cleanup(true);
    }

}