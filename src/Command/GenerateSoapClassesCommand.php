<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

#[AsCommand(
    name: 'app:generate-soap-classes',
    description: 'Add a short description for your command',
)]
class GenerateSoapClassesCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $options = GeneratorOptions::instance();
        $options
            ->setOrigin('https://conventus.atoss.com/atc/webservices?wsdl')
            ->setDestination('./vendor-local/conventus2/atoss-sdk')
            ->setNamespace('Conventus\\Atoss')
            ->setStandalone(true)
//            ->setBasicLogin('soap')
//            ->setBasicPassword('Conventus2022!')
            ->setComposerName('conventus/atoss-sdk');

        // Generator instantiation
        $generator = new Generator($options);
        // Package generation
        $generator->generatePackage();

        return Command::SUCCESS;
    }
}
