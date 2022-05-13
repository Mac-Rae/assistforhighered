<?php
require_once 'modules/ModuleBuilder/controller.php';
class CustomModuleBuilderController extends ModuleBuilderController{
    public function action_listViewSave()
    {
        parent::action_listViewSave();
        $ub = BeanFactory::getBean("Users");
        if(empty($_REQUEST['forceViewDeploy'])){
            return;
        }
        if(empty($_REQUEST['view_module'])){
            return;
        }
        $viewModule = $_REQUEST['view_module'];
        $prefKey = $viewModule.'Q';
        foreach($ub->get_full_list() as $user){
            $pref = $user->getPreference($prefKey);
            if(empty($pref['displayColumns'])){
                continue;
            }
            $pref['displayColumns'] = [];
            $user->setPreference($prefKey, $pref);
            $user->savePreferencesToDB();
        }
    }
}