<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named isSettingEnabled
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\IsSettingEnabled $parameters
     * @return \Conventus\Atoss\StructType\IsSettingEnabledResponse|bool
     */
    public function isSettingEnabled(\Conventus\Atoss\StructType\IsSettingEnabled $parameters)
    {
        try {
            $this->setResult($resultIsSettingEnabled = $this->getSoapClient()->__soapCall('isSettingEnabled', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsSettingEnabled;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\IsSettingEnabledResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
