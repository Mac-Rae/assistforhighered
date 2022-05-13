<?php
require_once 'modules/AOR_Reports/views/view.detail.php';

class CustomAOR_ReportsViewDetail extends AOR_ReportsViewDetail
{
    public function display()
    {
        $is_contact = $this->bean->report_module === 'Contacts';
        $canExport = $this->bean->ACLAccess('Export');
        $this->ss->assign('can_export', $canExport);
        $this->ss->assign('is_contact', $is_contact);
        echo $this->displayPopupHtml();
        parent::display();
    }


    public function displayPopupHtml(){
        $contactBean = BeanFactory::getBean("Contacts");
        $assignment_fields = array();
        foreach($contactBean->field_defs as $name => $def){
            if($def['type'] === 'MCCDAssignment'){
                $assignment_fields[$name] = translate($contactBean->field_defs[$name]['vname'],'Contacts');
            }
        }
        $this->ss->assign('assigment_fields', $assignment_fields);
        $this->ss->assign('reportid', $this->bean->id);
        $popupHtml = $this->ss->fetch('modules/AOR_Reports/tpls/popupAdvisors.tpl');
        return $popupHtml;
    }

}
