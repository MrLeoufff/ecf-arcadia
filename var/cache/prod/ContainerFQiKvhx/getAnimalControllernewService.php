<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllernewService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.YUSWxuz.App\Controller\AnimalController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YUSWxuz.App\\Controller\\AnimalController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'em' => '?',
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\AnimalController::new()', $container);
    }
}
