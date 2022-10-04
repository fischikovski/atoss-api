<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named changePassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ChangePassword $parameters
     * @return \Conventus\Atoss\StructType\ChangePasswordResponse|bool
     */
    public function changePassword(\Conventus\Atoss\StructType\ChangePassword $parameters)
    {
        try {
            $this->setResult($resultChangePassword = $this->getSoapClient()->__soapCall('changePassword', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangePassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named changePrimaryKey
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ChangePrimaryKey $parameters
     * @return \Conventus\Atoss\StructType\ChangePrimaryKeyResponse|bool
     */
    public function changePrimaryKey(\Conventus\Atoss\StructType\ChangePrimaryKey $parameters)
    {
        try {
            $this->setResult($resultChangePrimaryKey = $this->getSoapClient()->__soapCall('changePrimaryKey', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangePrimaryKey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ChangePasswordResponse|\Conventus\Atoss\StructType\ChangePrimaryKeyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
