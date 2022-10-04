<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Unlock ServiceType
 * @subpackage Services
 */
class Unlock extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named unlockWorkplaceSales
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UnlockWorkplaceSales $parameters
     * @return \Conventus\Atoss\StructType\UnlockWorkplaceSalesResponse|bool
     */
    public function unlockWorkplaceSales(\Conventus\Atoss\StructType\UnlockWorkplaceSales $parameters)
    {
        try {
            $this->setResult($resultUnlockWorkplaceSales = $this->getSoapClient()->__soapCall('unlockWorkplaceSales', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUnlockWorkplaceSales;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\UnlockWorkplaceSalesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
