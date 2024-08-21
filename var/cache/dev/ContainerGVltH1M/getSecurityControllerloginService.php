<?php

namespace ContainerGVltH1M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerloginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PXJZ2Ro.App\Controller\SecurityController::login()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PXJZ2Ro.App\\Controller\\SecurityController::login()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'utils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'utils' => '?',
        ]))->withContext('App\\Controller\\SecurityController::login()', $container);
    }
}
