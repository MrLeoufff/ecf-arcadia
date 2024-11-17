<?php

namespace Container2NxSQfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Audit_LazyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.asset_mapper.importmap.command.audit.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.asset_mapper.importmap.command.audit.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:audit', [], 'Check for security vulnerability advisories for dependencies', false, #[\Closure(name: 'asset_mapper.importmap.command.audit', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapAuditCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapAuditCommand => ($container->privates['asset_mapper.importmap.command.audit'] ?? $container->load('getAssetMapper_Importmap_Command_AuditService')));
    }
}
