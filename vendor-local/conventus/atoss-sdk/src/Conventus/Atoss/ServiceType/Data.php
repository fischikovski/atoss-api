<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Data ServiceType
 * @subpackage Services
 */
class Data extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named dataSetMove
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetMove $parameters
     * @return \Conventus\Atoss\StructType\DataSetMoveResponse|bool
     */
    public function dataSetMove(\Conventus\Atoss\StructType\DataSetMove $parameters)
    {
        try {
            $this->setResult($resultDataSetMove = $this->getSoapClient()->__soapCall('dataSetMove', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetMove;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetCount $parameters
     * @return \Conventus\Atoss\StructType\DataSetCountResponse|bool
     */
    public function dataSetCount(\Conventus\Atoss\StructType\DataSetCount $parameters)
    {
        try {
            $this->setResult($resultDataSetCount = $this->getSoapClient()->__soapCall('dataSetCount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetCount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetImport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetImport $parameters
     * @return \Conventus\Atoss\StructType\DataSetImportResponse|bool
     */
    public function dataSetImport(\Conventus\Atoss\StructType\DataSetImport $parameters)
    {
        try {
            $this->setResult($resultDataSetImport = $this->getSoapClient()->__soapCall('dataSetImport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetImport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetAppendBatched
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetAppendBatched $parameters
     * @return \Conventus\Atoss\StructType\DataSetAppendBatchedResponse|bool
     */
    public function dataSetAppendBatched(\Conventus\Atoss\StructType\DataSetAppendBatched $parameters)
    {
        try {
            $this->setResult($resultDataSetAppendBatched = $this->getSoapClient()->__soapCall('dataSetAppendBatched', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetAppendBatched;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetAppend
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetAppend $parameters
     * @return \Conventus\Atoss\StructType\DataSetAppendResponse|bool
     */
    public function dataSetAppend(\Conventus\Atoss\StructType\DataSetAppend $parameters)
    {
        try {
            $this->setResult($resultDataSetAppend = $this->getSoapClient()->__soapCall('dataSetAppend', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetAppend;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetDeleteWithResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetDeleteWithResult $parameters
     * @return \Conventus\Atoss\StructType\DataSetDeleteWithResultResponse|bool
     */
    public function dataSetDeleteWithResult(\Conventus\Atoss\StructType\DataSetDeleteWithResult $parameters)
    {
        try {
            $this->setResult($resultDataSetDeleteWithResult = $this->getSoapClient()->__soapCall('dataSetDeleteWithResult', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetDeleteWithResult;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetCopy
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetCopy $parameters
     * @return \Conventus\Atoss\StructType\DataSetCopyResponse|bool
     */
    public function dataSetCopy(\Conventus\Atoss\StructType\DataSetCopy $parameters)
    {
        try {
            $this->setResult($resultDataSetCopy = $this->getSoapClient()->__soapCall('dataSetCopy', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetCopy;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetDelete
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetDelete $parameters
     * @return \Conventus\Atoss\StructType\DataSetDeleteResponse|bool
     */
    public function dataSetDelete(\Conventus\Atoss\StructType\DataSetDelete $parameters)
    {
        try {
            $this->setResult($resultDataSetDelete = $this->getSoapClient()->__soapCall('dataSetDelete', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetDelete;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetUpdate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetUpdate $parameters
     * @return \Conventus\Atoss\StructType\DataSetUpdateResponse|bool
     */
    public function dataSetUpdate(\Conventus\Atoss\StructType\DataSetUpdate $parameters)
    {
        try {
            $this->setResult($resultDataSetUpdate = $this->getSoapClient()->__soapCall('dataSetUpdate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetUpdate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetUpdateWithResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetUpdateWithResult $parameters
     * @return \Conventus\Atoss\StructType\DataSetUpdateWithResultResponse|bool
     */
    public function dataSetUpdateWithResult(\Conventus\Atoss\StructType\DataSetUpdateWithResult $parameters)
    {
        try {
            $this->setResult($resultDataSetUpdateWithResult = $this->getSoapClient()->__soapCall('dataSetUpdateWithResult', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetUpdateWithResult;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetDeleteBatched
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetDeleteBatched $parameters
     * @return \Conventus\Atoss\StructType\DataSetDeleteBatchedResponse|bool
     */
    public function dataSetDeleteBatched(\Conventus\Atoss\StructType\DataSetDeleteBatched $parameters)
    {
        try {
            $this->setResult($resultDataSetDeleteBatched = $this->getSoapClient()->__soapCall('dataSetDeleteBatched', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetDeleteBatched;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetPurge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetPurge $parameters
     * @return \Conventus\Atoss\StructType\DataSetPurgeResponse|bool
     */
    public function dataSetPurge(\Conventus\Atoss\StructType\DataSetPurge $parameters)
    {
        try {
            $this->setResult($resultDataSetPurge = $this->getSoapClient()->__soapCall('dataSetPurge', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetPurge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetGet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetGet $parameters
     * @return \Conventus\Atoss\StructType\DataSetGetResponse|bool
     */
    public function dataSetGet(\Conventus\Atoss\StructType\DataSetGet $parameters)
    {
        try {
            $this->setResult($resultDataSetGet = $this->getSoapClient()->__soapCall('dataSetGet', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetGet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named dataSetUpdateBatched
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\DataSetUpdateBatched $parameters
     * @return \Conventus\Atoss\StructType\DataSetUpdateBatchedResponse|bool
     */
    public function dataSetUpdateBatched(\Conventus\Atoss\StructType\DataSetUpdateBatched $parameters)
    {
        try {
            $this->setResult($resultDataSetUpdateBatched = $this->getSoapClient()->__soapCall('dataSetUpdateBatched', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDataSetUpdateBatched;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\DataSetAppendBatchedResponse|\Conventus\Atoss\StructType\DataSetAppendResponse|\Conventus\Atoss\StructType\DataSetCopyResponse|\Conventus\Atoss\StructType\DataSetCountResponse|\Conventus\Atoss\StructType\DataSetDeleteBatchedResponse|\Conventus\Atoss\StructType\DataSetDeleteResponse|\Conventus\Atoss\StructType\DataSetDeleteWithResultResponse|\Conventus\Atoss\StructType\DataSetGetResponse|\Conventus\Atoss\StructType\DataSetImportResponse|\Conventus\Atoss\StructType\DataSetMoveResponse|\Conventus\Atoss\StructType\DataSetPurgeResponse|\Conventus\Atoss\StructType\DataSetUpdateBatchedResponse|\Conventus\Atoss\StructType\DataSetUpdateResponse|\Conventus\Atoss\StructType\DataSetUpdateWithResultResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
