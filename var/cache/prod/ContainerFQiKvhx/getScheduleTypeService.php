<?php

namespace ContainerFQiKvhx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ScheduleType' shared autowired service.
     *
     * @return \App\Form\ScheduleType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ScheduleType'] = new \App\Form\ScheduleType();
    }
}
