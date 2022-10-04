<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Revoke ServiceType
 * @subpackage Services
 */
class Revoke extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named revokeToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RevokeToken $parameters
     * @return \Conventus\Atoss\StructType\RevokeTokenResponse|bool
     */
    public function revokeToken(\Conventus\Atoss\StructType\RevokeToken $parameters)
    {
        try {
            $this->setResult($resultRevokeToken = $this->getSoapClient()->__soapCall('revokeToken', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRevokeToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\RevokeTokenResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
