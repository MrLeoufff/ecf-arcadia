<?php

namespace ContainerB97Rkue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_PsrCommandLoggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.psr_command_logger' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'mongodb-odm-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'APM'.\DIRECTORY_SEPARATOR.'PSRCommandLogger.php';

        return $container->privates['doctrine_mongodb.odm.psr_command_logger'] = new \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger(($container->privates['monolog.logger.doctrine'] ?? self::getMonolog_Logger_DoctrineService($container)));
    }
}
