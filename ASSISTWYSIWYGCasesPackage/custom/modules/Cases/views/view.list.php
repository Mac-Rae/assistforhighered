<?php
require_once 'modules/Cases/views/view.list.php';
class CustomCasesViewList extends CasesViewList{
    public function listViewProcess()
    {
        if(empty($_REQUEST['search_form_only'])) {
            $data = $this->getCaseData();
            $ss = new Sugar_Smarty();
            $ss->assign('case_data', $data);
            $ss->display('custom/modules/Cases/ASSIST/tpls/ListViewData.tpl');
        }
        parent::listViewProcess();
    }
    public function getCaseData(){
        global $db, $app_list_strings;
        $query = "SELECT status,COUNT(*) as c FROM cases WHERE deleted = 0 GROUP BY status";
        $res = $db->query($query);
        $ret = [];
        $caseOrder = array_values($app_list_strings['case_status_dom']);
        $caseOrder = array_flip($caseOrder);
        while($row = $db->fetchByAssoc($res)){
            $ret[$app_list_strings['case_status_dom'][$row['status']]] = $row['c'];
        }
        uksort($ret,function($a,$b) use ($caseOrder) {
            return $caseOrder[$a] - $caseOrder[$b];
        });
        return $ret;
    }


}