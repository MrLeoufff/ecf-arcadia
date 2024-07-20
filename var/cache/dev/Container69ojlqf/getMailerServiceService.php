<?php

namespace Container69ojlqf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailerServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailerService' shared autowired service.
     *
     * @return \App\Service\MailerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/MailerService.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\Service\\MailerService'])) {
            return $container->privates['App\\Service\\MailerService'];
        }

        return $container->privates['App\\Service\\MailerService'] = new \App\Service\MailerService('jurasikarcadia@gmail.com', $a);
    }
}