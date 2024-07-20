<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_Command_DropSchemaService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine_mongodb.odm.command.drop_schema' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\DropSchemaDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine_mongodb.odm.command.drop_schema'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\DropSchemaDoctrineODMCommand();

        $instance->setName('doctrine:mongodb:schema:drop');

        return $instance;
    }
}
