<?php

namespace ContainerIxwsHyf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJokeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\JokeType' shared autowired service.
     *
     * @return \App\Form\JokeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\JokeType'] = new \App\Form\JokeType();
    }
}