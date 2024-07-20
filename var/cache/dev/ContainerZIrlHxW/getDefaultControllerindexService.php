<?php

namespace ContainerZIrlHxW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Gk5iHLx.App\Controller\DefaultController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Gk5iHLx.App\\Controller\\DefaultController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
            'scheduleRepository' => ['privates', 'App\\Repository\\ScheduleRepository', 'getScheduleRepositoryService', true],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
        ], [
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
            'scheduleRepository' => 'App\\Repository\\ScheduleRepository',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'em' => '?',
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
            'animalRepository' => 'App\\Repository\\AnimalRepository',
        ]))->withContext('App\\Controller\\DefaultController::index()', $container);
    }
}
