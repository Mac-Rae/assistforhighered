<?php
if(empty($_REQUEST['manualnotifications_notification_title'])){
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}
if(empty($_REQUEST['manualnotifications_notification_users'])){
    SugarApplication::redirect('index.php?module=Administration&action=index');
    exit();
}
$title = $_REQUEST['manualnotifications_notification_title'];
$text = '';
if(!empty($_REQUEST['manualnotifications_notification_text'])){
    $text = $_REQUEST['manualnotifications_notification_text'];
}
foreach($_REQUEST['manualnotifications_notification_users'] as $userId){
    $bean = BeanFactory::newBean('Alerts');
    $bean->name = $title;
    $bean->description = $text;
    $bean->url_redirect = "";
    $bean->target_module = "";
    $bean->is_read = 0;
    $bean->assigned_user_id = $userId;
    $bean->type = "info";
    $bean->reminder_id = "";
    $bean->save();
}
SugarApplication::redirect('index.php?module=Administration&action=index');