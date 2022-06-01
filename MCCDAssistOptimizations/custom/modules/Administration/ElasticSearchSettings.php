<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


require_once 'custom/modules/Administration/ASSIST/ASSISTElasticController.php';
require_once 'custom/modules/Administration/ASSIST/ASSISTElasticView.php';
global $current_user;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

$controller = new ASSISTElasticController(new ASSISTElasticView('custom/modules/Administration/ASSIST/view.tpl'));

$controller->handle();
