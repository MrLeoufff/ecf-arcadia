<?php

namespace ContainerREFENJ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.HQ6Z48r.App\Entity\Service' shared service.
     *
     * @return \App\Entity\Service
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.HQ6Z48r": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".');
    }
}
