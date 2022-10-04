<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clock ServiceType
 * @subpackage Services
 */
class Clock extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clockNow
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ClockNow $parameters
     * @return \Conventus\Atoss\StructType\ClockNowResponse|bool
     */
    public function clockNow(\Conventus\Atoss\StructType\ClockNow $parameters)
    {
        try {
            $this->setResult($resultClockNow = $this->getSoapClient()->__soapCall('clockNow', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClockNow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named clock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\Clock $parameters
     * @return \Conventus\Atoss\StructType\ClockResponse|bool
     */
    public function clock(\Conventus\Atoss\StructType\Clock $parameters)
    {
        try {
            $this->setResult($resultClock = $this->getSoapClient()->__soapCall('clock', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ClockNowResponse|\Conventus\Atoss\StructType\ClockResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
