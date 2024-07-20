<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllergetAnimalsByHabitatService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AU4gJRo.App\Controller\DefaultController::getAnimalsByHabitat()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AU4gJRo.App\\Controller\\DefaultController::getAnimalsByHabitat()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitat' => ['privates', '.errored..service_locator.AU4gJRo.App\\Entity\\Habitat', NULL, 'Cannot autowire service ".service_locator.AU4gJRo": it needs an instance of "App\\Entity\\Habitat" but this type has been excluded in "config/services.yaml".'],
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
            'veterinaryReportRepository' => ['privates', 'App\\Repository\\VeterinaryReportRepository', 'getVeterinaryReportRepositoryService', true],
        ], [
            'habitat' => 'App\\Entity\\Habitat',
            'animalRepository' => 'App\\Repository\\AnimalRepository',
            'veterinaryReportRepository' => 'App\\Repository\\VeterinaryReportRepository',
        ]))->withContext('App\\Controller\\DefaultController::getAnimalsByHabitat()', $container);
    }
}
