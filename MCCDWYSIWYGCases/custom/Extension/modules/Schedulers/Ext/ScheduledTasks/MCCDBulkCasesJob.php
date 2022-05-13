<?php
class MCCDBulkCasesJob implements RunnableSchedulerJob
{
    public function run($campaignId)
    {

        $campaign = BeanFactory::getBean('Campaigns',$campaignId);
        if(empty($campaign->id)){
            return false;
        }
        $this->processCampaign($campaign);
        return true;
    }
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }


    function createCaseForPerson(Campaign $campaign, Person $person){
        $case = BeanFactory::newBean('Cases');
        $case->retrieve_by_string_fields(
            [
                'bulk_case_campaign_id' => $campaign->id,
                'bulk_case_person_id'=> $person->id
            ]
        );
        if(!empty($case->id)){
            return;
        }
        $case = BeanFactory::newBean('Cases');
        $fieldMapping = [//Mapping of campaign field => Case Field
            'mccd_case_name' => 'name',
            'mccd_case_priority' => 'priority',
            'mccd_case_type' => 'type',
            'mccd_case_notify_close' => 'notify_on_close_c',
            'mccd_case_notify_update' => 'notify_on_update_c ',
            'mccd_case_institution' => 'institution_c',
            'mccd_case_assigned' => 'assigned_user_id',
        ];
        foreach($fieldMapping as $campaignField => $caseField){
            $case->$caseField = $campaign->$campaignField;
        }
        $case->bulk_case_campaign_id = $campaign->id;
        $case->bulk_case_person_id = $person->id;
        $case->parent_type = $person->module_name;
        $case->parent_id = $person->id;
        $case->save();
        if($person->module_name == 'Contacts'){
            $case->load_relationship("contacts");
            $case->contacts->add($person);
        }elseif($person->module_name == 'Leads'){
            $case->load_relationship("leads");
            $case->leads->add($person);
        }

    }
    function processTargetList($campaign, $targetList){
        $targetContactRels = ['contacts' => 'Contacts','leads' => 'Leads'];
        foreach($targetContactRels as $rel => $mod){
            $targetList->load_relationship($rel);
            $personIds = $targetList->$rel->get();
            foreach($personIds as $id){
                $person = BeanFactory::getBean($mod,$id);
                if(empty($person->id)){
                    continue;
                }
                $this->createCaseForPerson($campaign, $person);
            }
        }
    }
    function processCampaign($campaign){
        foreach($campaign->get_linked_beans('prospectlists') as $targetList){
            if($targetList->list_type == 'exempt'){
                continue;
            }
            $this->processTargetList($campaign, $targetList);
        }
    }
}