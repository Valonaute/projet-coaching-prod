<?php

namespace ContainerIcNnOTx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ContactController' shared autowired service.
     *
     * @return \App\Controller\ContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ContactController.php';

        $container->services['App\\Controller\\ContactController'] = $instance = new \App\Controller\ContactController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Repository\\ContactRepository'] ?? $container->load('getContactRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.Hkx_Un2'] ?? $container->load('get_ServiceLocator_HkxUn2Service'))->withContext('App\\Controller\\ContactController', $container));

        return $instance;
    }
}
