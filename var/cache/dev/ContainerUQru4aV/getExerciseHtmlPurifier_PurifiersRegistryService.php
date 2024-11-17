<?php

namespace ContainerUQru4aV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_PurifiersRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'exercise_html_purifier.purifiers_registry' shared service.
     *
     * @return \Exercise\HTMLPurifierBundle\HTMLPurifiersRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HTMLPurifiersRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HTMLPurifiersRegistry.php';

        return $container->privates['exercise_html_purifier.purifiers_registry'] = new \Exercise\HTMLPurifierBundle\HTMLPurifiersRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'default' => ['privates', 'exercise_html_purifier.default', 'getExerciseHtmlPurifier_DefaultService', true],
        ], [
            'default' => '?',
        ]));
    }
}
