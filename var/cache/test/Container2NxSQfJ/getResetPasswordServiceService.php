<?php

namespace Container2NxSQfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ResetPasswordService' shared autowired service.
     *
     * @return \App\Service\ResetPasswordService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ResetPasswordService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Service\\ResetPasswordService'])) {
            return $container->privates['App\\Service\\ResetPasswordService'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\ResetPasswordService'])) {
            return $container->privates['App\\Service\\ResetPasswordService'];
        }

        return $container->privates['App\\Service\\ResetPasswordService'] = new \App\Service\ResetPasswordService('jurasikarcadia@gmail.com', $a, ($container->services['router'] ?? self::getRouterService($container)), $b);
    }
}
