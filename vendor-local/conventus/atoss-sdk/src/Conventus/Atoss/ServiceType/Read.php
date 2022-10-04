<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Read ServiceType
 * @subpackage Services
 */
class Read extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named readDuration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadDuration $parameters
     * @return \Conventus\Atoss\StructType\ReadDurationResponse|bool
     */
    public function readDuration(\Conventus\Atoss\StructType\ReadDuration $parameters)
    {
        try {
            $this->setResult($resultReadDuration = $this->getSoapClient()->__soapCall('readDuration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadDuration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readFloat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadFloat $parameters
     * @return \Conventus\Atoss\StructType\ReadFloatResponse|bool
     */
    public function readFloat(\Conventus\Atoss\StructType\ReadFloat $parameters)
    {
        try {
            $this->setResult($resultReadFloat = $this->getSoapClient()->__soapCall('readFloat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadFloat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readInteger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadInteger $parameters
     * @return \Conventus\Atoss\StructType\ReadIntegerResponse|bool
     */
    public function readInteger(\Conventus\Atoss\StructType\ReadInteger $parameters)
    {
        try {
            $this->setResult($resultReadInteger = $this->getSoapClient()->__soapCall('readInteger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadInteger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadString $parameters
     * @return \Conventus\Atoss\StructType\ReadStringResponse|bool
     */
    public function readString(\Conventus\Atoss\StructType\ReadString $parameters)
    {
        try {
            $this->setResult($resultReadString = $this->getSoapClient()->__soapCall('readString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readDateTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadDateTime $parameters
     * @return \Conventus\Atoss\StructType\ReadDateTimeResponse|bool
     */
    public function readDateTime(\Conventus\Atoss\StructType\ReadDateTime $parameters)
    {
        try {
            $this->setResult($resultReadDateTime = $this->getSoapClient()->__soapCall('readDateTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadDateTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readXML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadXML $parameters
     * @return \Conventus\Atoss\StructType\ReadXMLResponse|bool
     */
    public function readXML(\Conventus\Atoss\StructType\ReadXML $parameters)
    {
        try {
            $this->setResult($resultReadXML = $this->getSoapClient()->__soapCall('readXML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadXML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readLargeString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadLargeString $parameters
     * @return \Conventus\Atoss\StructType\ReadLargeStringResponse|bool
     */
    public function readLargeString(\Conventus\Atoss\StructType\ReadLargeString $parameters)
    {
        try {
            $this->setResult($resultReadLargeString = $this->getSoapClient()->__soapCall('readLargeString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadLargeString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBinary
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ReadBinary $parameters
     * @return \Conventus\Atoss\StructType\ReadBinaryResponse|bool
     */
    public function readBinary(\Conventus\Atoss\StructType\ReadBinary $parameters)
    {
        try {
            $this->setResult($resultReadBinary = $this->getSoapClient()->__soapCall('readBinary', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBinary;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ReadBinaryResponse|\Conventus\Atoss\StructType\ReadDateTimeResponse|\Conventus\Atoss\StructType\ReadDurationResponse|\Conventus\Atoss\StructType\ReadFloatResponse|\Conventus\Atoss\StructType\ReadIntegerResponse|\Conventus\Atoss\StructType\ReadLargeStringResponse|\Conventus\Atoss\StructType\ReadStringResponse|\Conventus\Atoss\StructType\ReadXMLResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
