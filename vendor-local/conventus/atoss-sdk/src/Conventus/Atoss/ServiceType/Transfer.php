<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transfer ServiceType
 * @subpackage Services
 */
class Transfer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named transferPlanVersions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TransferPlanVersions $parameters
     * @return \Conventus\Atoss\StructType\TransferPlanVersionsResponse|bool
     */
    public function transferPlanVersions(\Conventus\Atoss\StructType\TransferPlanVersions $parameters)
    {
        try {
            $this->setResult($resultTransferPlanVersions = $this->getSoapClient()->__soapCall('transferPlanVersions', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferPlanVersions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * transferPlanningPatternIgnoreExisting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting $parameters
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExistingResponse|bool
     */
    public function transferPlanningPatternIgnoreExisting(\Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting $parameters)
    {
        try {
            $this->setResult($resultTransferPlanningPatternIgnoreExisting = $this->getSoapClient()->__soapCall('transferPlanningPatternIgnoreExisting', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferPlanningPatternIgnoreExisting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named transferRegistry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TransferRegistry $parameters
     * @return \Conventus\Atoss\StructType\TransferRegistryResponse|bool
     */
    public function transferRegistry(\Conventus\Atoss\StructType\TransferRegistry $parameters)
    {
        try {
            $this->setResult($resultTransferRegistry = $this->getSoapClient()->__soapCall('transferRegistry', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferRegistry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * transferPlanningPatternVersionExtended
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TransferPlanningPatternVersionExtended $parameters
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternVersionExtendedResponse|bool
     */
    public function transferPlanningPatternVersionExtended(\Conventus\Atoss\StructType\TransferPlanningPatternVersionExtended $parameters)
    {
        try {
            $this->setResult($resultTransferPlanningPatternVersionExtended = $this->getSoapClient()->__soapCall('transferPlanningPatternVersionExtended', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferPlanningPatternVersionExtended;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named transferPlanningPatternVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TransferPlanningPatternVersion $parameters
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternVersionResponse|bool
     */
    public function transferPlanningPatternVersion(\Conventus\Atoss\StructType\TransferPlanningPatternVersion $parameters)
    {
        try {
            $this->setResult($resultTransferPlanningPatternVersion = $this->getSoapClient()->__soapCall('transferPlanningPatternVersion', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferPlanningPatternVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named transferPlanningPattern
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TransferPlanningPattern $parameters
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternResponse|bool
     */
    public function transferPlanningPattern(\Conventus\Atoss\StructType\TransferPlanningPattern $parameters)
    {
        try {
            $this->setResult($resultTransferPlanningPattern = $this->getSoapClient()->__soapCall('transferPlanningPattern', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransferPlanningPattern;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExistingResponse|\Conventus\Atoss\StructType\TransferPlanningPatternResponse|\Conventus\Atoss\StructType\TransferPlanningPatternVersionExtendedResponse|\Conventus\Atoss\StructType\TransferPlanningPatternVersionResponse|\Conventus\Atoss\StructType\TransferPlanVersionsResponse|\Conventus\Atoss\StructType\TransferRegistryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
