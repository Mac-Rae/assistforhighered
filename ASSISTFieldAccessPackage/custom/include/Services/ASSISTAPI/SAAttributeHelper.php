<?php
require_once 'custom/include/Services/ASSISTFieldRestriction.php';
use Api\V8\BeanDecorator\BeanManager;
use Api\V8\JsonApi\Helper as ApiHelper;
use Api\V8\JsonApi\Response\AttributeResponse;
use Psr\Container\ContainerInterface as Container;
class SAFieldAccessAttributeObjectHelper extends ApiHelper\AttributeObjectHelper{
    public function getAttributes(\SugarBean $bean, $fields = null)
    {
        $fieldRes = new ASSISTFieldRestriction();
        $fieldRes->setFieldFlags($bean);
        $disallowedFields = [];
        foreach ($bean->field_defs as $fieldName => $fieldDef){
            if(!empty($fieldDef['assist_field_hidden'])){
                $disallowedFields[] = $fieldName;
            }
        }

        $bean->fixUpFormatting();

        // using the ISO 8601 format for dates
        $attributes = array_map(function ($value) {
            return is_string($value)
                ? (\DateTime::createFromFormat('Y-m-d H:i:s', $value)
                    ? date(\DateTime::ATOM, strtotime($value))
                    : $value)
                : $value;
        }, $bean->toArray());

        $attributes = array_diff_key($attributes, array_flip($disallowedFields));

        if ($fields !== null) {
            $attributes = array_intersect_key($attributes, array_flip($fields));
        }

        unset($attributes['id']);

        return new AttributeResponse($attributes);
    }
}