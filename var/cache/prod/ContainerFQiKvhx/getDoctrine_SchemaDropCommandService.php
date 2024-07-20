<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SchemaDropCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }
}
