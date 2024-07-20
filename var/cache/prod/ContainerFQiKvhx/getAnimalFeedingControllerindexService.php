<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalFeedingControllerindexService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.qXnm2u3.App\Controller\AnimalFeedingController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qXnm2u3.App\\Controller\\AnimalFeedingController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animalFeedingRepository' => ['privates', 'App\\Repository\\AnimalFeedingRepository', 'getAnimalFeedingRepositoryService', true],
        ], [
            'animalFeedingRepository' => 'App\\Repository\\AnimalFeedingRepository',
        ]))->withContext('App\\Controller\\AnimalFeedingController::index()', $container);
    }
}
