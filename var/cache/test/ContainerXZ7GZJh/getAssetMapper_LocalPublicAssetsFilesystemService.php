<?php

namespace ContainerXZ7GZJh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_LocalPublicAssetsFilesystemService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'asset_mapper.local_public_assets_filesystem' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Path\LocalPublicAssetsFilesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Path'.\DIRECTORY_SEPARATOR.'PublicAssetsFilesystemInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Path'.\DIRECTORY_SEPARATOR.'LocalPublicAssetsFilesystem.php';

        return $container->privates['asset_mapper.local_public_assets_filesystem'] = new \Symfony\Component\AssetMapper\Path\LocalPublicAssetsFilesystem((\dirname(__DIR__, 4).'/public'));
    }
}
