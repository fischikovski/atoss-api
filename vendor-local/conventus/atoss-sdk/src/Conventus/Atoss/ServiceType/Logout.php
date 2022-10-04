<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Logout ServiceType
 * @subpackage Services
 */
class Logout extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named logout
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\Logout $parameters
     * @return \Conventus\Atoss\StructType\LogoutResponse|bool
     */
    public function logout(\Conventus\Atoss\StructType\Logout $parameters)
    {
        try {
            $this->setResult($resultLogout = $this->getSoapClient()->__soapCall('logout', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLogout;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\LogoutResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
