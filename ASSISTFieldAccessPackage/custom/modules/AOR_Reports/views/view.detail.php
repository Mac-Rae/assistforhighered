<?php
require_once 'modules/AOR_Reports/views/view.detail.php';

class CustomAOR_ReportsViewDetail extends AOR_ReportsViewDetail{
    public function preDisplay()
    {
        $restrictionClass = new ASSISTFieldRestriction();
        if($restrictionClass->isReportRestricted($this->bean)){
            $this->ss->assign('assist_report_restricted',true);
        }
        parent::preDisplay();
    }
    public function display()
    {
        parent::display();
    }

}
