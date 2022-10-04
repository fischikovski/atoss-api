<?php
declare(strict_types=1);
namespace App\Atoss\Soap;

use App\Atoss\Model\BinaryProperties;
use App\Atoss\Model\Entry;
use App\Atoss\Model\GetEmployees;
use App\Atoss\Model\GetEmployeesResponse;
use App\Atoss\Model\StringProperties;
use App\Atoss\Model\WebPropertyObjectList;
use App\Atoss\Model\WebPropertyObject;
use SoapClient;

class AtossSoapClient extends SoapClient
{
    public function __construct(string $wsdl, array $options = [])
    {
        $options = array_merge([
            'cache_wsdl' => 'WSLD_CACHE_NONE',
            'classmap' => [
                'getEmployees' => GetEmployees::class,
                'getEmployeesResponse' => GetEmployeesResponse::class,
                'webPropertyObjectList' => WebPropertyObjectList::class,
                'webPropertyObject' => WebPropertyObject::class,
                'binaryProperties' => BinaryProperties::class,
                'stringProperties' => StringProperties::class,
                'entry' => Entry::class,
            ],
            'exceptions' => true,
            'soap_version' => SOAP_1_1,
            'trace' => true,
        ], $options);

        parent::__construct($wsdl, $options);
    }
}