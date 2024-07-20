<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DocumentValueResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine_mongodb.odm.document_value_resolver' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ArgumentResolver\DocumentValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine_mongodb.odm.document_value_resolver'] = new \Doctrine\Bundle\MongoDBBundle\ArgumentResolver\DocumentValueResolver(new \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver(($container->services['doctrine_mongodb'] ?? self::getDoctrineMongodbService($container)), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()));
    }
}