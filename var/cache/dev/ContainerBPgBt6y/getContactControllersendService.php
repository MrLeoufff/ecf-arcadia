<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllersendService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yrnANkn.App\Controller\ContactController::send()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.yrnANkn'] ?? $container->load('get_ServiceLocator_YrnANknService'));

        if (isset($container->privates['.service_locator.yrnANkn.App\\Controller\\ContactController::send()'])) {
            return $container->privates['.service_locator.yrnANkn.App\\Controller\\ContactController::send()'];
        }

        return $container->privates['.service_locator.yrnANkn.App\\Controller\\ContactController::send()'] = $a->withContext('App\\Controller\\ContactController::send()', $container);
    }
}
