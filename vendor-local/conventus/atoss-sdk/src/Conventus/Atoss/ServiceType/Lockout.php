<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Lockout ServiceType
 * @subpackage Services
 */
class Lockout extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named lockoutUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\LockoutUsers $parameters
     * @return \Conventus\Atoss\StructType\LockoutUsersResponse|bool
     */
    public function lockoutUsers(\Conventus\Atoss\StructType\LockoutUsers $parameters)
    {
        try {
            $this->setResult($resultLockoutUsers = $this->getSoapClient()->__soapCall('lockoutUsers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLockoutUsers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\LockoutUsersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
