<?php

namespace ContainerUPBZxj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PuhjwKK.App\Controller\ServiceController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PuhjwKK.App\\Controller\\ServiceController::index()'] = ($container->privates['.service_locator.PuhjwKK'] ?? $container->load('get_ServiceLocator_PuhjwKKService'))->withContext('App\\Controller\\ServiceController::index()', $container);
    }
}
