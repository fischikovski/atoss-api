<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clockout ServiceType
 * @subpackage Services
 */
class Clockout extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clockout
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\Clockout $parameters
     * @return \Conventus\Atoss\StructType\ClockoutResponse|bool
     */
    public function clockout(\Conventus\Atoss\StructType\Clockout $parameters)
    {
        try {
            $this->setResult($resultClockout = $this->getSoapClient()->__soapCall('clockout', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClockout;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ClockoutResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
