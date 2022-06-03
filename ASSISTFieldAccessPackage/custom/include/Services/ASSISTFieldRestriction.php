<?php
class ASSISTFieldRestriction{

    public function checkChanges(SugarBean $bean){
        global $current_user;
        if($current_user->is_admin){
            return;
        }
        foreach($bean->field_defs as $name => $def){
            if(empty($def['assist_field_restricted']) && empty($def['assist_field_hidden'])){
                continue;
            }
            $bean->$name = $bean->fetched_row[$name];
        }
    }

    public function setFieldFlags(&$bean=null){
        global $db, $current_user,$app;
        $accessList = [];
        $viewList = [];
        if(!$bean || is_string($bean)) {
            $bean = false;
            if ($_REQUEST['module'] == 'Calendar' && $_REQUEST['action'] == 'QuickEdit') {
                $bean = BeanFactory::newBean($_REQUEST['current_module']);
            } elseif (!empty($app->controller->bean)) {
                $bean = $app->controller->bean;
            }
        }
        if(empty($bean)){
            return;
        }

        if(!$current_user->is_admin){
            $idQuoted = $db->quoted($current_user->id);
            $accessModule = $db->quoted($bean->module_dir);
            $query = <<<EOF
SELECT fa.access_type, fa.view_type, fa.access_field,fa.access_role 
FROM sa_fieldaccess fa
INNER JOIN acl_roles r ON fa.access_role = r.id AND r.deleted = 0
LEFT JOIN acl_roles_users ru ON (ru.role_id = r.id AND ru.deleted = 0 AND ru.user_id = $idQuoted)
LEFT JOIN securitygroups_acl_roles sr ON (sr.role_id = r.id AND sr.deleted = 0)
LEFT JOIN securitygroups_users su ON (sr.securitygroup_id = su.securitygroup_id AND su.deleted = 0 AND su.user_id = $idQuoted)
WHERE fa.deleted = 0 AND fa.access_module = $accessModule AND (ru.id IS NOT NULL OR su.id IS NOT NULL)
EOF;
            $ret = $db->query($query);

            while($row = $db->fetchByAssoc($ret)){
               // print_r($row);
                if(empty($accessList[$row['access_field']])){
                    $accessList[$row['access_field']] = [];
                }
                $accessList[$row['access_field']][] = $row['access_type'];

                if(empty($viewList[$row['access_field']])){
                    $viewList[$row['access_field']] = [];
                }
                $viewList[$row['access_field']][] = $row['view_type'];
            }
        }

        $isOwner = $bean->isOwner($current_user->id);
        $isGroup = SecurityGroup::groupHasAccess($bean->module_dir,$bean->id);


        foreach($bean->field_defs as $key => $def){
            $bean->field_defs[$key]['assist_field_restricted'] = true;
            if(empty($accessList[$key])){
                $bean->field_defs[$key]['assist_field_restricted'] = false;
            }else{
                $access = false;
                $accessList[$key] = array_unique($accessList[$key]);
                foreach($accessList[$key] as $accessType){
                    switch($accessType){
                        case "":
                            if(count($accessList[$key]) == 1){
                                $access = true;
                            }
                            break;
                        case "All":
                            $access = true;
                            break;
                        case "Group":
                            $access = $access || $isGroup;
                            break;
                        case "Owner":
                            $access = $access || $isOwner;
                            break;
                        case "None":
                            $access = $access || false;
                            break;

                    }
                }

                $bean->field_defs[$key]['assist_field_restricted'] = !$access;
                if(!$access && $key == 'currency_id'){
                    $bean->field_defs[$key]['function']['name'] = 'getCurrencyDropDownASSISTCustom';
                }
            }
        }

        foreach($bean->field_defs as $key => $def){
            $bean->field_defs[$key]['assist_field_hidden'] = true;
            if(empty($viewList[$key])){
                $bean->field_defs[$key]['assist_field_hidden'] = false;
            }else{
                $access = false;
                $viewList[$key] = array_unique($viewList[$key]);
                foreach($viewList[$key] as $accessType){
                    switch($accessType){
                        case "":
                            if(count($viewList[$key]) == 1){
                                $access = true;
                            }
                            break;
                        case "All":
                            $access = true;
                            break;
                        case "Group":
                            $access = $access || $isGroup;
                            break;
                        case "Owner":
                            $access = $access || $isOwner;
                            break;
                        case "None":
                            $access = $access || false;
                            break;

                    }
                }

                $bean->field_defs[$key]['assist_field_hidden'] = !$access;
                if(!$access && $key == 'currency_id'){
                    $bean->field_defs[$key]['function']['name'] = 'getCurrencyDropDownASSISTCustom';
                }
            }
        }
        //Clean up Id Fields
        foreach($bean->field_defs as $key => $def){
            if(empty($def['id_name'])){
                continue;
            }
            $bean->field_defs[$key]['assist_field_restricted'] = $bean->field_defs[$def['id_name']]['assist_field_restricted'];
            $bean->field_defs[$key]['assist_field_hidden'] = $bean->field_defs[$def['id_name']]['assist_field_hidden'];
        }
    }
}