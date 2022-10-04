<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Licence ServiceType
 * @subpackage Services
 */
class Licence extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named licenceEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\LicenceEmployee $parameters
     * @return \Conventus\Atoss\StructType\LicenceEmployeeResponse|bool
     */
    public function licenceEmployee(\Conventus\Atoss\StructType\LicenceEmployee $parameters)
    {
        try {
            $this->setResult($resultLicenceEmployee = $this->getSoapClient()->__soapCall('licenceEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLicenceEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\LicenceEmployeeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
