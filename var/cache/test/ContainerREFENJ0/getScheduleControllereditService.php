<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleControllereditService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.j5Di0n7.App\Controller\ScheduleController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.j5Di0n7'] ?? $container->load('get_ServiceLocator_J5Di0n7Service'));

        if (isset($container->privates['.service_locator.j5Di0n7.App\\Controller\\ScheduleController::edit()'])) {
            return $container->privates['.service_locator.j5Di0n7.App\\Controller\\ScheduleController::edit()'];
        }

        return $container->privates['.service_locator.j5Di0n7.App\\Controller\\ScheduleController::edit()'] = $a->withContext('App\\Controller\\ScheduleController::edit()', $container);
    }
}
