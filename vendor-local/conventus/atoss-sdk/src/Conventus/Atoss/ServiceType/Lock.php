<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Lock ServiceType
 * @subpackage Services
 */
class Lock extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named lockAccountingPeriodForEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees $parameters
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployeesResponse|bool
     */
    public function lockAccountingPeriodForEmployees(\Conventus\Atoss\StructType\LockAccountingPeriodForEmployees $parameters)
    {
        try {
            $this->setResult($resultLockAccountingPeriodForEmployees = $this->getSoapClient()->__soapCall('lockAccountingPeriodForEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLockAccountingPeriodForEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named lockProcessing
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\LockProcessing $parameters
     * @return \Conventus\Atoss\StructType\LockProcessingResponse|bool
     */
    public function lockProcessing(\Conventus\Atoss\StructType\LockProcessing $parameters)
    {
        try {
            $this->setResult($resultLockProcessing = $this->getSoapClient()->__soapCall('lockProcessing', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLockProcessing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named lockWorkplaceSales
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\LockWorkplaceSales $parameters
     * @return \Conventus\Atoss\StructType\LockWorkplaceSalesResponse|bool
     */
    public function lockWorkplaceSales(\Conventus\Atoss\StructType\LockWorkplaceSales $parameters)
    {
        try {
            $this->setResult($resultLockWorkplaceSales = $this->getSoapClient()->__soapCall('lockWorkplaceSales', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLockWorkplaceSales;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named lockAccountingPeriod
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\LockAccountingPeriod $parameters
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodResponse|bool
     */
    public function lockAccountingPeriod(\Conventus\Atoss\StructType\LockAccountingPeriod $parameters)
    {
        try {
            $this->setResult($resultLockAccountingPeriod = $this->getSoapClient()->__soapCall('lockAccountingPeriod', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultLockAccountingPeriod;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployeesResponse|\Conventus\Atoss\StructType\LockAccountingPeriodResponse|\Conventus\Atoss\StructType\LockProcessingResponse|\Conventus\Atoss\StructType\LockWorkplaceSalesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
