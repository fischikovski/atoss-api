<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wait ServiceType
 * @subpackage Services
 */
class Wait extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named waitForNextEventsInQueue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\WaitForNextEventsInQueue $parameters
     * @return \Conventus\Atoss\StructType\WaitForNextEventsInQueueResponse|bool
     */
    public function waitForNextEventsInQueue(\Conventus\Atoss\StructType\WaitForNextEventsInQueue $parameters)
    {
        try {
            $this->setResult($resultWaitForNextEventsInQueue = $this->getSoapClient()->__soapCall('waitForNextEventsInQueue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWaitForNextEventsInQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\WaitForNextEventsInQueueResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
