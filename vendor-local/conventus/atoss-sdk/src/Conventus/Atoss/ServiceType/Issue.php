<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Issue ServiceType
 * @subpackage Services
 */
class Issue extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named issueToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\IssueToken $parameters
     * @return \Conventus\Atoss\StructType\IssueTokenResponse|bool
     */
    public function issueToken(\Conventus\Atoss\StructType\IssueToken $parameters)
    {
        try {
            $this->setResult($resultIssueToken = $this->getSoapClient()->__soapCall('issueToken', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIssueToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\IssueTokenResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
