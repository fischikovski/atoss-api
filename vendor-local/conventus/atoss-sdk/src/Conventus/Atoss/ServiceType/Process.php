<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named process
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\Process $parameters
     * @return \Conventus\Atoss\StructType\ProcessResponse|bool
     */
    public function process(\Conventus\Atoss\StructType\Process $parameters)
    {
        try {
            $this->setResult($resultProcess = $this->getSoapClient()->__soapCall('process', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultProcess;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ProcessResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
