<?php

namespace ContainerGVltH1M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeterinaryReportControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NDecrMx.App\Controller\VeterinaryReportController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::delete()'] = ($container->privates['.service_locator.NDecrMx'] ?? $container->load('get_ServiceLocator_NDecrMxService'))->withContext('App\\Controller\\VeterinaryReportController::delete()', $container);
    }
}
