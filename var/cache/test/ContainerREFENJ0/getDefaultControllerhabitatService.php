<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerhabitatService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.xCAxQb_.App\Controller\DefaultController::habitat()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xCAxQb_.App\\Controller\\DefaultController::habitat()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
            'veterinaryReportRepository' => ['privates', 'App\\Repository\\VeterinaryReportRepository', 'getVeterinaryReportRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
            'animalRepository' => 'App\\Repository\\AnimalRepository',
            'veterinaryReportRepository' => 'App\\Repository\\VeterinaryReportRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\DefaultController::habitat()', $container);
    }
}
