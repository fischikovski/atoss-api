<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rollback ServiceType
 * @subpackage Services
 */
class Rollback extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rollbackTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\RollbackTransaction $parameters
     * @return \Conventus\Atoss\StructType\RollbackTransactionResponse|bool
     */
    public function rollbackTransaction(\Conventus\Atoss\StructType\RollbackTransaction $parameters)
    {
        try {
            $this->setResult($resultRollbackTransaction = $this->getSoapClient()->__soapCall('rollbackTransaction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRollbackTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\RollbackTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
