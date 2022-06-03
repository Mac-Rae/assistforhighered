<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

use SuiteCRM\Modules\Administration\Search\ElasticSearch\View;

global $current_user;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}
class ASSISTElasticView extends View{
    public function __construct($file)
    {
        $this->smarty = new Sugar_Smarty();
        $this->templateFile = $file;
    }
}
