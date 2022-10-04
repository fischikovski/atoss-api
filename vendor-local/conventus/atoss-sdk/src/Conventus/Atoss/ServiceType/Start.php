<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Start ServiceType
 * @subpackage Services
 */
class Start extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named startTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\StartTransaction $parameters
     * @return \Conventus\Atoss\StructType\StartTransactionResponse|bool
     */
    public function startTransaction(\Conventus\Atoss\StructType\StartTransaction $parameters)
    {
        try {
            $this->setResult($resultStartTransaction = $this->getSoapClient()->__soapCall('startTransaction', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultStartTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named startExternalImport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\StartExternalImport $parameters
     * @return \Conventus\Atoss\StructType\StartExternalImportResponse|bool
     */
    public function startExternalImport(\Conventus\Atoss\StructType\StartExternalImport $parameters)
    {
        try {
            $this->setResult($resultStartExternalImport = $this->getSoapClient()->__soapCall('startExternalImport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultStartExternalImport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\StartExternalImportResponse|\Conventus\Atoss\StructType\StartTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
