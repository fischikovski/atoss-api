<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Register ServiceType
 * @subpackage Services
 */
class Register extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named registerEventQueue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RegisterEventQueue $parameters
     * @return \Conventus\Atoss\StructType\RegisterEventQueueResponse|bool
     */
    public function registerEventQueue(\Conventus\Atoss\StructType\RegisterEventQueue $parameters)
    {
        try {
            $this->setResult($resultRegisterEventQueue = $this->getSoapClient()->__soapCall('registerEventQueue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRegisterEventQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\RegisterEventQueueResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
