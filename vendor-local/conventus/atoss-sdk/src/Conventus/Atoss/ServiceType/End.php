<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for End ServiceType
 * @subpackage Services
 */
class End extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named endLockoutUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\EndLockoutUsers $parameters
     * @return \Conventus\Atoss\StructType\EndLockoutUsersResponse|bool
     */
    public function endLockoutUsers(\Conventus\Atoss\StructType\EndLockoutUsers $parameters)
    {
        try {
            $this->setResult($resultEndLockoutUsers = $this->getSoapClient()->__soapCall('endLockoutUsers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultEndLockoutUsers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\EndLockoutUsersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
