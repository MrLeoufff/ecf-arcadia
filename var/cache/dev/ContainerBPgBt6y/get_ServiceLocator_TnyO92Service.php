<?php

namespace ContainerBPgBt6y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TnyO92Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._tnyO92' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._tnyO92'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\AnimalController::index' => ['privates', '.service_locator.rwIFbp8.App\\Controller\\AnimalController::index()', 'getAnimalControllerindexService', true],
            'App\\Controller\\AnimalController::new' => ['privates', '.service_locator.YUSWxuz.App\\Controller\\AnimalController::new()', 'getAnimalControllernewService', true],
            'App\\Controller\\AnimalController::list' => ['privates', '.service_locator.cd9erhq.App\\Controller\\AnimalController::list()', 'getAnimalControllerlistService', true],
            'App\\Controller\\AnimalController::edit' => ['privates', '.service_locator.zi8CzdA.App\\Controller\\AnimalController::edit()', 'getAnimalControllereditService', true],
            'App\\Controller\\AnimalController::delete' => ['privates', '.service_locator.RS5b.wb.App\\Controller\\AnimalController::delete()', 'getAnimalControllerdeleteService', true],
            'App\\Controller\\AnimalController::show' => ['privates', '.service_locator.1csE2Fv.App\\Controller\\AnimalController::show()', 'getAnimalControllershowService', true],
            'App\\Controller\\AnimalFeedingController::index' => ['privates', '.service_locator.qXnm2u3.App\\Controller\\AnimalFeedingController::index()', 'getAnimalFeedingControllerindexService', true],
            'App\\Controller\\AnimalFeedingController::new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\AnimalFeedingController::new()', 'getAnimalFeedingControllernewService', true],
            'App\\Controller\\AnimalFeedingController::show' => ['privates', '.service_locator.i22DY2X.App\\Controller\\AnimalFeedingController::show()', 'getAnimalFeedingControllershowService', true],
            'App\\Controller\\AnimalFeedingController::edit' => ['privates', '.service_locator.fa3BW59.App\\Controller\\AnimalFeedingController::edit()', 'getAnimalFeedingControllereditService', true],
            'App\\Controller\\AnimalFeedingController::delete' => ['privates', '.service_locator.fa3BW59.App\\Controller\\AnimalFeedingController::delete()', 'getAnimalFeedingControllerdeleteService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.yrnANkn.App\\Controller\\ContactController::index()', 'getContactControllerindexService', true],
            'App\\Controller\\ContactController::send' => ['privates', '.service_locator.yrnANkn.App\\Controller\\ContactController::send()', 'getContactControllersendService', true],
            'App\\Controller\\DashboardController::index' => ['privates', '.service_locator.Ay.Wizj.App\\Controller\\DashboardController::index()', 'getDashboardControllerindexService', true],
            'App\\Controller\\DefaultController::index' => ['privates', '.service_locator.Gk5iHLx.App\\Controller\\DefaultController::index()', 'getDefaultControllerindexService', true],
            'App\\Controller\\DefaultController::habitat' => ['privates', '.service_locator.veoWyhI.App\\Controller\\DefaultController::habitat()', 'getDefaultControllerhabitatService', true],
            'App\\Controller\\DefaultController::getAnimalsByHabitat' => ['privates', '.service_locator.AU4gJRo.App\\Controller\\DefaultController::getAnimalsByHabitat()', 'getDefaultControllergetAnimalsByHabitatService', true],
            'App\\Controller\\DefaultController::service' => ['privates', '.service_locator.PuhjwKK.App\\Controller\\DefaultController::service()', 'getDefaultControllerserviceService', true],
            'App\\Controller\\HabitatController::index' => ['privates', '.service_locator.rKMHrg5.App\\Controller\\HabitatController::index()', 'getHabitatControllerindexService', true],
            'App\\Controller\\HabitatController::new' => ['privates', '.service_locator.IIIjvIW.App\\Controller\\HabitatController::new()', 'getHabitatControllernewService', true],
            'App\\Controller\\HabitatController::show' => ['privates', '.service_locator.nvY2WDd.App\\Controller\\HabitatController::show()', 'getHabitatControllershowService', true],
            'App\\Controller\\HabitatController::edit' => ['privates', '.service_locator.fLZ8.xp.App\\Controller\\HabitatController::edit()', 'getHabitatControllereditService', true],
            'App\\Controller\\HabitatController::delete' => ['privates', '.service_locator.O38RXnT.App\\Controller\\HabitatController::delete()', 'getHabitatControllerdeleteService', true],
            'App\\Controller\\PasswordResetController::request' => ['privates', '.service_locator.B.b4U2C.App\\Controller\\PasswordResetController::request()', 'getPasswordResetControllerrequestService', true],
            'App\\Controller\\PasswordResetController::reset' => ['privates', '.service_locator.TqXAuTd.App\\Controller\\PasswordResetController::reset()', 'getPasswordResetControllerresetService', true],
            'App\\Controller\\ReviewController::new' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\ReviewController::new()', 'getReviewControllernewService', true],
            'App\\Controller\\ReviewController::index' => ['privates', '.service_locator.FXEnMOP.App\\Controller\\ReviewController::index()', 'getReviewControllerindexService', true],
            'App\\Controller\\ReviewController::approve' => ['privates', '.service_locator.IwI0eo7.App\\Controller\\ReviewController::approve()', 'getReviewControllerapproveService', true],
            'App\\Controller\\ReviewController::delete' => ['privates', '.service_locator.IwI0eo7.App\\Controller\\ReviewController::delete()', 'getReviewControllerdeleteService', true],
            'App\\Controller\\ScheduleController::index' => ['privates', '.service_locator.jHQbBaS.App\\Controller\\ScheduleController::index()', 'getScheduleControllerindexService', true],
            'App\\Controller\\ScheduleController::new' => ['privates', '.service_locator.Q0T9RzG.App\\Controller\\ScheduleController::new()', 'getScheduleControllernewService', true],
            'App\\Controller\\ScheduleController::edit' => ['privates', '.service_locator.GfuCj4f.App\\Controller\\ScheduleController::edit()', 'getScheduleControllereditService', true],
            'App\\Controller\\ScheduleController::delete' => ['privates', '.service_locator.GfuCj4f.App\\Controller\\ScheduleController::delete()', 'getScheduleControllerdeleteService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.PXJZ2Ro.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\ServiceController::index' => ['privates', '.service_locator.PuhjwKK.App\\Controller\\ServiceController::index()', 'getServiceControllerindexService', true],
            'App\\Controller\\ServiceController::new' => ['privates', '.service_locator.IIIjvIW.App\\Controller\\ServiceController::new()', 'getServiceControllernewService', true],
            'App\\Controller\\ServiceController::show' => ['privates', '.service_locator.HQ6Z48r.App\\Controller\\ServiceController::show()', 'getServiceControllershowService', true],
            'App\\Controller\\ServiceController::edit' => ['privates', '.service_locator.2EH4CAq.App\\Controller\\ServiceController::edit()', 'getServiceControllereditService', true],
            'App\\Controller\\ServiceController::delete' => ['privates', '.service_locator.2D8QxnL.App\\Controller\\ServiceController::delete()', 'getServiceControllerdeleteService', true],
            'App\\Controller\\UserController::list' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\UserController::list()', 'getUserControllerlistService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.apqxtUj.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.NBw4kn7.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.TQe_LeF.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'App\\Controller\\UserController::dashboard' => ['privates', '.service_locator.F1jaNar.App\\Controller\\UserController::dashboard()', 'getUserControllerdashboardService', true],
            'App\\Controller\\VeterinaryReportController::index' => ['privates', '.service_locator.kZAMQN4.App\\Controller\\VeterinaryReportController::index()', 'getVeterinaryReportControllerindexService', true],
            'App\\Controller\\VeterinaryReportController::new' => ['privates', '.service_locator.fRhqFR_.App\\Controller\\VeterinaryReportController::new()', 'getVeterinaryReportControllernewService', true],
            'App\\Controller\\VeterinaryReportController::show' => ['privates', '.service_locator.J7bOFQQ.App\\Controller\\VeterinaryReportController::show()', 'getVeterinaryReportControllershowService', true],
            'App\\Controller\\VeterinaryReportController::edit' => ['privates', '.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::edit()', 'getVeterinaryReportControllereditService', true],
            'App\\Controller\\VeterinaryReportController::delete' => ['privates', '.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::delete()', 'getVeterinaryReportControllerdeleteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\AnimalController:index' => ['privates', '.service_locator.rwIFbp8.App\\Controller\\AnimalController::index()', 'getAnimalControllerindexService', true],
            'App\\Controller\\AnimalController:new' => ['privates', '.service_locator.YUSWxuz.App\\Controller\\AnimalController::new()', 'getAnimalControllernewService', true],
            'App\\Controller\\AnimalController:list' => ['privates', '.service_locator.cd9erhq.App\\Controller\\AnimalController::list()', 'getAnimalControllerlistService', true],
            'App\\Controller\\AnimalController:edit' => ['privates', '.service_locator.zi8CzdA.App\\Controller\\AnimalController::edit()', 'getAnimalControllereditService', true],
            'App\\Controller\\AnimalController:delete' => ['privates', '.service_locator.RS5b.wb.App\\Controller\\AnimalController::delete()', 'getAnimalControllerdeleteService', true],
            'App\\Controller\\AnimalController:show' => ['privates', '.service_locator.1csE2Fv.App\\Controller\\AnimalController::show()', 'getAnimalControllershowService', true],
            'App\\Controller\\AnimalFeedingController:index' => ['privates', '.service_locator.qXnm2u3.App\\Controller\\AnimalFeedingController::index()', 'getAnimalFeedingControllerindexService', true],
            'App\\Controller\\AnimalFeedingController:new' => ['privates', '.service_locator.P.blNFL.App\\Controller\\AnimalFeedingController::new()', 'getAnimalFeedingControllernewService', true],
            'App\\Controller\\AnimalFeedingController:show' => ['privates', '.service_locator.i22DY2X.App\\Controller\\AnimalFeedingController::show()', 'getAnimalFeedingControllershowService', true],
            'App\\Controller\\AnimalFeedingController:edit' => ['privates', '.service_locator.fa3BW59.App\\Controller\\AnimalFeedingController::edit()', 'getAnimalFeedingControllereditService', true],
            'App\\Controller\\AnimalFeedingController:delete' => ['privates', '.service_locator.fa3BW59.App\\Controller\\AnimalFeedingController::delete()', 'getAnimalFeedingControllerdeleteService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.yrnANkn.App\\Controller\\ContactController::index()', 'getContactControllerindexService', true],
            'App\\Controller\\ContactController:send' => ['privates', '.service_locator.yrnANkn.App\\Controller\\ContactController::send()', 'getContactControllersendService', true],
            'App\\Controller\\DashboardController:index' => ['privates', '.service_locator.Ay.Wizj.App\\Controller\\DashboardController::index()', 'getDashboardControllerindexService', true],
            'App\\Controller\\DefaultController:index' => ['privates', '.service_locator.Gk5iHLx.App\\Controller\\DefaultController::index()', 'getDefaultControllerindexService', true],
            'App\\Controller\\DefaultController:habitat' => ['privates', '.service_locator.veoWyhI.App\\Controller\\DefaultController::habitat()', 'getDefaultControllerhabitatService', true],
            'App\\Controller\\DefaultController:getAnimalsByHabitat' => ['privates', '.service_locator.AU4gJRo.App\\Controller\\DefaultController::getAnimalsByHabitat()', 'getDefaultControllergetAnimalsByHabitatService', true],
            'App\\Controller\\DefaultController:service' => ['privates', '.service_locator.PuhjwKK.App\\Controller\\DefaultController::service()', 'getDefaultControllerserviceService', true],
            'App\\Controller\\HabitatController:index' => ['privates', '.service_locator.rKMHrg5.App\\Controller\\HabitatController::index()', 'getHabitatControllerindexService', true],
            'App\\Controller\\HabitatController:new' => ['privates', '.service_locator.IIIjvIW.App\\Controller\\HabitatController::new()', 'getHabitatControllernewService', true],
            'App\\Controller\\HabitatController:show' => ['privates', '.service_locator.nvY2WDd.App\\Controller\\HabitatController::show()', 'getHabitatControllershowService', true],
            'App\\Controller\\HabitatController:edit' => ['privates', '.service_locator.fLZ8.xp.App\\Controller\\HabitatController::edit()', 'getHabitatControllereditService', true],
            'App\\Controller\\HabitatController:delete' => ['privates', '.service_locator.O38RXnT.App\\Controller\\HabitatController::delete()', 'getHabitatControllerdeleteService', true],
            'App\\Controller\\PasswordResetController:request' => ['privates', '.service_locator.B.b4U2C.App\\Controller\\PasswordResetController::request()', 'getPasswordResetControllerrequestService', true],
            'App\\Controller\\PasswordResetController:reset' => ['privates', '.service_locator.TqXAuTd.App\\Controller\\PasswordResetController::reset()', 'getPasswordResetControllerresetService', true],
            'App\\Controller\\ReviewController:new' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\ReviewController::new()', 'getReviewControllernewService', true],
            'App\\Controller\\ReviewController:index' => ['privates', '.service_locator.FXEnMOP.App\\Controller\\ReviewController::index()', 'getReviewControllerindexService', true],
            'App\\Controller\\ReviewController:approve' => ['privates', '.service_locator.IwI0eo7.App\\Controller\\ReviewController::approve()', 'getReviewControllerapproveService', true],
            'App\\Controller\\ReviewController:delete' => ['privates', '.service_locator.IwI0eo7.App\\Controller\\ReviewController::delete()', 'getReviewControllerdeleteService', true],
            'App\\Controller\\ScheduleController:index' => ['privates', '.service_locator.jHQbBaS.App\\Controller\\ScheduleController::index()', 'getScheduleControllerindexService', true],
            'App\\Controller\\ScheduleController:new' => ['privates', '.service_locator.Q0T9RzG.App\\Controller\\ScheduleController::new()', 'getScheduleControllernewService', true],
            'App\\Controller\\ScheduleController:edit' => ['privates', '.service_locator.GfuCj4f.App\\Controller\\ScheduleController::edit()', 'getScheduleControllereditService', true],
            'App\\Controller\\ScheduleController:delete' => ['privates', '.service_locator.GfuCj4f.App\\Controller\\ScheduleController::delete()', 'getScheduleControllerdeleteService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.PXJZ2Ro.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\ServiceController:index' => ['privates', '.service_locator.PuhjwKK.App\\Controller\\ServiceController::index()', 'getServiceControllerindexService', true],
            'App\\Controller\\ServiceController:new' => ['privates', '.service_locator.IIIjvIW.App\\Controller\\ServiceController::new()', 'getServiceControllernewService', true],
            'App\\Controller\\ServiceController:show' => ['privates', '.service_locator.HQ6Z48r.App\\Controller\\ServiceController::show()', 'getServiceControllershowService', true],
            'App\\Controller\\ServiceController:edit' => ['privates', '.service_locator.2EH4CAq.App\\Controller\\ServiceController::edit()', 'getServiceControllereditService', true],
            'App\\Controller\\ServiceController:delete' => ['privates', '.service_locator.2D8QxnL.App\\Controller\\ServiceController::delete()', 'getServiceControllerdeleteService', true],
            'App\\Controller\\UserController:list' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\UserController::list()', 'getUserControllerlistService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.apqxtUj.App\\Controller\\UserController::new()', 'getUserControllernewService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.NBw4kn7.App\\Controller\\UserController::edit()', 'getUserControllereditService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.TQe_LeF.App\\Controller\\UserController::delete()', 'getUserControllerdeleteService', true],
            'App\\Controller\\UserController:dashboard' => ['privates', '.service_locator.F1jaNar.App\\Controller\\UserController::dashboard()', 'getUserControllerdashboardService', true],
            'App\\Controller\\VeterinaryReportController:index' => ['privates', '.service_locator.kZAMQN4.App\\Controller\\VeterinaryReportController::index()', 'getVeterinaryReportControllerindexService', true],
            'App\\Controller\\VeterinaryReportController:new' => ['privates', '.service_locator.fRhqFR_.App\\Controller\\VeterinaryReportController::new()', 'getVeterinaryReportControllernewService', true],
            'App\\Controller\\VeterinaryReportController:show' => ['privates', '.service_locator.J7bOFQQ.App\\Controller\\VeterinaryReportController::show()', 'getVeterinaryReportControllershowService', true],
            'App\\Controller\\VeterinaryReportController:edit' => ['privates', '.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::edit()', 'getVeterinaryReportControllereditService', true],
            'App\\Controller\\VeterinaryReportController:delete' => ['privates', '.service_locator.NDecrMx.App\\Controller\\VeterinaryReportController::delete()', 'getVeterinaryReportControllerdeleteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\AnimalController::index' => '?',
            'App\\Controller\\AnimalController::new' => '?',
            'App\\Controller\\AnimalController::list' => '?',
            'App\\Controller\\AnimalController::edit' => '?',
            'App\\Controller\\AnimalController::delete' => '?',
            'App\\Controller\\AnimalController::show' => '?',
            'App\\Controller\\AnimalFeedingController::index' => '?',
            'App\\Controller\\AnimalFeedingController::new' => '?',
            'App\\Controller\\AnimalFeedingController::show' => '?',
            'App\\Controller\\AnimalFeedingController::edit' => '?',
            'App\\Controller\\AnimalFeedingController::delete' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\ContactController::send' => '?',
            'App\\Controller\\DashboardController::index' => '?',
            'App\\Controller\\DefaultController::index' => '?',
            'App\\Controller\\DefaultController::habitat' => '?',
            'App\\Controller\\DefaultController::getAnimalsByHabitat' => '?',
            'App\\Controller\\DefaultController::service' => '?',
            'App\\Controller\\HabitatController::index' => '?',
            'App\\Controller\\HabitatController::new' => '?',
            'App\\Controller\\HabitatController::show' => '?',
            'App\\Controller\\HabitatController::edit' => '?',
            'App\\Controller\\HabitatController::delete' => '?',
            'App\\Controller\\PasswordResetController::request' => '?',
            'App\\Controller\\PasswordResetController::reset' => '?',
            'App\\Controller\\ReviewController::new' => '?',
            'App\\Controller\\ReviewController::index' => '?',
            'App\\Controller\\ReviewController::approve' => '?',
            'App\\Controller\\ReviewController::delete' => '?',
            'App\\Controller\\ScheduleController::index' => '?',
            'App\\Controller\\ScheduleController::new' => '?',
            'App\\Controller\\ScheduleController::edit' => '?',
            'App\\Controller\\ScheduleController::delete' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\ServiceController::index' => '?',
            'App\\Controller\\ServiceController::new' => '?',
            'App\\Controller\\ServiceController::show' => '?',
            'App\\Controller\\ServiceController::edit' => '?',
            'App\\Controller\\ServiceController::delete' => '?',
            'App\\Controller\\UserController::list' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::dashboard' => '?',
            'App\\Controller\\VeterinaryReportController::index' => '?',
            'App\\Controller\\VeterinaryReportController::new' => '?',
            'App\\Controller\\VeterinaryReportController::show' => '?',
            'App\\Controller\\VeterinaryReportController::edit' => '?',
            'App\\Controller\\VeterinaryReportController::delete' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\AnimalController:index' => '?',
            'App\\Controller\\AnimalController:new' => '?',
            'App\\Controller\\AnimalController:list' => '?',
            'App\\Controller\\AnimalController:edit' => '?',
            'App\\Controller\\AnimalController:delete' => '?',
            'App\\Controller\\AnimalController:show' => '?',
            'App\\Controller\\AnimalFeedingController:index' => '?',
            'App\\Controller\\AnimalFeedingController:new' => '?',
            'App\\Controller\\AnimalFeedingController:show' => '?',
            'App\\Controller\\AnimalFeedingController:edit' => '?',
            'App\\Controller\\AnimalFeedingController:delete' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\ContactController:send' => '?',
            'App\\Controller\\DashboardController:index' => '?',
            'App\\Controller\\DefaultController:index' => '?',
            'App\\Controller\\DefaultController:habitat' => '?',
            'App\\Controller\\DefaultController:getAnimalsByHabitat' => '?',
            'App\\Controller\\DefaultController:service' => '?',
            'App\\Controller\\HabitatController:index' => '?',
            'App\\Controller\\HabitatController:new' => '?',
            'App\\Controller\\HabitatController:show' => '?',
            'App\\Controller\\HabitatController:edit' => '?',
            'App\\Controller\\HabitatController:delete' => '?',
            'App\\Controller\\PasswordResetController:request' => '?',
            'App\\Controller\\PasswordResetController:reset' => '?',
            'App\\Controller\\ReviewController:new' => '?',
            'App\\Controller\\ReviewController:index' => '?',
            'App\\Controller\\ReviewController:approve' => '?',
            'App\\Controller\\ReviewController:delete' => '?',
            'App\\Controller\\ScheduleController:index' => '?',
            'App\\Controller\\ScheduleController:new' => '?',
            'App\\Controller\\ScheduleController:edit' => '?',
            'App\\Controller\\ScheduleController:delete' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\ServiceController:index' => '?',
            'App\\Controller\\ServiceController:new' => '?',
            'App\\Controller\\ServiceController:show' => '?',
            'App\\Controller\\ServiceController:edit' => '?',
            'App\\Controller\\ServiceController:delete' => '?',
            'App\\Controller\\UserController:list' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:dashboard' => '?',
            'App\\Controller\\VeterinaryReportController:index' => '?',
            'App\\Controller\\VeterinaryReportController:new' => '?',
            'App\\Controller\\VeterinaryReportController:show' => '?',
            'App\\Controller\\VeterinaryReportController:edit' => '?',
            'App\\Controller\\VeterinaryReportController:delete' => '?',
        ]);
    }
}
