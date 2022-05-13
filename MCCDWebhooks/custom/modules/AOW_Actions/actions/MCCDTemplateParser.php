<?php
require_once 'modules/AOW_Actions/actions/templateParser.php';

use SuiteCRM\Utility\SuiteValidator as SuiteValidator;

class MCCDTemplateParser extends aowTemplateParser {
    public static function parse_template($string, $bean_arr)
    {
        global $beanList;

        $person = [];

        foreach ($bean_arr as $bean_name => $bean_id) {
            $focus = BeanFactory::getBean($bean_name, $bean_id);

            if (!$focus->fetched_row) {

                // We do not want the cached version for a newly created bean, as some data such as date fields and
                // auto increment fields will only be correct after a retrieve operation
                BeanFactory::unregisterBean($bean_name, $bean_id);
                $focus = BeanFactory::getBean($bean_name, $bean_id);
            }

            $string = self::parse_template_bean($string, strtolower($beanList[$bean_name]), $focus);

            if($focus instanceof Person){
                $person[] = $focus;
            }
        }

        if (!empty($person)) {
            $focus = $person[0];
        } else {
            $focus = BeanFactory::newBean('Contacts');
        }
        $string = self::parse_template_bean($string, 'contact', $focus);

        return $string;
    }

    public function parse_template_bean($string, $key, &$focus)
    {
        global $app_strings, $sugar_config;
        $repl_arr = array();
        $isValidator = new SuiteValidator();

        foreach ($focus->field_defs as $field_def) {
            if (isset($field_def['name']) && $field_def['name'] != '') {
                $fieldName = $field_def['name'];
                if ($field_def['type'] == 'currency') {
                    $params = array(
                        'currency_symbol' => false
                    );

                    $repl_arr[$key . "_" . $fieldName] = currency_format_number(
                        $focus->{$fieldName},
                        $params
                    );
                } elseif (($field_def['type'] == 'radioenum' || $field_def['type'] == 'enum' || $field_def['type'] == 'dynamicenum') && isset($field_def['options'])) {
                    $repl_arr[$key . "_" . $fieldName] = translate(
                        $field_def['options'],
                        $focus->module_dir,
                        $focus->{$fieldName}
                    );
                } elseif ($field_def['type'] == 'multienum' && isset($field_def['options'])) {
                    $mVals = unencodeMultienum($focus->{$fieldName});
                    $translatedVals = array();

                    foreach ($mVals as $mVal) {
                        $translatedVals[] = translate($field_def['options'], $focus->module_dir, $mVal);
                    }

                    $repl_arr[$key . "_" . $fieldName] = implode(", ", $translatedVals);
                } //Fix for Windows Server as it needed to be converted to a string.
                elseif ($field_def['type'] == 'int') {
                    $repl_arr[$key . "_" . $fieldName] = (string)$focus->$fieldName;
                } elseif ($field_def['type'] == 'bool') {
                    if ($focus->{$fieldName} == "1") {
                        $repl_arr[$key . "_" . $fieldName] = "true";
                    } else {
                        $repl_arr[$key . "_" . $fieldName] = "false";
                    }
                } elseif ($field_def['type'] == 'image') {
                    $secureLink = $sugar_config['site_url'] . '/' . "public/" . $focus->id . '_' . $fieldName;
                    $file_location = $sugar_config['upload_dir'] . '/' . $focus->id . '_' . $fieldName;
                    // create a copy with correct extension by mime type
                    if (!file_exists('public')) {
                        sugar_mkdir('public', 0777);
                    }
                    if (!copy($file_location, "public/{$focus->id}".  '_' . (string)$fieldName)) {
                        $secureLink = $sugar_config['site_url'] . '/'. $file_location;
                    }

                    if (empty($focus->{$fieldName})) {
                        $repl_arr[$key . "_" . $fieldName] = "";
                    } else {
                        $link = $secureLink;
                        $repl_arr[$key . "_" . $fieldName] = '<img src="' . $link . '" width="' . $field_def['width'] . '" height="' . $field_def['height'] . '"/>';
                    }
                } elseif ($field_def['type'] == 'text') {
                    $repl_arr[$key . "_" . $fieldName] = $focus->{$fieldName};
                    if(!empty($sugar_config['mccd_email_public_field_whitelist'][$key]) && in_array($fieldName,$sugar_config['mccd_email_public_field_whitelist'][$key])){
                        $m = [];
                        //Field is sometimes double encoded - fix.
                        $repl_arr[$key . "_" . $fieldName] = html_entity_decode($repl_arr[$key . "_" . $fieldName]);
                        $repl_arr[$key . "_" . $fieldName] = html_entity_decode($repl_arr[$key . "_" . $fieldName]);
                        preg_match_all('/src="index\.php\?entryPoint=download&type=Notes&id=([\w-]*)&filename=([\w\.-]*)"/',$repl_arr[$key . "_" . $fieldName],$m,PREG_SET_ORDER);
                        foreach($m as $match){
                            $matchId = $match[1];
                            $secureLink = $sugar_config['site_url'] . '/' . "public/" . $matchId;
                            $file_location = $sugar_config['upload_dir'] . '/' . $matchId;
                            if (!file_exists('public')) {
                                sugar_mkdir('public', 0777);
                            }
                            copy($file_location, "public/".$matchId);
                            $repl_arr[$key . "_" . $fieldName] = str_replace($match[0],'src="'.$secureLink.'"',$repl_arr[$key . "_" . $fieldName]);
                        }
                        $repl_arr[$key . "_" . $fieldName] = htmlentities($repl_arr[$key . "_" . $fieldName]);
                    }
                } elseif ($field_def['type'] == 'wysiwyg') {
                    $repl_arr[$key . "_" . $field_def['name']] = html_entity_decode($focus->$field_def['name'],
                        ENT_COMPAT, 'UTF-8');
                    $repl_arr[$key . "_" . $fieldName] = html_entity_decode($focus->{$fieldName},
                        ENT_COMPAT, 'UTF-8');
                } else {
                    $repl_arr[$key . "_" . $fieldName] = $focus->{$fieldName};
                }
            }
        } // end foreach()

        krsort($repl_arr);
        reset($repl_arr);

        foreach ($repl_arr as $name => $value) {
            if (strpos($name, 'product_discount') !== false || strpos($name, 'quotes_discount') !== false) {
                if ($value !== '') {
                    if ($isValidator->isPercentageField($repl_arr['aos_products_quotes_discount'])) {
                        $sep = get_number_separators();
                        $value = rtrim(
                                rtrim(format_number($value), '0'),
                                $sep[1]
                            ) . $app_strings['LBL_PERCENTAGE_SYMBOL'];
                    }
                } else {
                    $value = '';
                }
            }

            if ($name === 'aos_products_product_image' && !empty($value)) {
                $value = '<img src="' . $value . '" class="img-responsive"/>';
            }

            if ($name === 'aos_products_quotes_product_qty') {
                $sep = get_number_separators();
                $value = rtrim(rtrim(format_number($value), '0'), $sep[1]);
            }

            if ($isValidator->isPercentageField($name)) {
                $sep = get_number_separators();
                $value = rtrim(rtrim(format_number($value), '0'), $sep[1]) . $app_strings['LBL_PERCENTAGE_SYMBOL'];
            }

            if (
                $focus->field_defs[$name]['dbType'] == 'datetime' &&
                (strpos($name, 'date') > 0 || strpos($name, 'expiration') > 0)
            ) {
                if ($value != '') {
                    $dt = explode(' ', $value);
                    $value = $dt[0];
                    if (isset($dt[1]) && $dt[1] != '') {
                        if (strpos($dt[1], 'am') > 0 || strpos($dt[1], 'pm') > 0) {
                            $value = $dt[0] . ' ' . $dt[1];
                        }
                    }
                }
            }

            if ($value != '' && is_string($value)) {
                $string = str_replace("\$$name", $value, $string);
            } else {
                if (strpos($name, 'address') > 0) {
                    $string = str_replace("\$$name<br />", '', $string);
                    $string = str_replace("\$$name <br />", '', $string);
                    $string = str_replace("\$$name", '', $string);
                } else {
                    $string = str_replace("\$$name", '&nbsp;', $string);
                }
            }
        }

        return $string;
    }
}