<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Dump ServiceType
 * @subpackage Services
 */
class Dump extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named dumpTable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DumpTable $parameters
     * @return \Conventus\Atoss\StructType\DumpTableResponse|bool
     */
    public function dumpTable(\Conventus\Atoss\StructType\DumpTable $parameters)
    {
        try {
            $this->setResult($resultDumpTable = $this->getSoapClient()->__soapCall('dumpTable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDumpTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\DumpTableResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
