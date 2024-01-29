<?php

namespace ContainerD0qllqE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileUpdateServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\ProfileUpdateService' shared autowired service.
     *
     * @return \App\Service\ProfileUpdateService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ProfileUpdateService.php';

        $container->services['App\\Service\\ProfileUpdateService'] = $instance = new \App\Service\ProfileUpdateService(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['App\\Repository\\ApiTokenRepository'] ?? $container->load('getApiTokenRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Service\\ProfileUpdateService', $container));

        return $instance;
    }
}
