<?php
class MCCDAssignmentLogicHooks{
    function loadAssignmentFields(SugarBean $bean, $event, $args){
        foreach ($bean->field_defs as $field) {
            if($field['type'] != 'MCCDAssignment' || empty($field['module'])){
                continue;
            }
            $name = $field['name'];
            if (!empty($bean->$name)) {
                continue;
            }
            $related_module = $field['module'];
            $id_name = $field['id_name'];
            if (empty($bean->$id_name)) {
                $bean->fill_in_link_field($id_name, $field);
            }
            if (!empty($bean->$id_name) &&
                ($bean->object_name != $related_module ||
                    ($bean->object_name == $related_module && $bean->$id_name != $bean->id))
            ) {
                if (!empty($bean->$id_name) && isset($bean->$name)) {
                    $mod = BeanFactory::getBean($related_module, $bean->$id_name);
                    if ($mod) {
                        if (!empty($field['rname'])) {
                            $rname = $field['rname'];
                            $bean->$name = $mod->$rname;
                        } else {
                            if (isset($mod->name)) {
                                $bean->$name = $mod->name;
                            }
                        }
                        // The related bean is incomplete due to $fill_in_rel_depth, we don't want to cache it
                        BeanFactory::unregisterBean($related_module, $bean->$id_name);
                    }
                }
            }
            if (!empty($bean->$id_name) && isset($bean->$name)) {
                if (!isset($field['additionalFields'])) {
                    $field['additionalFields'] = array();
                }
                if (!empty($field['rname'])) {
                    $field['additionalFields'][$field['rname']] = $name;
                } else {
                    $field['additionalFields']['name'] = $name;
                }
                $bean->getRelatedFields($related_module, $bean->$id_name, $field['additionalFields']);
            }
        }
    }
}