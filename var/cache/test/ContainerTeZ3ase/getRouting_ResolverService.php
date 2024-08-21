<?php

namespace ContainerTeZ3ase;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_ResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'AttributeClassLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'AttributeRouteControllerLoader.php';

        $container->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($container->privates['routing.loader.xml'] ?? $container->load('getRouting_Loader_XmlService')));
        $instance->addLoader(($container->privates['routing.loader.yml'] ?? $container->load('getRouting_Loader_YmlService')));
        $instance->addLoader(($container->privates['routing.loader.php'] ?? $container->load('getRouting_Loader_PhpService')));
        $instance->addLoader(($container->privates['routing.loader.glob'] ?? $container->load('getRouting_Loader_GlobService')));
        $instance->addLoader(($container->privates['routing.loader.directory'] ?? $container->load('getRouting_Loader_DirectoryService')));
        $instance->addLoader(($container->privates['routing.loader.container'] ?? $container->load('getRouting_Loader_ContainerService')));
        $instance->addLoader(($container->privates['routing.loader.attribute'] ??= new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('test')));
        $instance->addLoader(($container->privates['routing.loader.attribute.directory'] ?? $container->load('getRouting_Loader_Attribute_DirectoryService')));
        $instance->addLoader(($container->privates['routing.loader.attribute.file'] ?? $container->load('getRouting_Loader_Attribute_FileService')));
        $instance->addLoader(($container->privates['routing.loader.psr4'] ?? $container->load('getRouting_Loader_Psr4Service')));

        return $instance;
    }
}
