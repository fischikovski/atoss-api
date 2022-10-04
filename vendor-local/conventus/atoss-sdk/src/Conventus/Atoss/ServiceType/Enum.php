<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Enum ServiceType
 * @subpackage Services
 */
class Enum extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named enumPendingTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\EnumPendingTasks $parameters
     * @return \Conventus\Atoss\StructType\EnumPendingTasksResponse|bool
     */
    public function enumPendingTasks(\Conventus\Atoss\StructType\EnumPendingTasks $parameters)
    {
        try {
            $this->setResult($resultEnumPendingTasks = $this->getSoapClient()->__soapCall('enumPendingTasks', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultEnumPendingTasks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named enumRunningTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\EnumRunningTasks $parameters
     * @return \Conventus\Atoss\StructType\EnumRunningTasksResponse|bool
     */
    public function enumRunningTasks(\Conventus\Atoss\StructType\EnumRunningTasks $parameters)
    {
        try {
            $this->setResult($resultEnumRunningTasks = $this->getSoapClient()->__soapCall('enumRunningTasks', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultEnumRunningTasks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\EnumPendingTasksResponse|\Conventus\Atoss\StructType\EnumRunningTasksResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
