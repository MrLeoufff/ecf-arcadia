<?php

namespace ContainerUHhKxEa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jHQbBaS.App\Controller\ScheduleController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jHQbBaS.App\\Controller\\ScheduleController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'scheduleRepository' => ['privates', 'App\\Repository\\ScheduleRepository', 'getScheduleRepositoryService', true],
        ], [
            'scheduleRepository' => 'App\\Repository\\ScheduleRepository',
        ]))->withContext('App\\Controller\\ScheduleController::index()', $container);
    }
}
