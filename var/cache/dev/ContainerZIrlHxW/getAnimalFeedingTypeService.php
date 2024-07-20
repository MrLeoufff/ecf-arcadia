<?php

namespace ContainerZIrlHxW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalFeedingTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AnimalFeedingType' shared autowired service.
     *
     * @return \App\Form\AnimalFeedingType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'AnimalFeedingType.php';

        return $container->privates['App\\Form\\AnimalFeedingType'] = new \App\Form\AnimalFeedingType(($container->privates['App\\Repository\\VeterinaryReportRepository'] ?? $container->load('getVeterinaryReportRepositoryService')));
    }
}
