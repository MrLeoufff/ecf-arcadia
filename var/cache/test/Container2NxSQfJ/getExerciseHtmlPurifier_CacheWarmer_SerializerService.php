<?php

namespace Container2NxSQfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_CacheWarmer_SerializerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'exercise_html_purifier.cache_warmer.serializer' shared service.
     *
     * @return \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        return $container->privates['exercise_html_purifier.cache_warmer.serializer'] = new \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer([($container->targetDir.''.'/htmlpurifier')], ['default'], ($container->privates['exercise_html_purifier.purifiers_registry'] ?? $container->load('getExerciseHtmlPurifier_PurifiersRegistryService')), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()));
    }
}
