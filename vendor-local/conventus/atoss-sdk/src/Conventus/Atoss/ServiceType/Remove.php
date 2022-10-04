<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named removeClockin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RemoveClockin $parameters
     * @return \Conventus\Atoss\StructType\RemoveClockinResponse|bool
     */
    public function removeClockin(\Conventus\Atoss\StructType\RemoveClockin $parameters)
    {
        try {
            $this->setResult($resultRemoveClockin = $this->getSoapClient()->__soapCall('removeClockin', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveClockin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removePlanning
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RemovePlanning $parameters
     * @return \Conventus\Atoss\StructType\RemovePlanningResponse|bool
     */
    public function removePlanning(\Conventus\Atoss\StructType\RemovePlanning $parameters)
    {
        try {
            $this->setResult($resultRemovePlanning = $this->getSoapClient()->__soapCall('removePlanning', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemovePlanning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeBooking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RemoveBooking $parameters
     * @return \Conventus\Atoss\StructType\RemoveBookingResponse|bool
     */
    public function removeBooking(\Conventus\Atoss\StructType\RemoveBooking $parameters)
    {
        try {
            $this->setResult($resultRemoveBooking = $this->getSoapClient()->__soapCall('removeBooking', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeAbsence
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RemoveAbsence $parameters
     * @return \Conventus\Atoss\StructType\RemoveAbsenceResponse|bool
     */
    public function removeAbsence(\Conventus\Atoss\StructType\RemoveAbsence $parameters)
    {
        try {
            $this->setResult($resultRemoveAbsence = $this->getSoapClient()->__soapCall('removeAbsence', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAbsence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\RemoveAbsenceResponse|\Conventus\Atoss\StructType\RemoveBookingResponse|\Conventus\Atoss\StructType\RemoveClockinResponse|\Conventus\Atoss\StructType\RemovePlanningResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
