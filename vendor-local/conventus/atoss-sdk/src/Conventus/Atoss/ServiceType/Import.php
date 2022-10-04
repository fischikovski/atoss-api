<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named importXML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\ImportXML $parameters
     * @return \Conventus\Atoss\StructType\ImportXMLResponse|bool
     */
    public function importXML(\Conventus\Atoss\StructType\ImportXML $parameters)
    {
        try {
            $this->setResult($resultImportXML = $this->getSoapClient()->__soapCall('importXML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultImportXML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\ImportXMLResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
