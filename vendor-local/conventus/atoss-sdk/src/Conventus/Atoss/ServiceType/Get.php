<?php

declare(strict_types=1);

namespace Conventus\Atoss\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getTableFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetTableFields $parameters
     * @return \Conventus\Atoss\StructType\GetTableFieldsResponse|bool
     */
    public function getTableFields(\Conventus\Atoss\StructType\GetTableFields $parameters)
    {
        try {
            $this->setResult($resultGetTableFields = $this->getSoapClient()->__soapCall('getTableFields', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTableFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCalculatedValuesExtended
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetCalculatedValuesExtended $parameters
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtendedResponse|bool
     */
    public function getCalculatedValuesExtended(\Conventus\Atoss\StructType\GetCalculatedValuesExtended $parameters)
    {
        try {
            $this->setResult($resultGetCalculatedValuesExtended = $this->getSoapClient()->__soapCall('getCalculatedValuesExtended', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCalculatedValuesExtended;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetReport $parameters
     * @return \Conventus\Atoss\StructType\GetReportResponse|bool
     */
    public function getReport(\Conventus\Atoss\StructType\GetReport $parameters)
    {
        try {
            $this->setResult($resultGetReport = $this->getSoapClient()->__soapCall('getReport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWorkplaces
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetWorkplaces $parameters
     * @return \Conventus\Atoss\StructType\GetWorkplacesResponse|bool
     */
    public function getWorkplaces(\Conventus\Atoss\StructType\GetWorkplaces $parameters)
    {
        try {
            $this->setResult($resultGetWorkplaces = $this->getSoapClient()->__soapCall('getWorkplaces', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetWorkplaces;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getApplications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetApplications $parameters
     * @return \Conventus\Atoss\StructType\GetApplicationsResponse|bool
     */
    public function getApplications(\Conventus\Atoss\StructType\GetApplications $parameters)
    {
        try {
            $this->setResult($resultGetApplications = $this->getSoapClient()->__soapCall('getApplications', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApplications;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLastMessage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetLastMessage $parameters
     * @return \Conventus\Atoss\StructType\GetLastMessageResponse|bool
     */
    public function getLastMessage(\Conventus\Atoss\StructType\GetLastMessage $parameters)
    {
        try {
            $this->setResult($resultGetLastMessage = $this->getSoapClient()->__soapCall('getLastMessage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLastMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSessionInteger
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetSessionInteger $parameters
     * @return \Conventus\Atoss\StructType\GetSessionIntegerResponse|bool
     */
    public function getSessionInteger(\Conventus\Atoss\StructType\GetSessionInteger $parameters)
    {
        try {
            $this->setResult($resultGetSessionInteger = $this->getSoapClient()->__soapCall('getSessionInteger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSessionInteger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetEmployees $parameters
     * @return \Conventus\Atoss\StructType\GetEmployeesResponse|bool
     */
    public function getEmployees(\Conventus\Atoss\StructType\GetEmployees $parameters)
    {
        try {
            $this->setResult($resultGetEmployees = $this->getSoapClient()->__soapCall('getEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWorkflowConfigurationParameter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetWorkflowConfigurationParameter $parameters
     * @return \Conventus\Atoss\StructType\GetWorkflowConfigurationParameterResponse|bool
     */
    public function getWorkflowConfigurationParameter(\Conventus\Atoss\StructType\GetWorkflowConfigurationParameter $parameters)
    {
        try {
            $this->setResult($resultGetWorkflowConfigurationParameter = $this->getSoapClient()->__soapCall('getWorkflowConfigurationParameter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetWorkflowConfigurationParameter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSessionFloat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetSessionFloat $parameters
     * @return \Conventus\Atoss\StructType\GetSessionFloatResponse|bool
     */
    public function getSessionFloat(\Conventus\Atoss\StructType\GetSessionFloat $parameters)
    {
        try {
            $this->setResult($resultGetSessionFloat = $this->getSoapClient()->__soapCall('getSessionFloat', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSessionFloat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSessionString
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetSessionString $parameters
     * @return \Conventus\Atoss\StructType\GetSessionStringResponse|bool
     */
    public function getSessionString(\Conventus\Atoss\StructType\GetSessionString $parameters)
    {
        try {
            $this->setResult($resultGetSessionString = $this->getSoapClient()->__soapCall('getSessionString', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSessionString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSubstitutes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetSubstitutes $parameters
     * @return \Conventus\Atoss\StructType\GetSubstitutesResponse|bool
     */
    public function getSubstitutes(\Conventus\Atoss\StructType\GetSubstitutes $parameters)
    {
        try {
            $this->setResult($resultGetSubstitutes = $this->getSoapClient()->__soapCall('getSubstitutes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSubstitutes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVersionValidityRanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetVersionValidityRanges $parameters
     * @return \Conventus\Atoss\StructType\GetVersionValidityRangesResponse|bool
     */
    public function getVersionValidityRanges(\Conventus\Atoss\StructType\GetVersionValidityRanges $parameters)
    {
        try {
            $this->setResult($resultGetVersionValidityRanges = $this->getSoapClient()->__soapCall('getVersionValidityRanges', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVersionValidityRanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHolidayCalendar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetHolidayCalendar $parameters
     * @return \Conventus\Atoss\StructType\GetHolidayCalendarResponse|bool
     */
    public function getHolidayCalendar(\Conventus\Atoss\StructType\GetHolidayCalendar $parameters)
    {
        try {
            $this->setResult($resultGetHolidayCalendar = $this->getSoapClient()->__soapCall('getHolidayCalendar', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHolidayCalendar;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBadgeEmployee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetBadgeEmployee $parameters
     * @return \Conventus\Atoss\StructType\GetBadgeEmployeeResponse|bool
     */
    public function getBadgeEmployee(\Conventus\Atoss\StructType\GetBadgeEmployee $parameters)
    {
        try {
            $this->setResult($resultGetBadgeEmployee = $this->getSoapClient()->__soapCall('getBadgeEmployee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBadgeEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLoggedOnUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetLoggedOnUser $parameters
     * @return \Conventus\Atoss\StructType\GetLoggedOnUserResponse|bool
     */
    public function getLoggedOnUser(\Conventus\Atoss\StructType\GetLoggedOnUser $parameters)
    {
        try {
            $this->setResult($resultGetLoggedOnUser = $this->getSoapClient()->__soapCall('getLoggedOnUser', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLoggedOnUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVacation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetVacation $parameters
     * @return \Conventus\Atoss\StructType\GetVacationResponse|bool
     */
    public function getVacation(\Conventus\Atoss\StructType\GetVacation $parameters)
    {
        try {
            $this->setResult($resultGetVacation = $this->getSoapClient()->__soapCall('getVacation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVacation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getApplicationProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetApplicationProperties $parameters
     * @return \Conventus\Atoss\StructType\GetApplicationPropertiesResponse|bool
     */
    public function getApplicationProperties(\Conventus\Atoss\StructType\GetApplicationProperties $parameters)
    {
        try {
            $this->setResult($resultGetApplicationProperties = $this->getSoapClient()->__soapCall('getApplicationProperties', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApplicationProperties;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCalculatedValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetCalculatedValue $parameters
     * @return \Conventus\Atoss\StructType\GetCalculatedValueResponse|bool
     */
    public function getCalculatedValue(\Conventus\Atoss\StructType\GetCalculatedValue $parameters)
    {
        try {
            $this->setResult($resultGetCalculatedValue = $this->getSoapClient()->__soapCall('getCalculatedValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCalculatedValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEmployeeState
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetEmployeeState $parameters
     * @return \Conventus\Atoss\StructType\GetEmployeeStateResponse|bool
     */
    public function getEmployeeState(\Conventus\Atoss\StructType\GetEmployeeState $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeState = $this->getSoapClient()->__soapCall('getEmployeeState', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEmployeeState;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVacationYearRecords
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetVacationYearRecords $parameters
     * @return \Conventus\Atoss\StructType\GetVacationYearRecordsResponse|bool
     */
    public function getVacationYearRecords(\Conventus\Atoss\StructType\GetVacationYearRecords $parameters)
    {
        try {
            $this->setResult($resultGetVacationYearRecords = $this->getSoapClient()->__soapCall('getVacationYearRecords', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVacationYearRecords;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVersioningInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetVersioningInfo $parameters
     * @return \Conventus\Atoss\StructType\GetVersioningInfoResponse|bool
     */
    public function getVersioningInfo(\Conventus\Atoss\StructType\GetVersioningInfo $parameters)
    {
        try {
            $this->setResult($resultGetVersioningInfo = $this->getSoapClient()->__soapCall('getVersioningInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVersioningInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetAccounts $parameters
     * @return \Conventus\Atoss\StructType\GetAccountsResponse|bool
     */
    public function getAccounts(\Conventus\Atoss\StructType\GetAccounts $parameters)
    {
        try {
            $this->setResult($resultGetAccounts = $this->getSoapClient()->__soapCall('getAccounts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAbsenceTotals
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetAbsenceTotals $parameters
     * @return \Conventus\Atoss\StructType\GetAbsenceTotalsResponse|bool
     */
    public function getAbsenceTotals(\Conventus\Atoss\StructType\GetAbsenceTotals $parameters)
    {
        try {
            $this->setResult($resultGetAbsenceTotals = $this->getSoapClient()->__soapCall('getAbsenceTotals', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAbsenceTotals;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCostCenters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetCostCenters $parameters
     * @return \Conventus\Atoss\StructType\GetCostCentersResponse|bool
     */
    public function getCostCenters(\Conventus\Atoss\StructType\GetCostCenters $parameters)
    {
        try {
            $this->setResult($resultGetCostCenters = $this->getSoapClient()->__soapCall('getCostCenters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCostCenters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReportEntities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetReportEntities $parameters
     * @return \Conventus\Atoss\StructType\GetReportEntitiesResponse|bool
     */
    public function getReportEntities(\Conventus\Atoss\StructType\GetReportEntities $parameters)
    {
        try {
            $this->setResult($resultGetReportEntities = $this->getSoapClient()->__soapCall('getReportEntities', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReportEntities;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getClockinWithCorrelation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetClockinWithCorrelation $parameters
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelationResponse|bool
     */
    public function getClockinWithCorrelation(\Conventus\Atoss\StructType\GetClockinWithCorrelation $parameters)
    {
        try {
            $this->setResult($resultGetClockinWithCorrelation = $this->getSoapClient()->__soapCall('getClockinWithCorrelation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetClockinWithCorrelation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDepartments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetDepartments $parameters
     * @return \Conventus\Atoss\StructType\GetDepartmentsResponse|bool
     */
    public function getDepartments(\Conventus\Atoss\StructType\GetDepartments $parameters)
    {
        try {
            $this->setResult($resultGetDepartments = $this->getSoapClient()->__soapCall('getDepartments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDepartments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDepartmentEmployees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetDepartmentEmployees $parameters
     * @return \Conventus\Atoss\StructType\GetDepartmentEmployeesResponse|bool
     */
    public function getDepartmentEmployees(\Conventus\Atoss\StructType\GetDepartmentEmployees $parameters)
    {
        try {
            $this->setResult($resultGetDepartmentEmployees = $this->getSoapClient()->__soapCall('getDepartmentEmployees', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDepartmentEmployees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAbsence
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetAbsence $parameters
     * @return \Conventus\Atoss\StructType\GetAbsenceResponse|bool
     */
    public function getAbsence(\Conventus\Atoss\StructType\GetAbsence $parameters)
    {
        try {
            $this->setResult($resultGetAbsence = $this->getSoapClient()->__soapCall('getAbsence', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAbsence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepository
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetRepository $parameters
     * @return \Conventus\Atoss\StructType\GetRepositoryResponse|bool
     */
    public function getRepository(\Conventus\Atoss\StructType\GetRepository $parameters)
    {
        try {
            $this->setResult($resultGetRepository = $this->getSoapClient()->__soapCall('getRepository', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRepository;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManningLevelOffers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetManningLevelOffers $parameters
     * @return \Conventus\Atoss\StructType\GetManningLevelOffersResponse|bool
     */
    public function getManningLevelOffers(\Conventus\Atoss\StructType\GetManningLevelOffers $parameters)
    {
        try {
            $this->setResult($resultGetManningLevelOffers = $this->getSoapClient()->__soapCall('getManningLevelOffers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetManningLevelOffers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSessionDateTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetSessionDateTime $parameters
     * @return \Conventus\Atoss\StructType\GetSessionDateTimeResponse|bool
     */
    public function getSessionDateTime(\Conventus\Atoss\StructType\GetSessionDateTime $parameters)
    {
        try {
            $this->setResult($resultGetSessionDateTime = $this->getSoapClient()->__soapCall('getSessionDateTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSessionDateTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProcessingQueue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetProcessingQueue $parameters
     * @return \Conventus\Atoss\StructType\GetProcessingQueueResponse|bool
     */
    public function getProcessingQueue(\Conventus\Atoss\StructType\GetProcessingQueue $parameters)
    {
        try {
            $this->setResult($resultGetProcessingQueue = $this->getSoapClient()->__soapCall('getProcessingQueue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProcessingQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRecordCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetRecordCount $parameters
     * @return \Conventus\Atoss\StructType\GetRecordCountResponse|bool
     */
    public function getRecordCount(\Conventus\Atoss\StructType\GetRecordCount $parameters)
    {
        try {
            $this->setResult($resultGetRecordCount = $this->getSoapClient()->__soapCall('getRecordCount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRecordCount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReportDesigns
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetReportDesigns $parameters
     * @return \Conventus\Atoss\StructType\GetReportDesignsResponse|bool
     */
    public function getReportDesigns(\Conventus\Atoss\StructType\GetReportDesigns $parameters)
    {
        try {
            $this->setResult($resultGetReportDesigns = $this->getSoapClient()->__soapCall('getReportDesigns', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReportDesigns;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTables
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetTables $parameters
     * @return \Conventus\Atoss\StructType\GetTablesResponse|bool
     */
    public function getTables(\Conventus\Atoss\StructType\GetTables $parameters)
    {
        try {
            $this->setResult($resultGetTables = $this->getSoapClient()->__soapCall('getTables', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTables;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetBookings $parameters
     * @return \Conventus\Atoss\StructType\GetBookingsResponse|bool
     */
    public function getBookings(\Conventus\Atoss\StructType\GetBookings $parameters)
    {
        try {
            $this->setResult($resultGetBookings = $this->getSoapClient()->__soapCall('getBookings', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetShift $parameters
     * @return \Conventus\Atoss\StructType\GetShiftResponse|bool
     */
    public function getShift(\Conventus\Atoss\StructType\GetShift $parameters)
    {
        try {
            $this->setResult($resultGetShift = $this->getSoapClient()->__soapCall('getShift', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMonthlyReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetMonthlyReport $parameters
     * @return \Conventus\Atoss\StructType\GetMonthlyReportResponse|bool
     */
    public function getMonthlyReport(\Conventus\Atoss\StructType\GetMonthlyReport $parameters)
    {
        try {
            $this->setResult($resultGetMonthlyReport = $this->getSoapClient()->__soapCall('getMonthlyReport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMonthlyReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLicenceModules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetLicenceModules $parameters
     * @return \Conventus\Atoss\StructType\GetLicenceModulesResponse|bool
     */
    public function getLicenceModules(\Conventus\Atoss\StructType\GetLicenceModules $parameters)
    {
        try {
            $this->setResult($resultGetLicenceModules = $this->getSoapClient()->__soapCall('getLicenceModules', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLicenceModules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHolidays
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetHolidays $parameters
     * @return \Conventus\Atoss\StructType\GetHolidaysResponse|bool
     */
    public function getHolidays(\Conventus\Atoss\StructType\GetHolidays $parameters)
    {
        try {
            $this->setResult($resultGetHolidays = $this->getSoapClient()->__soapCall('getHolidays', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHolidays;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActiveFollowUpApplications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetActiveFollowUpApplications $parameters
     * @return \Conventus\Atoss\StructType\GetActiveFollowUpApplicationsResponse|bool
     */
    public function getActiveFollowUpApplications(\Conventus\Atoss\StructType\GetActiveFollowUpApplications $parameters)
    {
        try {
            $this->setResult($resultGetActiveFollowUpApplications = $this->getSoapClient()->__soapCall('getActiveFollowUpApplications', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetActiveFollowUpApplications;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBadges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetBadges $parameters
     * @return \Conventus\Atoss\StructType\GetBadgesResponse|bool
     */
    public function getBadges(\Conventus\Atoss\StructType\GetBadges $parameters)
    {
        try {
            $this->setResult($resultGetBadges = $this->getSoapClient()->__soapCall('getBadges', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBadges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDepartmentTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetDepartmentTree $parameters
     * @return \Conventus\Atoss\StructType\GetDepartmentTreeResponse|bool
     */
    public function getDepartmentTree(\Conventus\Atoss\StructType\GetDepartmentTree $parameters)
    {
        try {
            $this->setResult($resultGetDepartmentTree = $this->getSoapClient()->__soapCall('getDepartmentTree', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDepartmentTree;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEmployeeGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetEmployeeGroups $parameters
     * @return \Conventus\Atoss\StructType\GetEmployeeGroupsResponse|bool
     */
    public function getEmployeeGroups(\Conventus\Atoss\StructType\GetEmployeeGroups $parameters)
    {
        try {
            $this->setResult($resultGetEmployeeGroups = $this->getSoapClient()->__soapCall('getEmployeeGroups', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEmployeeGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMessages
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetMessages $parameters
     * @return \Conventus\Atoss\StructType\GetMessagesResponse|bool
     */
    public function getMessages(\Conventus\Atoss\StructType\GetMessages $parameters)
    {
        try {
            $this->setResult($resultGetMessages = $this->getSoapClient()->__soapCall('getMessages', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPlannings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetPlannings $parameters
     * @return \Conventus\Atoss\StructType\GetPlanningsResponse|bool
     */
    public function getPlannings(\Conventus\Atoss\StructType\GetPlannings $parameters)
    {
        try {
            $this->setResult($resultGetPlannings = $this->getSoapClient()->__soapCall('getPlannings', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPlannings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAbsenceChangeLogs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetAbsenceChangeLogs $parameters
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogsResponse|bool
     */
    public function getAbsenceChangeLogs(\Conventus\Atoss\StructType\GetAbsenceChangeLogs $parameters)
    {
        try {
            $this->setResult($resultGetAbsenceChangeLogs = $this->getSoapClient()->__soapCall('getAbsenceChangeLogs', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAbsenceChangeLogs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLastActivity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetLastActivity $parameters
     * @return \Conventus\Atoss\StructType\GetLastActivityResponse|bool
     */
    public function getLastActivity(\Conventus\Atoss\StructType\GetLastActivity $parameters)
    {
        try {
            $this->setResult($resultGetLastActivity = $this->getSoapClient()->__soapCall('getLastActivity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLastActivity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserWorkflows
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetUserWorkflows $parameters
     * @return \Conventus\Atoss\StructType\GetUserWorkflowsResponse|bool
     */
    public function getUserWorkflows(\Conventus\Atoss\StructType\GetUserWorkflows $parameters)
    {
        try {
            $this->setResult($resultGetUserWorkflows = $this->getSoapClient()->__soapCall('getUserWorkflows', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserWorkflows;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVersions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetVersions $parameters
     * @return \Conventus\Atoss\StructType\GetVersionsResponse|bool
     */
    public function getVersions(\Conventus\Atoss\StructType\GetVersions $parameters)
    {
        try {
            $this->setResult($resultGetVersions = $this->getSoapClient()->__soapCall('getVersions', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVersions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReportParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetReportParameters $parameters
     * @return \Conventus\Atoss\StructType\GetReportParametersResponse|bool
     */
    public function getReportParameters(\Conventus\Atoss\StructType\GetReportParameters $parameters)
    {
        try {
            $this->setResult($resultGetReportParameters = $this->getSoapClient()->__soapCall('getReportParameters', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetProjects $parameters
     * @return \Conventus\Atoss\StructType\GetProjectsResponse|bool
     */
    public function getProjects(\Conventus\Atoss\StructType\GetProjects $parameters)
    {
        try {
            $this->setResult($resultGetProjects = $this->getSoapClient()->__soapCall('getProjects', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProjects;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFreeBalanceValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetFreeBalanceValue $parameters
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValueResponse|bool
     */
    public function getFreeBalanceValue(\Conventus\Atoss\StructType\GetFreeBalanceValue $parameters)
    {
        try {
            $this->setResult($resultGetFreeBalanceValue = $this->getSoapClient()->__soapCall('getFreeBalanceValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFreeBalanceValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getServerInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetServerInformation $parameters
     * @return \Conventus\Atoss\StructType\GetServerInformationResponse|bool
     */
    public function getServerInformation(\Conventus\Atoss\StructType\GetServerInformation $parameters)
    {
        try {
            $this->setResult($resultGetServerInformation = $this->getSoapClient()->__soapCall('getServerInformation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetServerInformation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimeAccountBalance
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetTimeAccountBalance $parameters
     * @return \Conventus\Atoss\StructType\GetTimeAccountBalanceResponse|bool
     */
    public function getTimeAccountBalance(\Conventus\Atoss\StructType\GetTimeAccountBalance $parameters)
    {
        try {
            $this->setResult($resultGetTimeAccountBalance = $this->getSoapClient()->__soapCall('getTimeAccountBalance', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTimeAccountBalance;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFileFromUserHome
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetFileFromUserHome $parameters
     * @return \Conventus\Atoss\StructType\GetFileFromUserHomeResponse|bool
     */
    public function getFileFromUserHome(\Conventus\Atoss\StructType\GetFileFromUserHome $parameters)
    {
        try {
            $this->setResult($resultGetFileFromUserHome = $this->getSoapClient()->__soapCall('getFileFromUserHome', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFileFromUserHome;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFreeBalanceValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetFreeBalanceValues $parameters
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValuesResponse|bool
     */
    public function getFreeBalanceValues(\Conventus\Atoss\StructType\GetFreeBalanceValues $parameters)
    {
        try {
            $this->setResult($resultGetFreeBalanceValues = $this->getSoapClient()->__soapCall('getFreeBalanceValues', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFreeBalanceValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFreeBalances
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetFreeBalances $parameters
     * @return \Conventus\Atoss\StructType\GetFreeBalancesResponse|bool
     */
    public function getFreeBalances(\Conventus\Atoss\StructType\GetFreeBalances $parameters)
    {
        try {
            $this->setResult($resultGetFreeBalances = $this->getSoapClient()->__soapCall('getFreeBalances', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFreeBalances;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPresence
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Conventus\Atoss\StructType\GetPresence $parameters
     * @return \Conventus\Atoss\StructType\GetPresenceResponse|bool
     */
    public function getPresence(\Conventus\Atoss\StructType\GetPresence $parameters)
    {
        try {
            $this->setResult($resultGetPresence = $this->getSoapClient()->__soapCall('getPresence', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPresence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogsResponse|\Conventus\Atoss\StructType\GetAbsenceResponse|\Conventus\Atoss\StructType\GetAbsenceTotalsResponse|\Conventus\Atoss\StructType\GetAccountsResponse|\Conventus\Atoss\StructType\GetActiveFollowUpApplicationsResponse|\Conventus\Atoss\StructType\GetApplicationPropertiesResponse|\Conventus\Atoss\StructType\GetApplicationsResponse|\Conventus\Atoss\StructType\GetBadgeEmployeeResponse|\Conventus\Atoss\StructType\GetBadgesResponse|\Conventus\Atoss\StructType\GetBookingsResponse|\Conventus\Atoss\StructType\GetCalculatedValueResponse|\Conventus\Atoss\StructType\GetCalculatedValuesExtendedResponse|\Conventus\Atoss\StructType\GetClockinWithCorrelationResponse|\Conventus\Atoss\StructType\GetCostCentersResponse|\Conventus\Atoss\StructType\GetDepartmentEmployeesResponse|\Conventus\Atoss\StructType\GetDepartmentsResponse|\Conventus\Atoss\StructType\GetDepartmentTreeResponse|\Conventus\Atoss\StructType\GetEmployeeGroupsResponse|\Conventus\Atoss\StructType\GetEmployeesResponse|\Conventus\Atoss\StructType\GetEmployeeStateResponse|\Conventus\Atoss\StructType\GetFileFromUserHomeResponse|\Conventus\Atoss\StructType\GetFreeBalancesResponse|\Conventus\Atoss\StructType\GetFreeBalanceValueResponse|\Conventus\Atoss\StructType\GetFreeBalanceValuesResponse|\Conventus\Atoss\StructType\GetHolidayCalendarResponse|\Conventus\Atoss\StructType\GetHolidaysResponse|\Conventus\Atoss\StructType\GetLastActivityResponse|\Conventus\Atoss\StructType\GetLastMessageResponse|\Conventus\Atoss\StructType\GetLicenceModulesResponse|\Conventus\Atoss\StructType\GetLoggedOnUserResponse|\Conventus\Atoss\StructType\GetManningLevelOffersResponse|\Conventus\Atoss\StructType\GetMessagesResponse|\Conventus\Atoss\StructType\GetMonthlyReportResponse|\Conventus\Atoss\StructType\GetPlanningsResponse|\Conventus\Atoss\StructType\GetPresenceResponse|\Conventus\Atoss\StructType\GetProcessingQueueResponse|\Conventus\Atoss\StructType\GetProjectsResponse|\Conventus\Atoss\StructType\GetRecordCountResponse|\Conventus\Atoss\StructType\GetReportDesignsResponse|\Conventus\Atoss\StructType\GetReportEntitiesResponse|\Conventus\Atoss\StructType\GetReportParametersResponse|\Conventus\Atoss\StructType\GetReportResponse|\Conventus\Atoss\StructType\GetRepositoryResponse|\Conventus\Atoss\StructType\GetServerInformationResponse|\Conventus\Atoss\StructType\GetSessionDateTimeResponse|\Conventus\Atoss\StructType\GetSessionFloatResponse|\Conventus\Atoss\StructType\GetSessionIntegerResponse|\Conventus\Atoss\StructType\GetSessionStringResponse|\Conventus\Atoss\StructType\GetShiftResponse|\Conventus\Atoss\StructType\GetSubstitutesResponse|\Conventus\Atoss\StructType\GetTableFieldsResponse|\Conventus\Atoss\StructType\GetTablesResponse|\Conventus\Atoss\StructType\GetTimeAccountBalanceResponse|\Conventus\Atoss\StructType\GetUserWorkflowsResponse|\Conventus\Atoss\StructType\GetVacationResponse|\Conventus\Atoss\StructType\GetVacationYearRecordsResponse|\Conventus\Atoss\StructType\GetVersioningInfoResponse|\Conventus\Atoss\StructType\GetVersionsResponse|\Conventus\Atoss\StructType\GetVersionValidityRangesResponse|\Conventus\Atoss\StructType\GetWorkflowConfigurationParameterResponse|\Conventus\Atoss\StructType\GetWorkplacesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
