<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Commit ServiceType
 * @subpackage Services
 */
class Commit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named commitTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\CommitTransaction $parameters
     * @return \Conventus\Atoss\StructType\CommitTransactionResponse|bool
     */
    public function commitTransaction(\Conventus\Atoss\StructType\CommitTransaction $parameters)
    {
        try {
            $this->setResult($resultCommitTransaction = $this->getSoapClient()->__soapCall('commitTransaction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCommitTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\CommitTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
