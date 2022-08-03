<?php

function getCurrencyDropDownASSISTCustom($focus, $field='currency_id', $value='', $view='DetailView')
{
    if($focus->field_defs[$field]['assist_field_hidden']){
        return '';
    }
    if($focus->field_defs[$field]['assist_field_restricted']){
        $view = 'DetailView';
    }
    return getCurrencyDropDown($focus, $field, $value, $view);
}
function assistRedactedField($bean,$field, $value, $view) {
    $ss = new Sugar_Smarty();
    $ss->assign('vardef', $field);
    return $ss->fetch('custom/include/SugarFields/Redacted.tpl');
}
function assistRestrictedField($bean,$field, $value, $view){
    $function = $bean->field_defs[$field]['old_function'];
    if(is_array($function)){
        $function = $function['name'];
    }
    return call_user_func($function, $bean, $field, $value, "DetailView");
}