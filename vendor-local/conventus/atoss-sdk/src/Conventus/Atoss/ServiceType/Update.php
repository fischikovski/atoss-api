<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateManningLevelExtended
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdateManningLevelExtended $parameters
     * @return \Conventus\Atoss\StructType\UpdateManningLevelExtendedResponse|bool
     */
    public function updateManningLevelExtended(\Conventus\Atoss\StructType\UpdateManningLevelExtended $parameters)
    {
        try {
            $this->setResult($resultUpdateManningLevelExtended = $this->getSoapClient()->__soapCall('updateManningLevelExtended', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateManningLevelExtended;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateManningLevelOffer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdateManningLevelOffer $parameters
     * @return \Conventus\Atoss\StructType\UpdateManningLevelOfferResponse|bool
     */
    public function updateManningLevelOffer(\Conventus\Atoss\StructType\UpdateManningLevelOffer $parameters)
    {
        try {
            $this->setResult($resultUpdateManningLevelOffer = $this->getSoapClient()->__soapCall('updateManningLevelOffer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateManningLevelOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdateApplication $parameters
     * @return \Conventus\Atoss\StructType\UpdateApplicationResponse|bool
     */
    public function updateApplication(\Conventus\Atoss\StructType\UpdateApplication $parameters)
    {
        try {
            $this->setResult($resultUpdateApplication = $this->getSoapClient()->__soapCall('updateApplication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateApplication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePlanning
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdatePlanning $parameters
     * @return \Conventus\Atoss\StructType\UpdatePlanningResponse|bool
     */
    public function updatePlanning(\Conventus\Atoss\StructType\UpdatePlanning $parameters)
    {
        try {
            $this->setResult($resultUpdatePlanning = $this->getSoapClient()->__soapCall('updatePlanning', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePlanning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateRepository
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdateRepository $parameters
     * @return \Conventus\Atoss\StructType\UpdateRepositoryResponse|bool
     */
    public function updateRepository(\Conventus\Atoss\StructType\UpdateRepository $parameters)
    {
        try {
            $this->setResult($resultUpdateRepository = $this->getSoapClient()->__soapCall('updateRepository', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateRepository;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePersonalData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdatePersonalData $parameters
     * @return \Conventus\Atoss\StructType\UpdatePersonalDataResponse|bool
     */
    public function updatePersonalData(\Conventus\Atoss\StructType\UpdatePersonalData $parameters)
    {
        try {
            $this->setResult($resultUpdatePersonalData = $this->getSoapClient()->__soapCall('updatePersonalData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePersonalData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateVersionValidityRange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UpdateVersionValidityRange $parameters
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRangeResponse|bool
     */
    public function updateVersionValidityRange(\Conventus\Atoss\StructType\UpdateVersionValidityRange $parameters)
    {
        try {
            $this->setResult($resultUpdateVersionValidityRange = $this->getSoapClient()->__soapCall('updateVersionValidityRange', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateVersionValidityRange;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\UpdateApplicationResponse|\Conventus\Atoss\StructType\UpdateManningLevelExtendedResponse|\Conventus\Atoss\StructType\UpdateManningLevelOfferResponse|\Conventus\Atoss\StructType\UpdatePersonalDataResponse|\Conventus\Atoss\StructType\UpdatePlanningResponse|\Conventus\Atoss\StructType\UpdateRepositoryResponse|\Conventus\Atoss\StructType\UpdateVersionValidityRangeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
