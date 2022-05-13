<?php
function saGetEmailAddressWidget($focus, $field, $value, $view, $tabindex = '0')
{

    if($focus->field_defs['email']['mccd_field_hidden']){
        $smarty = new Sugar_Smarty();
        $smarty->assign("vardef",'email');
        return $smarty->fetch('custom/include/SugarFields/Redacted.tpl');
    }
    $sea = new SugarEmailAddress();
    $sea->setView($view);
    if($focus->field_defs['email']['mccd_field_restricted']){
        return $sea->getEmailAddressWidgetDetailView($focus);
    }
    if ($view == 'EditView' || $view == 'QuickCreate' || $view == 'ConvertLead') {
        $module = $focus->module_dir;
        if ($view == 'ConvertLead' && $module == "Contacts") {
            $module = "Leads";
        }

        return $sea->getEmailAddressWidgetEditView($focus->id, $module, false, '', $tabindex);
    }

    return $sea->getEmailAddressWidgetDetailView($focus);
}
