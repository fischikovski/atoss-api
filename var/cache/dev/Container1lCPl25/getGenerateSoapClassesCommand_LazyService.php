<?php

namespace Container1lCPl25;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateSoapClassesCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\GenerateSoapClassesCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\GenerateSoapClassesCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:generate-soap-classes', [], 'Add a short description for your command', false, function () use ($container): \App\Command\GenerateSoapClassesCommand {
            return ($container->privates['App\\Command\\GenerateSoapClassesCommand'] ?? $container->load('getGenerateSoapClassesCommandService'));
        });
    }
}
