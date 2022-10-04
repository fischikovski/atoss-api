<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Unregister ServiceType
 * @subpackage Services
 */
class Unregister extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named unregisterEventQueue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\UnregisterEventQueue $parameters
     * @return \Conventus\Atoss\StructType\UnregisterEventQueueResponse|bool
     */
    public function unregisterEventQueue(\Conventus\Atoss\StructType\UnregisterEventQueue $parameters)
    {
        try {
            $this->setResult($resultUnregisterEventQueue = $this->getSoapClient()->__soapCall('unregisterEventQueue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUnregisterEventQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\UnregisterEventQueueResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
