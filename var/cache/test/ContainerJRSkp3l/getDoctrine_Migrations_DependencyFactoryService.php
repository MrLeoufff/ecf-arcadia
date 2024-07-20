<?php

namespace ContainerJRSkp3l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_DependencyFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyFactory.php';

        $container->privates['doctrine.migrations.dependency_factory'] = $instance = \Doctrine\Migrations\DependencyFactory::fromEntityManager(($container->privates['doctrine.migrations.configuration_loader'] ?? $container->load('getDoctrine_Migrations_ConfigurationLoaderService')), ($container->privates['doctrine.migrations.entity_manager_registry_loader'] ?? $container->load('getDoctrine_Migrations_EntityManagerRegistryLoaderService')), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        $instance->setDefinition('Doctrine\\Migrations\\Version\\MigrationFactory', #[\Closure(name: 'doctrine.migrations.migrations_factory', class: 'Doctrine\\Migrations\\Version\\MigrationFactory')] fn () => ($container->privates['doctrine.migrations.migrations_factory'] ?? $container->load('getDoctrine_Migrations_MigrationsFactoryService')));

        return $instance;
    }
}
