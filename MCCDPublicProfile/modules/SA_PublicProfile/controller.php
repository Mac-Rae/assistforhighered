<?php
require_once 'custom/modules/Users/PublicProfile/SAPublicProfileHooks.php';
class SA_PublicProfileController extends SugarController{
    public function action_checkVanityUnique(){
        $user = $_REQUEST['user'];
        $vanity = $_REQUEST['vanity'];
        if(empty($user) || empty($vanity)){
            echo json_encode(false);
            return;
        }
        $hooks = new SAPublicProfileHooks();
        $ret = $hooks->checkVanityUnique($user,$vanity);
        echo json_encode($ret);
    }
}