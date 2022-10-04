<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Login ServiceType
 * @subpackage Services
 */
class Login extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named login
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\Login $parameters
     * @return \Conventus\Atoss\StructType\LoginResponse|bool
     */
    public function login(\Conventus\Atoss\StructType\Login $parameters)
    {
        try {
            $this->setResult($resultLogin = $this->getSoapClient()->__soapCall('login', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\LoginResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
