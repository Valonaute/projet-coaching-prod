<?php

namespace ContainerXvFWVqi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCookieConsentControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'ConnectHolland\CookieConsentBundle\Controller\CookieConsentController' shared autowired service.
     *
     * @return \ConnectHolland\CookieConsentBundle\Controller\CookieConsentController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['ConnectHolland\\CookieConsentBundle\\Controller\\CookieConsentController'] = new \ConnectHolland\CookieConsentBundle\Controller\CookieConsentController(($container->privates['twig'] ?? $container->load('getTwigService')), ($container->privates['form.factory'] ?? self::getForm_FactoryService($container)), ($container->privates['ConnectHolland\\CookieConsentBundle\\Cookie\\CookieChecker'] ?? $container->load('getCookieCheckerService')), ($container->services['router'] ?? self::getRouterService($container)), 'light', 'top', ($container->services['translator'] ?? $container->load('getTranslatorService')), false, NULL);
    }
}
