<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Execute ServiceType
 * @subpackage Services
 */
class Execute extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named executeTaskImmediatly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ExecuteTaskImmediatly $parameters
     * @return \Conventus\Atoss\StructType\ExecuteTaskImmediatlyResponse|bool
     */
    public function executeTaskImmediatly(\Conventus\Atoss\StructType\ExecuteTaskImmediatly $parameters)
    {
        try {
            $this->setResult($resultExecuteTaskImmediatly = $this->getSoapClient()->__soapCall('executeTaskImmediatly', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteTaskImmediatly;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ExecuteTaskImmediatlyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
