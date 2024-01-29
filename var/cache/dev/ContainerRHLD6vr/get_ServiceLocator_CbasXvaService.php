<?php

namespace ContainerRHLD6vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CbasXvaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cbasXva' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cbasXva'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'moduleRepository' => ['privates', 'App\\Repository\\ModuleRepository', 'getModuleRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'moduleRepository' => 'App\\Repository\\ModuleRepository',
            'paginator' => '?',
        ]);
    }
}
