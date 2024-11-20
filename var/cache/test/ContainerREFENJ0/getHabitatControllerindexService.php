<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerindexService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.rKMHrg5.App\Controller\HabitatController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rKMHrg5.App\\Controller\\HabitatController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
        ], [
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
        ]))->withContext('App\\Controller\\HabitatController::index()', $container);
    }
}
