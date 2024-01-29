<?php

namespace ContainerD0qllqE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9UD_N6CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9UD.N6C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9UD.N6C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'subscriptionService' => ['privates', 'App\\Service\\SubscriptionService', 'getSubscriptionServiceService', true],
        ], [
            'mailer' => '?',
            'subscriptionService' => 'App\\Service\\SubscriptionService',
        ]);
    }
}
