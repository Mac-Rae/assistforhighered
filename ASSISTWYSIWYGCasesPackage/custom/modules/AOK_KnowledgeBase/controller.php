<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
class CustomAOK_KnowledgeBaseController extends SugarController{
    public function action_markReviewNeeded(){
        $this->bean->quality_c = 'review';
        $this->bean->save();
        SugarApplication::redirect('index.php?module=AOK_KnowledgeBase&action=DetailView&record='.$this->bean->id);
        sugar_die('');
    }
}