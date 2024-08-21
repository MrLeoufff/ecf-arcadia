<?php

namespace ContainerTeZ3ase;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllershowService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.80UTLL1.App\Controller\AnimalController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.80UTLL1.App\\Controller\\AnimalController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animal' => ['privates', '.errored..service_locator.80UTLL1.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.80UTLL1": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'documentManager' => ['services', 'doctrine_mongodb.odm.default_document_manager', 'getDoctrineMongodb_Odm_DefaultDocumentManagerService', true],
            'veterinaryReportRepository' => ['privates', 'App\\Repository\\VeterinaryReportRepository', 'getVeterinaryReportRepositoryService', true],
            'animalFeedingRepository' => ['privates', 'App\\Repository\\AnimalFeedingRepository', 'getAnimalFeedingRepositoryService', true],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'documentManager' => '?',
            'veterinaryReportRepository' => 'App\\Repository\\VeterinaryReportRepository',
            'animalFeedingRepository' => 'App\\Repository\\AnimalFeedingRepository',
        ]))->withContext('App\\Controller\\AnimalController::show()', $container);
    }
}
