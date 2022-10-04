<?php

namespace App\Command;

use App\Atoss\Soap\AtossSoapClient;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:get-employees',
    description: 'Add a short description for your command',
)]
class GetEmployeesCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $httpLogin = 'soap';
        $httpPassword = 'Conventus2022!';

        $wsdl = 'https://' . urlencode($httpLogin) . ':' . urlencode($httpPassword) . '@conventus.atoss.com/atc/webservices?wsdl';
        $client = new AtossSoapClient($wsdl, [
            'login' => $httpLogin,
            'password' => $httpPassword
        ]);
        $client->login();
//        $response = $client->getEmployees();
//        $response = $client->getEmployees(['group' => '', 'right' => '', 'employee' => '71']);
//        $response = $client->getTables('Employee');
//        $response = $client->DataSetGet('Employee');

//        $response = $client->getBookings();
//        $response = $client->getDepartments();

        $client->logout();
        var_dump($client);
//        var_dump($client);

        return Command::SUCCESS;
    }
}
