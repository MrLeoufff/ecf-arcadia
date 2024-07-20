<?php

namespace ContainerACB4Umr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderFactory_NullService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.provider_factory.null' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\NullProviderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'ProviderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'AbstractProviderFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'NullProviderFactory.php';

        return $container->privates['translation.provider_factory.null'] = new \Symfony\Component\Translation\Provider\NullProviderFactory();
    }
}
