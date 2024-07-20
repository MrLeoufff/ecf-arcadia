<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.apqxtUj.App\Controller\UserController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.apqxtUj.App\\Controller\\UserController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'mailer' => ['privates', 'App\\Service\\MailerService', 'getMailerServiceService', true],
        ], [
            'em' => '?',
            'passwordHasher' => '?',
            'mailer' => 'App\\Service\\MailerService',
        ]))->withContext('App\\Controller\\UserController::new()', $container);
    }
}
