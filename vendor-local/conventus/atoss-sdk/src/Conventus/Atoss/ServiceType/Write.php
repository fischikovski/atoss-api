<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Write ServiceType
 * @subpackage Services
 */
class Write extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named writeBinary
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteBinary $parameters
     * @return \Conventus\Atoss\StructType\WriteBinaryResponse|bool
     */
    public function writeBinary(\Conventus\Atoss\StructType\WriteBinary $parameters)
    {
        try {
            $this->setResult($resultWriteBinary = $this->getSoapClient()->__soapCall('writeBinary', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteBinary;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeXML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteXML $parameters
     * @return \Conventus\Atoss\StructType\WriteXMLResponse|bool
     */
    public function writeXML(\Conventus\Atoss\StructType\WriteXML $parameters)
    {
        try {
            $this->setResult($resultWriteXML = $this->getSoapClient()->__soapCall('writeXML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteXML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeDateTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteDateTime $parameters
     * @return \Conventus\Atoss\StructType\WriteDateTimeResponse|bool
     */
    public function writeDateTime(\Conventus\Atoss\StructType\WriteDateTime $parameters)
    {
        try {
            $this->setResult($resultWriteDateTime = $this->getSoapClient()->__soapCall('writeDateTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteDateTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeInteger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteInteger $parameters
     * @return \Conventus\Atoss\StructType\WriteIntegerResponse|bool
     */
    public function writeInteger(\Conventus\Atoss\StructType\WriteInteger $parameters)
    {
        try {
            $this->setResult($resultWriteInteger = $this->getSoapClient()->__soapCall('writeInteger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteInteger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeFloat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteFloat $parameters
     * @return \Conventus\Atoss\StructType\WriteFloatResponse|bool
     */
    public function writeFloat(\Conventus\Atoss\StructType\WriteFloat $parameters)
    {
        try {
            $this->setResult($resultWriteFloat = $this->getSoapClient()->__soapCall('writeFloat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteFloat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeLargeString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteLargeString $parameters
     * @return \Conventus\Atoss\StructType\WriteLargeStringResponse|bool
     */
    public function writeLargeString(\Conventus\Atoss\StructType\WriteLargeString $parameters)
    {
        try {
            $this->setResult($resultWriteLargeString = $this->getSoapClient()->__soapCall('writeLargeString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteLargeString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteString $parameters
     * @return \Conventus\Atoss\StructType\WriteStringResponse|bool
     */
    public function writeString(\Conventus\Atoss\StructType\WriteString $parameters)
    {
        try {
            $this->setResult($resultWriteString = $this->getSoapClient()->__soapCall('writeString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named writeDuration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WriteDuration $parameters
     * @return \Conventus\Atoss\StructType\WriteDurationResponse|bool
     */
    public function writeDuration(\Conventus\Atoss\StructType\WriteDuration $parameters)
    {
        try {
            $this->setResult($resultWriteDuration = $this->getSoapClient()->__soapCall('writeDuration', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWriteDuration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\WriteBinaryResponse|\Conventus\Atoss\StructType\WriteDateTimeResponse|\Conventus\Atoss\StructType\WriteDurationResponse|\Conventus\Atoss\StructType\WriteFloatResponse|\Conventus\Atoss\StructType\WriteIntegerResponse|\Conventus\Atoss\StructType\WriteLargeStringResponse|\Conventus\Atoss\StructType\WriteStringResponse|\Conventus\Atoss\StructType\WriteXMLResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
