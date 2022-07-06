<?php

require_once 'custom/include/Services/ASSISTFieldRestriction.php';

use Api\V8\Service\ModuleService;


class SAModuleService extends ModuleService
{
    protected function processAttributes(&$bean, $attributes)
    {
        $fieldRes = new ASSISTFieldRestriction();
        $fieldRes->setFieldFlags($bean);

        $createFile = false;
        foreach ($attributes as $property => $value) {
            if(!empty($bean->field_defs[$property]['assist_field_restricted']) || !empty($bean->field_defs[$property]['assist_field_hidden'])){
                continue;
            }
            if ($property === 'filecontents') {
                continue;
            } elseif ($property === 'filename') {
                $createFile = true;
                continue;
            }

            $bean->$property = $value;
        }

        return $createFile;
    }
}