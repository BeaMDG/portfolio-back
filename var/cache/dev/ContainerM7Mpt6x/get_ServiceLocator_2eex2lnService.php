<?php

namespace ContainerM7Mpt6x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2eex2lnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2eex2ln' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2eex2ln'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'proyectosRepository' => ['privates', 'App\\Repository\\ProyectosRepository', 'getProyectosRepositoryService', true],
        ], [
            'proyectosRepository' => 'App\\Repository\\ProyectosRepository',
        ]);
    }
}
