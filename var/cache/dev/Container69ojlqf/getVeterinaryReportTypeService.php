<?php

namespace Container69ojlqf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeterinaryReportTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\VeterinaryReportType' shared autowired service.
     *
     * @return \App\Form\VeterinaryReportType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/VeterinaryReportType.php';

        return $container->privates['App\\Form\\VeterinaryReportType'] = new \App\Form\VeterinaryReportType(($container->privates['App\\Repository\\VeterinaryReportRepository'] ?? $container->load('getVeterinaryReportRepositoryService')));
    }
}