<?php

namespace ContainerD0qllqE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WqpXNEtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WqpXNEt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WqpXNEt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'emailVerifier' => ['services', 'App\\Security\\EmailVerifier', 'getEmailVerifierService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'emailVerifier' => 'App\\Security\\EmailVerifier',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
