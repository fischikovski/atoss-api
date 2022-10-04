<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DeleteVersion $parameters
     * @return \Conventus\Atoss\StructType\DeleteVersionResponse|bool
     */
    public function deleteVersion(\Conventus\Atoss\StructType\DeleteVersion $parameters)
    {
        try {
            $this->setResult($resultDeleteVersion = $this->getSoapClient()->__soapCall('deleteVersion', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DeleteApplication $parameters
     * @return \Conventus\Atoss\StructType\DeleteApplicationResponse|bool
     */
    public function deleteApplication(\Conventus\Atoss\StructType\DeleteApplication $parameters)
    {
        try {
            $this->setResult($resultDeleteApplication = $this->getSoapClient()->__soapCall('deleteApplication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteApplication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteVersionValidityRange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DeleteVersionValidityRange $parameters
     * @return \Conventus\Atoss\StructType\DeleteVersionValidityRangeResponse|bool
     */
    public function deleteVersionValidityRange(\Conventus\Atoss\StructType\DeleteVersionValidityRange $parameters)
    {
        try {
            $this->setResult($resultDeleteVersionValidityRange = $this->getSoapClient()->__soapCall('deleteVersionValidityRange', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteVersionValidityRange;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DeleteEmployee $parameters
     * @return \Conventus\Atoss\StructType\DeleteEmployeeResponse|bool
     */
    public function deleteEmployee(\Conventus\Atoss\StructType\DeleteEmployee $parameters)
    {
        try {
            $this->setResult($resultDeleteEmployee = $this->getSoapClient()->__soapCall('deleteEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\DeleteApplicationResponse|\Conventus\Atoss\StructType\DeleteEmployeeResponse|\Conventus\Atoss\StructType\DeleteVersionResponse|\Conventus\Atoss\StructType\DeleteVersionValidityRangeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
