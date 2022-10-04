<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Reset ServiceType
 * @subpackage Services
 */
class Reset extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named resetVersioning
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ResetVersioning $parameters
     * @return \Conventus\Atoss\StructType\ResetVersioningResponse|bool
     */
    public function resetVersioning(\Conventus\Atoss\StructType\ResetVersioning $parameters)
    {
        try {
            $this->setResult($resultResetVersioning = $this->getSoapClient()->__soapCall('resetVersioning', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultResetVersioning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named resetPassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ResetPassword $parameters
     * @return \Conventus\Atoss\StructType\ResetPasswordResponse|bool
     */
    public function resetPassword(\Conventus\Atoss\StructType\ResetPassword $parameters)
    {
        try {
            $this->setResult($resultResetPassword = $this->getSoapClient()->__soapCall('resetPassword', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultResetPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ResetPasswordResponse|\Conventus\Atoss\StructType\ResetVersioningResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
