<?php

namespace ContainerUHhKxEa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cr4393K.App\Controller\ScheduleController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cr4393K.App\\Controller\\ScheduleController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'scheduleRepository' => ['privates', 'App\\Repository\\ScheduleRepository', 'getScheduleRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'scheduleRepository' => 'App\\Repository\\ScheduleRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\ScheduleController::new()', $container);
    }
}
