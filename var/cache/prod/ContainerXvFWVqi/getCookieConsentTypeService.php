<?php

namespace ContainerXvFWVqi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCookieConsentTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ConnectHolland\CookieConsentBundle\Form\CookieConsentType' shared autowired service.
     *
     * @return \ConnectHolland\CookieConsentBundle\Form\CookieConsentType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['ConnectHolland\\CookieConsentBundle\\Form\\CookieConsentType'] = new \ConnectHolland\CookieConsentBundle\Form\CookieConsentType(($container->privates['ConnectHolland\\CookieConsentBundle\\Cookie\\CookieChecker'] ?? $container->load('getCookieCheckerService')), $container->parameters['ch_cookie_consent.categories'], false, true);
    }
}