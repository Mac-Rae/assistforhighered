<?php
class ASSISTCaseManagementHooks{
    public function saveRelatedKBArticles($bean){
        if(empty($_REQUEST['assist_related_kb_id'])){
            return;
        }
        if(!$bean->load_relationship('aok_knowledgebase')){
            return;
        }
        $bean->aok_knowledgebase->add($_REQUEST['assist_related_kb_id']);
    }

    public function logKBQualityChanges(SugarBean &$bean){
        global $app_list_strings, $current_user, $timedate;
        $to = $bean->quality_c;
        $from = !empty($bean->fetched_row['quality_c']) ? $bean->fetched_row['quality_c'] : '';
        if($to == $from){
            return;
        }
        $options = $app_list_strings[$bean->field_defs['quality_c']['options']];
        if(!empty($options[$from])) {
            $from = $options[$from];
        }
        if(!empty($options[$to])) {
            $to = $options[$to];
        }
        $now = $timedate->getNow(true);
        $bean->quality_user_log .= $current_user->get_summary_text() . " changed Quality from [$from] to [$to] on [".$timedate->asUser($now)." (".$now->getTimezone()->getName().")]\n";
    }
}