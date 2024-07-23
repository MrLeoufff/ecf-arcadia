<?php

namespace ContainerB97Rkue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeterinaryReportControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kZAMQN4.App\Controller\VeterinaryReportController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kZAMQN4.App\\Controller\\VeterinaryReportController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'veterinaryReportRepository' => ['privates', 'App\\Repository\\VeterinaryReportRepository', 'getVeterinaryReportRepositoryService', true],
        ], [
            'veterinaryReportRepository' => 'App\\Repository\\VeterinaryReportRepository',
        ]))->withContext('App\\Controller\\VeterinaryReportController::index()', $container);
    }
}
