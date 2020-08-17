<?php

namespace ContainerADrRHLp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AI7umWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aI7umW_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aI7umW_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'session' => '?',
        ]);
    }
}
