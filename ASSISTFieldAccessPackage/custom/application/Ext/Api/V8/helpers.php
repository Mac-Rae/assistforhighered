<?php
require_once 'custom/include/Services/ASSISTAPI/SAAttributeHelper.php';

use Api\V8\BeanDecorator\BeanManager;
use Api\V8\JsonApi\Helper as ApiHelper;
use Psr\Container\ContainerInterface as Container;
return [
    ApiHelper\AttributeObjectHelper::class => function (Container $container) {
        return new SAFieldAccessAttributeObjectHelper(
            $container->get(BeanManager::class)
        );
    },
];