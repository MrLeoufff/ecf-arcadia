<?php

namespace ContainerZIrlHxW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalFeedingControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fa3BW59.App\Controller\AnimalFeedingController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fa3BW59.App\\Controller\\AnimalFeedingController::delete()'] = ($container->privates['.service_locator.fa3BW59'] ?? $container->load('get_ServiceLocator_Fa3BW59Service'))->withContext('App\\Controller\\AnimalFeedingController::delete()', $container);
    }
}
