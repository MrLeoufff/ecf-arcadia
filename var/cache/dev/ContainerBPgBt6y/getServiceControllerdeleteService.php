<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2D8QxnL.App\Controller\ServiceController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2D8QxnL.App\\Controller\\ServiceController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', '.errored..service_locator.2D8QxnL.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.2D8QxnL": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'service' => 'App\\Entity\\Service',
            'em' => '?',
        ]))->withContext('App\\Controller\\ServiceController::delete()', $container);
    }
}
