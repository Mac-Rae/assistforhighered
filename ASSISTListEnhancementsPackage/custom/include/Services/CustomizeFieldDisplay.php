<?php


class CustomizeFieldDisplay
{

    function getAction($thisModule){
        global $action, $module;
        if($module == 'Home'){
            return 'dashlets';
        }
        switch($action){
            case 'index':
                return 'list';
            case 'DetailView':
                if($module == $thisModule){
                    return 'detail';
                }
                return 'subpanel';
            default:
                return $action;
        }
    }

    function convertDate($d){
        global $timedate;
        $dateOb = $timedate->fromUser($d);
        if($dateOb) {
            return $timedate->asDb($dateOb);
        }
        return "";
    }
    function getDateCmp(SugarBean $bean, $rule){
        global $timedate;
        switch($rule['value'][0]){
            case 'today':
                $date = $timedate->getNow();
                $date->setTime(0,0,0);
                break;
            case 'now':
                $date = $timedate->getNow();
                break;
            default:
                $date = $timedate->fromUser($bean->{$rule['value'][0]});
        }
        if(empty($rule['value'][1])){
            return $timedate->asDb($date);
        }
        $interval = DateInterval::createFromDateString($rule['value'][2] . " " . $rule['value'][3]);

        switch($rule['value'][1]){
            case 'minus':
                $date->sub($interval);
                break;
            case 'plus':
                $date->add($interval);
                break;
            default:
                break;
        }
        return $timedate->asDb($date);
    }
    function matchesConditions(SugarBean $bean, $rule){
        global $timedate;
        $thisVal = $bean->{$rule['field']};
        if($bean->field_defs[$rule['field']]['type'] == 'datetime'){
           $thisVal = $this->convertDate($thisVal);
        }
        $cmpVal = "";
        switch($rule['type']){
            case 'Value':
                $cmpVal = $rule['value'];
                break;
            case 'Field':
                $cmpVal = $bean->{$rule['value']};
                if($bean->field_defs[$rule['field']]['type'] == 'datetime'){
                    $cmpVal = $this->convertDate($cmpVal);
                }
                break;
            case 'Multi':
                $cmpVal = $rule['value'];
                break;
            case 'Date':
                $cmpVal = $this->getDateCmp($bean,$rule);
                break;
        }
        switch($rule['operator']){
            case 'Contains':
                return strpos($thisVal,$cmpVal) !== false;
            case 'Equal_To':
                if(is_array($cmpVal)){
                    return in_array($thisVal,$cmpVal);
                }
                return $thisVal === $cmpVal;
            case 'Not_Equal_To':
                if(is_array($cmpVal)){
                    return !in_array($thisVal,$cmpVal);
                }
                return $thisVal !== $cmpVal;
            case 'Greater_Than':
                return $thisVal > $cmpVal;
            case 'Less_Than':
                return $thisVal < $cmpVal;
            case 'Greater_Than_or_Equal_To':
                return $thisVal >= $cmpVal;
            case 'Less_Than_or_Equal_To':
                return $thisVal <= $cmpVal;
            case 'Starts_With':
                return substr($thisVal, 0, strlen($cmpVal)) === $cmpVal;
            case 'Ends_With':
                return substr($thisVal, -strlen($cmpVal) ) === $cmpVal;
            case 'is_null':
                return empty($thisVal);

        }
        return false;
    }

    function afterUIFrame($event,$b){
        global $app;
        if(empty($app->controller)){
            return;
        }
        if($app->controller->action != "DetailView"){
            return;
        }
        $rules = $this->getMatchingRules($app->controller->bean);
        if(empty($rules)){
            return;
        }
        $script = "<script>";
        foreach($rules as $rule){
            $bgColour = $rule['bg_colour'];
            $textColour = $rule['text_colour'];
            $linkColour = $rule['link_colour'];
            $fieldName = $rule['field'];
            $script .= <<<EOF
$("[field='$fieldName']").css("background","$bgColour");
$("[field='$fieldName']").css("color","$textColour");
EOF;
        }
        $script .= "</script>";
        echo $script;
    }

    function getMatchingRules(SugarBean $bean){
        global $sugar_config;
        $rules = [];
        if(empty($sugar_config['customizefielddisplay'])){
            return $rules;
        }
        foreach($sugar_config['customizefielddisplay'] as $rule) {
            if (empty($rule['enable'])) {
                continue;
            }
            if ($rule['module'] != $bean->module_dir) {
                continue;
            }
            $action = $this->getAction($bean->module_dir);
            $enabled = $rule[$action];
            if (!$enabled) {
                continue;
            }
            if (!$this->matchesConditions($bean, $rule)) {
                continue;
            }
            $rules[] = $rule;
        }
        return $rules;
    }

    function applyRules(SugarBean $bean){
        global $app_list_strings;
        $rules = $this->getMatchingRules($bean);
        foreach($rules as $rule){
            $val = $bean->{$rule['field']};
            $defs = $bean->field_defs[$rule['field']];
            switch($defs['type']){
                case 'enum':
                    $enumVal = $app_list_strings[$defs['options']][$val];
                    if($enumVal){
                        $val = $enumVal;
                    }
                default:
                    break;
            }
            $bgColour = $rule['bg_colour'];
            $textColour = $rule['text_colour'];
            $linkColour = $rule['link_colour'];
            $bean->{$rule['field']} = "<span style='padding: 3px 15px 3px 15px; border-radius: 3px;color: $textColour; background: $bgColour;'>" . $val . "</span>";
        }
    }
    function processRecord(SugarBean $bean,$event,$arguments){
        $this->applyRules($bean);
    }

}