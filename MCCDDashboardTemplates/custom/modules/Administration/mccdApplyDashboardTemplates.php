<?php
require_once 'modules/SA_DashboardTemplates/MCCDTemplateHooks.php';
global $current_user, $db;
$role = $_REQUEST['role'] ?? '';
$dashboard = $_REQUEST['dashboard'] ?? '';
if(!$current_user->is_admin){
    echo json_encode(['error' => 'Insufficient access']);
    return;
}
if(empty($role)){
    echo json_encode(['error' => 'No role defined']);
    return;
}
if(empty($dashboard)){
    echo json_encode(['error' => 'No dashboard defined']);
}
$dashboardBean = BeanFactory::getBean('SA_DashboardTemplates',$dashboard);
if(empty($dashboardBean->id)){
    echo json_encode(['error' => 'No dashboard defined']);
}
$hook = new MCCDTemplateHooks();

$roleIdQuoted = $db->quoted($role);
$query = "SELECT u.id FROM users u INNER JOIN acl_roles_users ru ON u.id = ru.user_id AND ru.deleted = 0 AND ru.role_id = $roleIdQuoted WHERE u.deleted = 0;";
$res = $db->query($query);
while($row = $db->fetchByAssoc($res)){
    $user = BeanFactory::getBean('Users',$row['id']);
    $hook->applyDashboardToUser($user,$dashboardBean);
}
echo json_encode(['success' => true]);