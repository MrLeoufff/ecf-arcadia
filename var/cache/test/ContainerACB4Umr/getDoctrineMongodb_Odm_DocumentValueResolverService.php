<?php

namespace ContainerACB4Umr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DocumentValueResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.document_value_resolver' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ArgumentResolver\DocumentValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'DocumentValueResolver.php';

        return $container->privates['doctrine_mongodb.odm.document_value_resolver'] = new \Doctrine\Bundle\MongoDBBundle\ArgumentResolver\DocumentValueResolver(($container->privates['doctrine_mongodb.odm.entity_value_resolver'] ?? $container->load('getDoctrineMongodb_Odm_EntityValueResolverService')));
    }
}
