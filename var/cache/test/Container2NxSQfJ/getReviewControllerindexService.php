<?php

namespace Container2NxSQfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewControllerindexService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.FXEnMOP.App\Controller\ReviewController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FXEnMOP.App\\Controller\\ReviewController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
        ], [
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
        ]))->withContext('App\\Controller\\ReviewController::index()', $container);
    }
}
