<?php
require_once 'custom/include/Services/ASSISTAPI/SAModuleService.php';
require_once 'custom/include/Services/ASSISTAPI/SAAttributeHelper.php';

use Api\V8\BeanDecorator\BeanManager;
use Api\V8\Service\ModuleService;
use Psr\Container\ContainerInterface as Container;

return [
    ModuleService::class => function (Container $container) {
        return new SAModuleService(
            $container->get(BeanManager::class),
            $container->get(\Api\V8\JsonApi\Helper\AttributeObjectHelper::class),
            $container->get(\Api\V8\JsonApi\Helper\RelationshipObjectHelper::class),
            $container->get(\Api\V8\JsonApi\Helper\PaginationObjectHelper::class)
        );
    },
];