<?php

class MassAdvisorAssignJob implements RunnableSchedulerJob
{
    public function run($params)
    {
        $GLOBALS['log']->fatal($params);
        $arguments = json_decode(html_entity_decode($params),1);
        $GLOBALS['log']->fatal(print_r($arguments,1));
        $contactBean = BeanFactory::getBean('Contacts');
        $assignment_fields = array();
        foreach($contactBean->field_defs as $name => $def){
            if($def['type'] === 'ASSISTAssignment'){
                $assignment_fields[] = $name;
            }
        }
        $report_id = $arguments['reportid'];

        $bean = BeanFactory::GetBean('AOR_Reports',$report_id);//Load Report
        $query=$bean->build_report_query(); //Get query
        $result = $bean->db->query($query); //Execute query

        if (!$result->num_rows) {
            return true;
        }
        while ($row = $bean->db->fetchByAssoc($result)) { //Fetch data and create table
            $contact = BeanFactory::getBean('Contacts', $row['contacts_id']);
            foreach($assignment_fields as $field){
                $field_id = $field."_id";
                if($arguments[$field_id]){
                    $contact->$field_id = $arguments[$field_id];
                }
            }
            $contact->save();
        }
        return true;
    }

    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }


}
