<?php

namespace Container1lCPl25;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetEmployeesCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\GetEmployeesCommand' shared autowired service.
     *
     * @return \App\Command\GetEmployeesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/GetEmployeesCommand.php';

        $container->privates['App\\Command\\GetEmployeesCommand'] = $instance = new \App\Command\GetEmployeesCommand();

        $instance->setName('app:get-employees');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}
