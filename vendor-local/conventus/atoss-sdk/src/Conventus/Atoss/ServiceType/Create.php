<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createAbsence
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CreateAbsence $parameters
     * @return \Conventus\Atoss\StructType\CreateAbsenceResponse|bool
     */
    public function createAbsence(\Conventus\Atoss\StructType\CreateAbsence $parameters)
    {
        try {
            $this->setResult($resultCreateAbsence = $this->getSoapClient()->__soapCall('createAbsence', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAbsence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBooking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CreateBooking $parameters
     * @return \Conventus\Atoss\StructType\CreateBookingResponse|bool
     */
    public function createBooking(\Conventus\Atoss\StructType\CreateBooking $parameters)
    {
        try {
            $this->setResult($resultCreateBooking = $this->getSoapClient()->__soapCall('createBooking', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPlanning
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CreatePlanning $parameters
     * @return \Conventus\Atoss\StructType\CreatePlanningResponse|bool
     */
    public function createPlanning(\Conventus\Atoss\StructType\CreatePlanning $parameters)
    {
        try {
            $this->setResult($resultCreatePlanning = $this->getSoapClient()->__soapCall('createPlanning', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePlanning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createManningLevelExtended
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CreateManningLevelExtended $parameters
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtendedResponse|bool
     */
    public function createManningLevelExtended(\Conventus\Atoss\StructType\CreateManningLevelExtended $parameters)
    {
        try {
            $this->setResult($resultCreateManningLevelExtended = $this->getSoapClient()->__soapCall('createManningLevelExtended', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateManningLevelExtended;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createClockin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CreateClockin $parameters
     * @return \Conventus\Atoss\StructType\CreateClockinResponse|bool
     */
    public function createClockin(\Conventus\Atoss\StructType\CreateClockin $parameters)
    {
        try {
            $this->setResult($resultCreateClockin = $this->getSoapClient()->__soapCall('createClockin', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateClockin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\CreateAbsenceResponse|\Conventus\Atoss\StructType\CreateBookingResponse|\Conventus\Atoss\StructType\CreateClockinResponse|\Conventus\Atoss\StructType\CreateManningLevelExtendedResponse|\Conventus\Atoss\StructType\CreatePlanningResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
