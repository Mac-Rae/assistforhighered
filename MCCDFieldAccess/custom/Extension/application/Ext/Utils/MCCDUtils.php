<?php

function getCurrencyDropDownMCCDCustom($focus, $field='currency_id', $value='', $view='DetailView')
{
    if($focus->field_defs[$field]['mccd_field_hidden']){
        return '';
    }
    if($focus->field_defs[$field]['mccd_field_restricted']){
        $view = 'DetailView';
    }
    return getCurrencyDropDown($focus, $field, $value, $view);
}