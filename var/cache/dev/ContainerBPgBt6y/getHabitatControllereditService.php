<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fLZ8.xp.App\Controller\HabitatController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fLZ8.xp.App\\Controller\\HabitatController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitat' => ['privates', '.errored..service_locator.fLZ8.xp.App\\Entity\\Habitat', NULL, 'Cannot autowire service ".service_locator.fLZ8.xp": it needs an instance of "App\\Entity\\Habitat" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'habitat' => 'App\\Entity\\Habitat',
            'em' => '?',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\HabitatController::edit()', $container);
    }
}