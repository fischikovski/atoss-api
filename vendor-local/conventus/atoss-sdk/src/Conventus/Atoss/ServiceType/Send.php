<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendMessage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SendMessage $parameters
     * @return \Conventus\Atoss\StructType\SendMessageResponse|bool
     */
    public function sendMessage(\Conventus\Atoss\StructType\SendMessage $parameters)
    {
        try {
            $this->setResult($resultSendMessage = $this->getSoapClient()->__soapCall('sendMessage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SendMail $parameters
     * @return \Conventus\Atoss\StructType\SendMailResponse|bool
     */
    public function sendMail(\Conventus\Atoss\StructType\SendMail $parameters)
    {
        try {
            $this->setResult($resultSendMail = $this->getSoapClient()->__soapCall('sendMail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendMailToMailingList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\SendMailToMailingList $parameters
     * @return \Conventus\Atoss\StructType\SendMailToMailingListResponse|bool
     */
    public function sendMailToMailingList(\Conventus\Atoss\StructType\SendMailToMailingList $parameters)
    {
        try {
            $this->setResult($resultSendMailToMailingList = $this->getSoapClient()->__soapCall('sendMailToMailingList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendMailToMailingList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\SendMailResponse|\Conventus\Atoss\StructType\SendMailToMailingListResponse|\Conventus\Atoss\StructType\SendMessageResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
