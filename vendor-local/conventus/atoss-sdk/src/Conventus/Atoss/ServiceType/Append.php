<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Append ServiceType
 * @subpackage Services
 */
class Append extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named appendNotificationToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\AppendNotificationToken $parameters
     * @return \Conventus\Atoss\StructType\AppendNotificationTokenResponse|bool
     */
    public function appendNotificationToken(\Conventus\Atoss\StructType\AppendNotificationToken $parameters)
    {
        try {
            $this->setResult($resultAppendNotificationToken = $this->getSoapClient()->__soapCall('appendNotificationToken', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAppendNotificationToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\AppendEmployee $parameters
     * @return \Conventus\Atoss\StructType\AppendEmployeeResponse|bool
     */
    public function appendEmployee(\Conventus\Atoss\StructType\AppendEmployee $parameters)
    {
        try {
            $this->setResult($resultAppendEmployee = $this->getSoapClient()->__soapCall('appendEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAppendEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendRepository
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\AppendRepository $parameters
     * @return \Conventus\Atoss\StructType\AppendRepositoryResponse|bool
     */
    public function appendRepository(\Conventus\Atoss\StructType\AppendRepository $parameters)
    {
        try {
            $this->setResult($resultAppendRepository = $this->getSoapClient()->__soapCall('appendRepository', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAppendRepository;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendUserGroupEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\AppendUserGroupEmployee $parameters
     * @return \Conventus\Atoss\StructType\AppendUserGroupEmployeeResponse|bool
     */
    public function appendUserGroupEmployee(\Conventus\Atoss\StructType\AppendUserGroupEmployee $parameters)
    {
        try {
            $this->setResult($resultAppendUserGroupEmployee = $this->getSoapClient()->__soapCall('appendUserGroupEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAppendUserGroupEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendVersionValidityRange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\AppendVersionValidityRange $parameters
     * @return \Conventus\Atoss\StructType\AppendVersionValidityRangeResponse|bool
     */
    public function appendVersionValidityRange(\Conventus\Atoss\StructType\AppendVersionValidityRange $parameters)
    {
        try {
            $this->setResult($resultAppendVersionValidityRange = $this->getSoapClient()->__soapCall('appendVersionValidityRange', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAppendVersionValidityRange;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named appendApplication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\AppendApplication $parameters
     * @return \Conventus\Atoss\StructType\AppendApplicationResponse|bool
     */
    public function appendApplication(\Conventus\Atoss\StructType\AppendApplication $parameters)
    {
        try {
            $this->setResult($resultAppendApplication = $this->getSoapClient()->__soapCall('appendApplication', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAppendApplication;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\AppendApplicationResponse|\Conventus\Atoss\StructType\AppendEmployeeResponse|\Conventus\Atoss\StructType\AppendNotificationTokenResponse|\Conventus\Atoss\StructType\AppendRepositoryResponse|\Conventus\Atoss\StructType\AppendUserGroupEmployeeResponse|\Conventus\Atoss\StructType\AppendVersionValidityRangeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
