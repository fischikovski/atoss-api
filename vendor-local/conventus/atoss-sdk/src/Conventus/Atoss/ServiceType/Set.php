<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named setVersioningRange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetVersioningRange $parameters
     * @return \Conventus\Atoss\StructType\SetVersioningRangeResponse|bool
     */
    public function setVersioningRange(\Conventus\Atoss\StructType\SetVersioningRange $parameters)
    {
        try {
            $this->setResult($resultSetVersioningRange = $this->getSoapClient()->__soapCall('setVersioningRange', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetVersioningRange;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setSessionFloat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetSessionFloat $parameters
     * @return \Conventus\Atoss\StructType\SetSessionFloatResponse|bool
     */
    public function setSessionFloat(\Conventus\Atoss\StructType\SetSessionFloat $parameters)
    {
        try {
            $this->setResult($resultSetSessionFloat = $this->getSoapClient()->__soapCall('setSessionFloat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetSessionFloat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setVersioningDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetVersioningDate $parameters
     * @return \Conventus\Atoss\StructType\SetVersioningDateResponse|bool
     */
    public function setVersioningDate(\Conventus\Atoss\StructType\SetVersioningDate $parameters)
    {
        try {
            $this->setResult($resultSetVersioningDate = $this->getSoapClient()->__soapCall('setVersioningDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetVersioningDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setSessionInteger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetSessionInteger $parameters
     * @return \Conventus\Atoss\StructType\SetSessionIntegerResponse|bool
     */
    public function setSessionInteger(\Conventus\Atoss\StructType\SetSessionInteger $parameters)
    {
        try {
            $this->setResult($resultSetSessionInteger = $this->getSoapClient()->__soapCall('setSessionInteger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetSessionInteger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setSessionDateTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetSessionDateTime $parameters
     * @return \Conventus\Atoss\StructType\SetSessionDateTimeResponse|bool
     */
    public function setSessionDateTime(\Conventus\Atoss\StructType\SetSessionDateTime $parameters)
    {
        try {
            $this->setResult($resultSetSessionDateTime = $this->getSoapClient()->__soapCall('setSessionDateTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetSessionDateTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setDayProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetDayProperties $parameters
     * @return \Conventus\Atoss\StructType\SetDayPropertiesResponse|bool
     */
    public function setDayProperties(\Conventus\Atoss\StructType\SetDayProperties $parameters)
    {
        try {
            $this->setResult($resultSetDayProperties = $this->getSoapClient()->__soapCall('setDayProperties', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetDayProperties;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setApplicationPropertyInteger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetApplicationPropertyInteger $parameters
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyIntegerResponse|bool
     */
    public function setApplicationPropertyInteger(\Conventus\Atoss\StructType\SetApplicationPropertyInteger $parameters)
    {
        try {
            $this->setResult($resultSetApplicationPropertyInteger = $this->getSoapClient()->__soapCall('setApplicationPropertyInteger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetApplicationPropertyInteger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setApplicationPropertyDateTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetApplicationPropertyDateTime $parameters
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyDateTimeResponse|bool
     */
    public function setApplicationPropertyDateTime(\Conventus\Atoss\StructType\SetApplicationPropertyDateTime $parameters)
    {
        try {
            $this->setResult($resultSetApplicationPropertyDateTime = $this->getSoapClient()->__soapCall('setApplicationPropertyDateTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetApplicationPropertyDateTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setApplicationPropertyString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetApplicationPropertyString $parameters
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyStringResponse|bool
     */
    public function setApplicationPropertyString(\Conventus\Atoss\StructType\SetApplicationPropertyString $parameters)
    {
        try {
            $this->setResult($resultSetApplicationPropertyString = $this->getSoapClient()->__soapCall('setApplicationPropertyString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetApplicationPropertyString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setMessageState
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetMessageState $parameters
     * @return \Conventus\Atoss\StructType\SetMessageStateResponse|bool
     */
    public function setMessageState(\Conventus\Atoss\StructType\SetMessageState $parameters)
    {
        try {
            $this->setResult($resultSetMessageState = $this->getSoapClient()->__soapCall('setMessageState', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetMessageState;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setSessionString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SetSessionString $parameters
     * @return \Conventus\Atoss\StructType\SetSessionStringResponse|bool
     */
    public function setSessionString(\Conventus\Atoss\StructType\SetSessionString $parameters)
    {
        try {
            $this->setResult($resultSetSessionString = $this->getSoapClient()->__soapCall('setSessionString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetSessionString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyDateTimeResponse|\Conventus\Atoss\StructType\SetApplicationPropertyIntegerResponse|\Conventus\Atoss\StructType\SetApplicationPropertyStringResponse|\Conventus\Atoss\StructType\SetDayPropertiesResponse|\Conventus\Atoss\StructType\SetMessageStateResponse|\Conventus\Atoss\StructType\SetSessionDateTimeResponse|\Conventus\Atoss\StructType\SetSessionFloatResponse|\Conventus\Atoss\StructType\SetSessionIntegerResponse|\Conventus\Atoss\StructType\SetSessionStringResponse|\Conventus\Atoss\StructType\SetVersioningDateResponse|\Conventus\Atoss\StructType\SetVersioningRangeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
