<?php

namespace ContainerLMQcESo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j5Di0n7.App\Controller\ScheduleController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j5Di0n7.App\\Controller\\ScheduleController::delete()'] = ($container->privates['.service_locator.j5Di0n7'] ?? $container->load('get_ServiceLocator_J5Di0n7Service'))->withContext('App\\Controller\\ScheduleController::delete()', $container);
    }
}
