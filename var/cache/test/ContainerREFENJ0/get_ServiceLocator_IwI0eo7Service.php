<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IwI0eo7Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.IwI0eo7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IwI0eo7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'review' => ['privates', '.errored..service_locator.IwI0eo7.App\\Entity\\Review', NULL, 'Cannot autowire service ".service_locator.IwI0eo7": it needs an instance of "App\\Entity\\Review" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'review' => 'App\\Entity\\Review',
            'entityManager' => '?',
        ]);
    }
}
