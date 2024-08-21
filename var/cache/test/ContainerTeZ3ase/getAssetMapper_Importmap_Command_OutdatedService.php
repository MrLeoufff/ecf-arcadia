<?php

namespace ContainerTeZ3ase;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_OutdatedService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.command.outdated' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapOutdatedCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ImportMapOutdatedCommand.php';

        $container->privates['asset_mapper.importmap.command.outdated'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapOutdatedCommand(($container->privates['asset_mapper.importmap.update_checker'] ?? $container->load('getAssetMapper_Importmap_UpdateCheckerService')));

        $instance->setName('importmap:outdated');
        $instance->setDescription('List outdated JavaScript packages and their latest versions');

        return $instance;
    }
}
