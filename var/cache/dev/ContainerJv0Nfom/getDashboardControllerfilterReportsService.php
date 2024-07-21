<?php

namespace ContainerJv0Nfom;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerfilterReportsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.puBiqFC.App\Controller\DashboardController::filterReports()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.puBiqFC.App\\Controller\\DashboardController::filterReports()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'veterinaryReportRepository' => ['privates', 'App\\Repository\\VeterinaryReportRepository', 'getVeterinaryReportRepositoryService', true],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', true],
        ], [
            'veterinaryReportRepository' => 'App\\Repository\\VeterinaryReportRepository',
            'logger' => '?',
        ]))->withContext('App\\Controller\\DashboardController::filterReports()', $container);
    }
}
