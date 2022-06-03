<?php
function pre_install()
{
    $schedulerBean = BeanFactory::getBean('Schedulers',"a308a124-5004-83dd-6638-6274d5176468");
    if(empty($schedulerBean->id)){
        $scheduler = BeanFactory::newBean('Schedulers');
        $scheduler->new_with_id = true;
        $scheduler->id = 'a308a124-5004-83dd-6638-6274d5176468';
        $scheduler->name = 'Poll for Historic SMS';
        $scheduler->job = "function::PollHistoricSMSScheduler";
        $scheduler->job_interval = "0::*/1::*::*::*";
        $scheduler->status = "Active";
        $scheduler->catch_up = 0;
        $scheduler->save();
    }
}
