<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerdeleteService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.nLtHlEw.App\Controller\UserController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nLtHlEw.App\\Controller\\UserController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.nLtHlEw.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.nLtHlEw": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'user' => 'App\\Entity\\User',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\UserController::delete()', $container);
    }
}