<?php

namespace ContainerRHLD6vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubscriptionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SubscriptionController' shared autowired service.
     *
     * @return \App\Controller\SubscriptionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SubscriptionController.php';

        $container->services['App\\Controller\\SubscriptionController'] = $instance = new \App\Controller\SubscriptionController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\SubscriptionController', $container));

        return $instance;
    }
}
