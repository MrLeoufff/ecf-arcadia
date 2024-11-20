<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerdeleteService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.gJtCKO8.App\Controller\AnimalController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animal' => ['privates', '.errored..service_locator.gJtCKO8.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.gJtCKO8": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\AnimalController::delete()', $container);
    }
}
