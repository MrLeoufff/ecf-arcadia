<?php

namespace ContainerLMQcESo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r9.abnz.App\Controller\DashboardController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r9.abnz.App\\Controller\\DashboardController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'documentManager' => ['services', 'doctrine_mongodb.odm.default_document_manager', 'getDoctrineMongodb_Odm_DefaultDocumentManagerService', true],
        ], [
            'animalRepository' => 'App\\Repository\\AnimalRepository',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
            'documentManager' => '?',
        ]))->withContext('App\\Controller\\DashboardController::index()', $container);
    }
}
