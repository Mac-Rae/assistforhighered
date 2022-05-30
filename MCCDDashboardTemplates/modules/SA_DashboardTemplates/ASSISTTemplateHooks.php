<?php
class ASSISTTemplateHooks{
    public function applyDashboardToUser(User $user, SA_DashboardTemplate $dashboard){
        $prefs = json_decode(base64_decode($dashboard->contents),1);
        $user->setPreference('dashlets',$prefs['dashlets'],0,'Home');
        $user->setPreference('pages',$prefs['pages'],0,'Home');
        $user->savePreferencesToDB();
    }

    public function setDashboards(User $user, $event, $arguments){
        global $sugar_config;
        if($arguments['module'] != 'Users'){
            return;
        }
        if($arguments['related_module'] != 'ACLRoles'){
            return;
        }
        if($arguments['relationship'] != 'acl_roles_users'){
            return;
        }
        $newDashboard = false;
        foreach($sugar_config['assist_dashboardtemplates']['target_role'] as $key => $roleId){
            if($roleId == $arguments['related_id']){
                $newDashboard = $sugar_config['assist_dashboardtemplates']['dashboard'][$key];
            }
        }
        if(empty($newDashboard)){
            return;
        }
        $dashboard = BeanFactory::getBean('SA_DashboardTemplates',$newDashboard);
        if(empty($dashboard->id)){
            return;
        }
        $this->applyDashboardToUser($user,$dashboard);

    }
}