<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


require_once 'custom/modules/Administration/MCCD/MCCDElasticController.php';
require_once 'custom/modules/Administration/MCCD/MCCDElasticView.php';
global $current_user;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

$controller = new MCCDElasticController(new MCCDElasticView('custom/modules/Administration/MCCD/view.tpl'));

$controller->handle();
