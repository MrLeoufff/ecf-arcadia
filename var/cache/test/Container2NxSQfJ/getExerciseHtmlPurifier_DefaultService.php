<?php

namespace Container2NxSQfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciseHtmlPurifier_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'exercise_html_purifier.default' shared service.
     *
     * @return \HTMLPurifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ezyang'.\DIRECTORY_SEPARATOR.'htmlpurifier'.\DIRECTORY_SEPARATOR.'library'.\DIRECTORY_SEPARATOR.'HTMLPurifier.php';

        return $container->privates['exercise_html_purifier.default'] = new \HTMLPurifier(($container->privates['exercise_html_purifier.config.default'] ?? $container->load('getExerciseHtmlPurifier_Config_DefaultService')));
    }
}
