<?php

namespace ContainerD0qllqE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnregisteredUsersServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\UnregisteredUsersService' shared autowired service.
     *
     * @return \App\Service\UnregisteredUsersService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/UnregisteredUsersService.php';

        return $container->privates['App\\Service\\UnregisteredUsersService'] = new \App\Service\UnregisteredUsersService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
