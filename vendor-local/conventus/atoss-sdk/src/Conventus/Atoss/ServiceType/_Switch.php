<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Switch ServiceType
 * @subpackage Services
 */
class _Switch extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named switchUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SwitchUser $parameters
     * @return \Conventus\Atoss\StructType\SwitchUserResponse|bool
     */
    public function switchUser(\Conventus\Atoss\StructType\SwitchUser $parameters)
    {
        try {
            $this->setResult($resultSwitchUser = $this->getSoapClient()->__soapCall('switchUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSwitchUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named switchLocale
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SwitchLocale $parameters
     * @return \Conventus\Atoss\StructType\SwitchLocaleResponse|bool
     */
    public function switchLocale(\Conventus\Atoss\StructType\SwitchLocale $parameters)
    {
        try {
            $this->setResult($resultSwitchLocale = $this->getSoapClient()->__soapCall('switchLocale', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSwitchLocale;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\SwitchLocaleResponse|\Conventus\Atoss\StructType\SwitchUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
