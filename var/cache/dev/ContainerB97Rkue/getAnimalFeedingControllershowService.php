<?php

namespace ContainerB97Rkue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalFeedingControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i22DY2X.App\Controller\AnimalFeedingController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i22DY2X.App\\Controller\\AnimalFeedingController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animalFeeding' => ['privates', '.errored..service_locator.i22DY2X.App\\Entity\\AnimalFeeding', NULL, 'Cannot autowire service ".service_locator.i22DY2X": it needs an instance of "App\\Entity\\AnimalFeeding" but this type has been excluded in "config/services.yaml".'],
        ], [
            'animalFeeding' => 'App\\Entity\\AnimalFeeding',
        ]))->withContext('App\\Controller\\AnimalFeedingController::show()', $container);
    }
}
