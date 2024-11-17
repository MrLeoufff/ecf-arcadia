<?php

namespace ContainerUQru4aV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NDecrMxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NDecrMx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NDecrMx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'veterinaryReport' => ['privates', '.errored..service_locator.NDecrMx.App\\Entity\\VeterinaryReport', NULL, 'Cannot autowire service ".service_locator.NDecrMx": it needs an instance of "App\\Entity\\VeterinaryReport" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'veterinaryReport' => 'App\\Entity\\VeterinaryReport',
            'entityManager' => '?',
        ]);
    }
}
