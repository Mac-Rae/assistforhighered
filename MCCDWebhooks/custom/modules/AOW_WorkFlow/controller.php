<?php
require_once 'modules/AOW_WorkFlow/controller.php';
class CustomAOW_WorkFlowController extends AOW_WorkFlowController{
    protected function action_getEmailField()
    {
        $module = $_REQUEST['aow_module'];
        $aow_field = $_REQUEST['aow_newfieldname'];

        if (isset($_REQUEST['view'])) {
            $view = $_REQUEST['view'];
        } else {
            $view= 'EditView';
        }

        if (isset($_REQUEST['aow_value'])) {
            $value = $_REQUEST['aow_value'];
        } else {
            $value = '';
        }

        switch ($_REQUEST['aow_type']) {
            case 'Record Email':
                echo '';
                break;
            case 'Related Field':
                $rel_field_list = getRelatedEmailableFields($module);
                if($module == 'Cases'){
                    $rel_field_list['parent_name'] = translate('LBL_LIST_RELATED_TO','Cases');
                }elseif ($module == 'AOP_Case_Updates'){
                    $rel_field_list['case_contact'] = translate('LBL_CASE_RELATED_PERSON','AOP_Case_Updates');
                }
                if ($view == 'EditView') {
                    echo "<select type='text'  name='$aow_field' id='$aow_field' title='' tabindex='116'>". get_select_options_with_id($rel_field_list, $value) ."</select>";
                } else {
                    echo $rel_field_list[$value];
                }
                break;
            case 'Specify User':
                echo getModuleField('Accounts', 'assigned_user_name', $aow_field, $view, $value);
                break;
            case 'Users':
                echo getAssignField($aow_field, $view, $value);
                break;
            case 'Email Address':
            default:
                if ($view == 'EditView') {
                    echo "<input type='text' name='$aow_field' id='$aow_field' size='25' title='' tabindex='116' value='$value'>";
                } else {
                    echo $value;
                }
                break;
        }
        die;
    }
}