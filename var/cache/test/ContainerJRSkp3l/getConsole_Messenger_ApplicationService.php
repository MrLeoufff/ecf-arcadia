<?php

namespace ContainerJRSkp3l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Messenger_ApplicationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.messenger.application' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Console\Application
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Application.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Application.php';

        $container->factories['service_container']['console.messenger.application'] = function ($container) {
            $instance = new \Symfony\Bundle\FrameworkBundle\Console\Application(($container->services['kernel'] ?? $container->get('kernel', 1)));

            $instance->setAutoExit(false);

            return $instance;
        };

        return $container->factories['service_container']['console.messenger.application']($container);
    }
}
