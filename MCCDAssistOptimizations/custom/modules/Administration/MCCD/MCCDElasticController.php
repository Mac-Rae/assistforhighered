<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

use SuiteCRM\Modules\Administration\Search\ElasticSearch\Controller;
use SuiteCRM\Modules\Administration\Search\ElasticSearch\View;
use SuiteCRM\Search\ElasticSearch\ElasticSearchClientBuilder;
use SuiteCRM\Search\SearchWrapper;

global $current_user;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}
class MCCDElasticController extends Controller{
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    private function getElasticStats(){
        $client = ElasticSearchClientBuilder::getClient();
        try{
            $modules = SearchWrapper::getModules();
            $stats = [];
            foreach($modules as $module){
                $count = $client->count(['type' => $module]);
                if($count['count']) {
                    $stats[$module] = $count['count'];
                }
            }
            return $stats;
        }catch(Exception $ex){
            return ["Failed to connect" => "Please save valid settings"];
        }
    }

    public function display(): void
    {
        $this->view->getTemplate()->assign('elastic_stats', $this->getElasticStats());
        parent::display();
    }
}
