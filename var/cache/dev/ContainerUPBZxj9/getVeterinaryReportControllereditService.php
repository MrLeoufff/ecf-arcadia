<?php

namespace ContainerUPBZxj9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeterinaryReportControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NDecrMx.App\Controller\VeterinaryReportController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.NDecrMx'] ?? $container->load('get_ServiceLocator_NDecrMxService'));

        if (isset($container->privates['.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::edit()'])) {
            return $container->privates['.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::edit()'];
        }

        return $container->privates['.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::edit()'] = $a->withContext('App\\Controller\\VeterinaryReportController::edit()', $container);
    }
}
