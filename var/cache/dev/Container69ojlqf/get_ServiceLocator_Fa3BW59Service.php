<?php

namespace Container69ojlqf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fa3BW59Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fa3BW59' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fa3BW59'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animalFeeding' => ['privates', '.errored..service_locator.fa3BW59.App\\Entity\\AnimalFeeding', NULL, 'Cannot autowire service ".service_locator.fa3BW59": it needs an instance of "App\\Entity\\AnimalFeeding" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'animalFeeding' => 'App\\Entity\\AnimalFeeding',
            'entityManager' => '?',
        ]);
    }
}
