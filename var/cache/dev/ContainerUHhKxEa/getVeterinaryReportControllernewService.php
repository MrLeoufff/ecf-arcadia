<?php

namespace ContainerUHhKxEa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeterinaryReportControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fg2J0sb.App\Controller\VeterinaryReportController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fg2J0sb.App\\Controller\\VeterinaryReportController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'veterinaryReportRepository' => ['privates', 'App\\Repository\\VeterinaryReportRepository', 'getVeterinaryReportRepositoryService', true],
        ], [
            'entityManager' => '?',
            'veterinaryReportRepository' => 'App\\Repository\\VeterinaryReportRepository',
        ]))->withContext('App\\Controller\\VeterinaryReportController::new()', $container);
    }
}
