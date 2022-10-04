<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Move ServiceType
 * @subpackage Services
 */
class Move extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named moveVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\MoveVersion $parameters
     * @return \Conventus\Atoss\StructType\MoveVersionResponse|bool
     */
    public function moveVersion(\Conventus\Atoss\StructType\MoveVersion $parameters)
    {
        try {
            $this->setResult($resultMoveVersion = $this->getSoapClient()->__soapCall('moveVersion', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\MoveVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
