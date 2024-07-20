<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_MongodbDocumentService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.type.mongodb_document' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type.mongodb_document'] = new \Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType(($container->services['doctrine_mongodb'] ?? self::getDoctrineMongodbService($container)));
    }
}
