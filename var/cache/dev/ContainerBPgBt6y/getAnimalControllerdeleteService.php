<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RS5b.wb.App\Controller\AnimalController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RS5b.wb.App\\Controller\\AnimalController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animal' => ['privates', '.errored..service_locator.RS5b.wb.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.RS5b.wb": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'em' => '?',
        ]))->withContext('App\\Controller\\AnimalController::delete()', $container);
    }
}
