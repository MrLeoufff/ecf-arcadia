<?php

namespace ContainerB97Rkue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rwIFbp8.App\Controller\AnimalController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rwIFbp8.App\\Controller\\AnimalController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
        ], [
            'animalRepository' => 'App\\Repository\\AnimalRepository',
        ]))->withContext('App\\Controller\\AnimalController::index()', $container);
    }
}
