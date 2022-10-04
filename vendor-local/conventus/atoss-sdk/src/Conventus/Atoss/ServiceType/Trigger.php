<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Trigger ServiceType
 * @subpackage Services
 */
class Trigger extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named triggerWorkflowEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\TriggerWorkflowEvent $parameters
     * @return \Conventus\Atoss\StructType\TriggerWorkflowEventResponse|bool
     */
    public function triggerWorkflowEvent(\Conventus\Atoss\StructType\TriggerWorkflowEvent $parameters)
    {
        try {
            $this->setResult($resultTriggerWorkflowEvent = $this->getSoapClient()->__soapCall('triggerWorkflowEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTriggerWorkflowEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\TriggerWorkflowEventResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
