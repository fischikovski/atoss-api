<?php

namespace App\Command;

use Conventus\Atoss\ClassMap;
use Conventus\Atoss\ServiceType\Data;
use Conventus\Atoss\ServiceType\Dump;
use Conventus\Atoss\ServiceType\Get;
use Conventus\Atoss\ServiceType\Login;
use Conventus\Atoss\ServiceType\Send;
use Conventus\Atoss\StructType\DataSetGet;
use Conventus\Atoss\StructType\DumpTable;
use Conventus\Atoss\StructType\GetAbsence;
use Conventus\Atoss\StructType\GetBookings;
use Conventus\Atoss\StructType\GetBookingsResponse;
use Conventus\Atoss\StructType\GetEmployees;
use Conventus\Atoss\StructType\GetEmployeesResponse;
use Conventus\Atoss\StructType\GetPlannings;
use Conventus\Atoss\StructType\GetTimeAccountBalance;
use Conventus\Atoss\StructType\GetTimeAccountBalanceResponse;
use Conventus\Atoss\StructType\GetVacation;
use Conventus\Atoss\StructType\GetWorkplaces;
use Conventus\Atoss\StructType\SendMail;
use Conventus\Atoss\StructType\SendMessage;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;


#[AsCommand(
    name: 'app:test',
    description: 'Add a short description for your command',
)]
class TestCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $httpLogin = 'soap';
        $httpPassword = 'Conventus2022!';

//        $httpLogin = '71';
//        $httpPassword = 'BiepsiQwertzu1!';

        $options = [
            AbstractSoapClientBase::WSDL_URL => 'https://conventus.atoss.com/atc/webservices?wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_LOGIN => $httpLogin,
            AbstractSoapClientBase::WSDL_PASSWORD => $httpPassword,
        ];

        $login = new Login($options);
        $login->login(new \Conventus\Atoss\StructType\Login());
        $get = new Get();
        $get->setSoapClient($login->getSoapClient());
        $getEmployees = new GetEmployees(null, null, ['_007']);
        /** @var GetEmployeesResponse $result */
        $result = $get->getEmployees($getEmployees);
        foreach($result->getReturn()->getObjects() as $row) {
            $io->section('Neuer Mitarbeiter');
            $io->block('DateTime');
            foreach($row->getDateTimeProperties()->getEntry() as $keyValue) {
                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
            }
            $io->block('String');
            foreach($row->getStringProperties()->getEntry() as $keyValue) {
                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
            }
            $io->block('Integer');
            foreach($row->getIntegerProperties()->getEntry() as $keyValue) {
                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
            }
            $io->block('Duration');
            foreach($row->getDurationProperties()->getEntry() as $keyValue) {
                $io->writeln($keyValue->getKey() . ': ' . round($keyValue->getValue() * 24 * 60, 0) . ' Minuten');
            }
        }
//        $table = $io->createTable();
//        $table->setHeaders(
//            [
//                'firstname',
//                'lastname',
//                'street',
//                'city'
//            ]
//        );
//        foreach($result->getReturn()->getObjects() as $row) {
//            $data = [
//                'firstname' => null,
//                'lastname' => null,
//                'street' => null,
//                'city' => null,
//            ];
//            foreach($row->getStringProperties()->getEntry() as $property) {
//                if($property->getKey() === 'firstname') {
//                    $data['firstname'] = $property->getValue();
//                }
//                if($property->getKey() === 'lastname') {
//                    $data['lastname'] = $property->getValue();
//                }
//                if($property->getKey() === 'street') {
//                    $data['street'] = $property->getValue();
//                }
//                if($property->getKey() === 'city') {
//                    $data['city'] = $property->getValue();
//                }
//            }
//            $table->addRow([
//                $data['firstname'],
//                    $data['lastname'],
//                    $data['street'],
//                    $data['city']
//            ]
//            );
//        }
//        $table->render();

//        $request = new GetBookings(['_007'], '2022-02-24', '2022-02-26', null, null);
//        /** @var GetBookingsResponse $response */
//        $response = $get->getBookings($request);
//        foreach($response->getReturn()->getObjects() as $row) {
//            $io->section('Neue Buchung');
//            $io->block('DateTime');
//            foreach($row->getDateTimeProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('String');
//            foreach($row->getStringProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('Integer');
//            foreach($row->getIntegerProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('Duration');
//            foreach($row->getDurationProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . round($keyValue->getValue() * 24 * 60, 0) . ' Minuten');
//            }
//            $io->block('Binary');
//            foreach($row->getBinaryProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('Component');
//            foreach($row->getComponentProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('List');
//            foreach($row->getListProperites()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//        }

//        $message = new SendMessage('71', 'Test');
//        $mail = new SendMail('matthias.fischer@conventus.de', 'doreen.kuehle@conventus.de', null, 'ATOSS Mail Test', 'Dies ist eine E-Mail mit der API von ATOSS versendet!');
//        $send = new Send($options);
//        $send->setSoapClient($login->getSoapClient());
//        $send->sendMail($mail);

//        $request = new DataSetGet('workplace');
//        $data = new Data($options);
//        $data->setSoapClient($login->getSoapClient());
//        $response = $data->dataSetGet($request);
        $request = new GetWorkplaces(null, null, 'city = Essen');
        $response = $get->getWorkplaces($request);
//        die;

//        $request = new DumpTable('workplace');
//        $dump = new Dump($options);
//        $dump->setSoapClient($login->getSoapClient());
//        $response = $dump->dumpTable($request);
//        var_dump($response);die;
        foreach($response->getReturn()->getObjects() as $row) {
//            $io->block('DateTime');
//            foreach($row->getDateTimeProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('String');
            foreach($row->getStringProperties()->getEntry() as $keyValue) {
                if($keyValue->getKey() === 'name') {
                    $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
                }
            }
//            $io->block('Integer');
//            foreach($row->getIntegerProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . $keyValue->getValue());
//            }
//            $io->block('Duration');
//            foreach($row->getDurationProperties()->getEntry() as $keyValue) {
//                $io->writeln($keyValue->getKey() . ': ' . round($keyValue->getValue() * 24 * 60, 0) . ' Minuten');
//            }
        }
        return Command::SUCCESS;
    }
}
