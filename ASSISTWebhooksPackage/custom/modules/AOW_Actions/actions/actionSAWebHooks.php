<?php

require_once 'modules/AOW_Actions/actions/actionBase.php';
require_once 'modules/AOW_WorkFlow/aow_utils.php';

class actionSAWebHooks extends actionBase
{

    public function __construct($id = '')
    {
        parent::__construct($id);
    }

    public function loadJS()
    {
        return array('custom/modules/AOW_Actions/actions/js/actionSAWebHook.js');
    }

    public function edit_display($line, SugarBean $bean = null, $params = array())
    {
        $sugar_smarty = new Sugar_Smarty();
        $actionModStrings = return_module_language(get_current_language(),'AOW_Actions');
        $sugar_smarty->assign("ACTIONMOD",$actionModStrings);
        $sugar_smarty->assign('line',$line);
        $sugar_smarty->assign('params',$params);
        $methods = [
            'GET' => 'GET',
            'POST' => 'POST',
            'PUT' => 'PUT',
            'PATCH' => 'PATCH',
            'DELETE' => 'DELETE'
        ];
        $sugar_smarty->assign('methodOptions',get_select_options($methods,$params['method']));
        $formats = [
            'FORM' => 'Form Fields/Query String',
            'JSON' => 'JSON'
        ];
        $sugar_smarty->assign('formatOptions',get_select_options($formats,$params['format']));
        return $sugar_smarty->display('custom/modules/AOW_Actions/actions/tpl/SAWebHooksEdit.tpl');
    }

    public function formatParameter(SugarBean $bean, $format){
        $ignoreList = [
            'relate',
            'link'
        ];
        foreach($bean->field_defs as $key => $def){
            if(array_key_exists('api-visible',$def) && empty($def['api-visible'])){
                continue;
            }
            if(!empty($def['sensitive'])){
                continue;
            }
            if(in_array($def['type'],$ignoreList)){
                continue;
            }
            $format = str_replace('{$'.$key.'}',$bean->$key,$format);

        }
        return $format;
    }

    /**
     * Return true on success otherwise false.
     *
     * @param SugarBean $bean
     * @param array $params
     * @param bool $in_save
     * @return boolean
     */
    public function run_action(SugarBean $bean, $params = array(), $in_save = false)
    {
        if(empty($params['url'])){
            $GLOBALS['log']->warning("No URL for Webhook Workflow action ".$this->id);
            return false;
        }
        $method = strtoupper(!empty($params['method']) ? $params['method'] : 'GET');
        $url = $params['url'];
        $fields = [];
        foreach($params['parameter_name'] as $key => $parameterName){
            $parameterVal = $params['parameter_val'][$key];
            switch($params['parameter_type'][$key]){
                case 'static':
                    $fields[$parameterName] = $parameterVal;
                    break;
                case 'field':
                    $fields[$parameterName] = $bean->$parameterVal;
                    break;
                case 'format':
                    $fields[$parameterName] = $this->formatParameter($bean,$parameterVal);
                    break;

            }

        }
        if($method == 'GET' && $params['format'] == 'FORM'){
            $url .= "?".http_build_query($fields);
        }
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,$method);
        $headers = [];
        foreach($params['header_name'] as $key => $headerName){
            $headerVal = $params['header_val'][$key];
            $headers[] = $headerName.": ".$headerVal;
        }

        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
        if($method != 'GET' && $params['format'] == 'FORM'){
            curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
        }elseif($params['format'] == 'JSON'){
            curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
        }
        curl_exec($ch);

       return true;
    }

}
