<?php

namespace ContainerB97Rkue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J5Di0n7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j5Di0n7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j5Di0n7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'schedule' => ['privates', '.errored..service_locator.j5Di0n7.App\\Entity\\Schedule', NULL, 'Cannot autowire service ".service_locator.j5Di0n7": it needs an instance of "App\\Entity\\Schedule" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'schedule' => 'App\\Entity\\Schedule',
            'entityManager' => '?',
        ]);
    }
}
