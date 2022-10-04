<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named checkPassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CheckPassword $parameters
     * @return \Conventus\Atoss\StructType\CheckPasswordResponse|bool
     */
    public function checkPassword(\Conventus\Atoss\StructType\CheckPassword $parameters)
    {
        try {
            $this->setResult($resultCheckPassword = $this->getSoapClient()->__soapCall('checkPassword', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\CheckPasswordResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
