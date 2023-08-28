<?php

namespace ContainerIcNnOTx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gpq0cWWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Gpq0cWW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Gpq0cWW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
        ], [
            'mailer' => '?',
            'orderRepository' => 'App\\Repository\\OrderRepository',
        ]);
    }
}
