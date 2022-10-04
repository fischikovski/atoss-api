<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clockin ServiceType
 * @subpackage Services
 */
class Clockin extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clockin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\Clockin $parameters
     * @return \Conventus\Atoss\StructType\ClockinResponse|bool
     */
    public function clockin(\Conventus\Atoss\StructType\Clockin $parameters)
    {
        try {
            $this->setResult($resultClockin = $this->getSoapClient()->__soapCall('clockin', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClockin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ClockinResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
