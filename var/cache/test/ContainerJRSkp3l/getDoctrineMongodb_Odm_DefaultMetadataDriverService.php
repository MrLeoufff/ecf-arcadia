<?php

namespace ContainerJRSkp3l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DefaultMetadataDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Persistence\Mapping\Driver\MappingDriverChain
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ODM'.\DIRECTORY_SEPARATOR.'MongoDB'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AttributeDriver.php';

        $container->privates['doctrine_mongodb.odm.default_metadata_driver'] = $instance = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($container->privates['doctrine_mongodb.odm.default_attribute_metadata_driver'] ??= new \Doctrine\ODM\MongoDB\Mapping\Driver\AttributeDriver([(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Document')])), 'App\\Document');

        return $instance;
    }
}