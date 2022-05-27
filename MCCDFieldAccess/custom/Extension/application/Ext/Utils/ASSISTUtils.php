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