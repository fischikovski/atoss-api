<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shut ServiceType
 * @subpackage Services
 */
class Shut extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named shutDownServer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ShutDownServer $parameters
     * @return \Conventus\Atoss\StructType\ShutDownServerResponse|bool
     */
    public function shutDownServer(\Conventus\Atoss\StructType\ShutDownServer $parameters)
    {
        try {
            $this->setResult($resultShutDownServer = $this->getSoapClient()->__soapCall('shutDownServer', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultShutDownServer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ShutDownServerResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
