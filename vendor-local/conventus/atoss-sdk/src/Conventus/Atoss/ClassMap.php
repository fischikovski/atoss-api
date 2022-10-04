<?php

declare(strict_types=1);

namespace Conventus\Atoss;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'readDuration' => '\\Conventus\\Atoss\\StructType\\ReadDuration',
            'readDurationResponse' => '\\Conventus\\Atoss\\StructType\\ReadDurationResponse',
            'webPropertyObject' => '\\Conventus\\Atoss\\StructType\\WebPropertyObject',
            'binaryProperties' => '\\Conventus\\Atoss\\StructType\\BinaryProperties',
            'entry' => '\\Conventus\\Atoss\\StructType\\Entry',
            'componentProperties' => '\\Conventus\\Atoss\\StructType\\ComponentProperties',
            'dateTimeProperties' => '\\Conventus\\Atoss\\StructType\\DateTimeProperties',
            'doubleProperties' => '\\Conventus\\Atoss\\StructType\\DoubleProperties',
            'durationProperties' => '\\Conventus\\Atoss\\StructType\\DurationProperties',
            'integerProperties' => '\\Conventus\\Atoss\\StructType\\IntegerProperties',
            'listProperites' => '\\Conventus\\Atoss\\StructType\\ListProperites',
            'stringProperties' => '\\Conventus\\Atoss\\StructType\\StringProperties',
            'XMLProperties' => '\\Conventus\\Atoss\\StructType\\XMLProperties',
            'webPropertyObjectList' => '\\Conventus\\Atoss\\StructType\\WebPropertyObjectList',
            'xmlProperty' => '\\Conventus\\Atoss\\StructType\\XmlProperty',
            'login' => '\\Conventus\\Atoss\\StructType\\Login',
            'loginResponse' => '\\Conventus\\Atoss\\StructType\\LoginResponse',
            'dataSetMove' => '\\Conventus\\Atoss\\StructType\\DataSetMove',
            'dataSetMoveResponse' => '\\Conventus\\Atoss\\StructType\\DataSetMoveResponse',
            'getTableFields' => '\\Conventus\\Atoss\\StructType\\GetTableFields',
            'getTableFieldsResponse' => '\\Conventus\\Atoss\\StructType\\GetTableFieldsResponse',
            'writeBinary' => '\\Conventus\\Atoss\\StructType\\WriteBinary',
            'writeBinaryResponse' => '\\Conventus\\Atoss\\StructType\\WriteBinaryResponse',
            'getCalculatedValuesExtended' => '\\Conventus\\Atoss\\StructType\\GetCalculatedValuesExtended',
            'getCalculatedValuesExtendedResponse' => '\\Conventus\\Atoss\\StructType\\GetCalculatedValuesExtendedResponse',
            'lockoutUsers' => '\\Conventus\\Atoss\\StructType\\LockoutUsers',
            'lockoutUsersResponse' => '\\Conventus\\Atoss\\StructType\\LockoutUsersResponse',
            'writeXML' => '\\Conventus\\Atoss\\StructType\\WriteXML',
            'writeXMLResponse' => '\\Conventus\\Atoss\\StructType\\WriteXMLResponse',
            'getReport' => '\\Conventus\\Atoss\\StructType\\GetReport',
            'getReportResponse' => '\\Conventus\\Atoss\\StructType\\GetReportResponse',
            'updateManningLevelExtended' => '\\Conventus\\Atoss\\StructType\\UpdateManningLevelExtended',
            'updateManningLevelExtendedResponse' => '\\Conventus\\Atoss\\StructType\\UpdateManningLevelExtendedResponse',
            'createAbsence' => '\\Conventus\\Atoss\\StructType\\CreateAbsence',
            'createAbsenceResponse' => '\\Conventus\\Atoss\\StructType\\CreateAbsenceResponse',
            'getWorkplaces' => '\\Conventus\\Atoss\\StructType\\GetWorkplaces',
            'getWorkplacesResponse' => '\\Conventus\\Atoss\\StructType\\GetWorkplacesResponse',
            'setVersioningRange' => '\\Conventus\\Atoss\\StructType\\SetVersioningRange',
            'setVersioningRangeResponse' => '\\Conventus\\Atoss\\StructType\\SetVersioningRangeResponse',
            'readFloat' => '\\Conventus\\Atoss\\StructType\\ReadFloat',
            'readFloatResponse' => '\\Conventus\\Atoss\\StructType\\ReadFloatResponse',
            'getApplications' => '\\Conventus\\Atoss\\StructType\\GetApplications',
            'getApplicationsResponse' => '\\Conventus\\Atoss\\StructType\\GetApplicationsResponse',
            'updateManningLevelOffer' => '\\Conventus\\Atoss\\StructType\\UpdateManningLevelOffer',
            'updateManningLevelOfferResponse' => '\\Conventus\\Atoss\\StructType\\UpdateManningLevelOfferResponse',
            'writeDateTime' => '\\Conventus\\Atoss\\StructType\\WriteDateTime',
            'writeDateTimeResponse' => '\\Conventus\\Atoss\\StructType\\WriteDateTimeResponse',
            'getLastMessage' => '\\Conventus\\Atoss\\StructType\\GetLastMessage',
            'getLastMessageResponse' => '\\Conventus\\Atoss\\StructType\\GetLastMessageResponse',
            'switchUser' => '\\Conventus\\Atoss\\StructType\\SwitchUser',
            'switchUserResponse' => '\\Conventus\\Atoss\\StructType\\SwitchUserResponse',
            'getSessionInteger' => '\\Conventus\\Atoss\\StructType\\GetSessionInteger',
            'getSessionIntegerResponse' => '\\Conventus\\Atoss\\StructType\\GetSessionIntegerResponse',
            'removeClockin' => '\\Conventus\\Atoss\\StructType\\RemoveClockin',
            'removeClockinResponse' => '\\Conventus\\Atoss\\StructType\\RemoveClockinResponse',
            'appendNotificationToken' => '\\Conventus\\Atoss\\StructType\\AppendNotificationToken',
            'appendNotificationTokenResponse' => '\\Conventus\\Atoss\\StructType\\AppendNotificationTokenResponse',
            'deleteVersion' => '\\Conventus\\Atoss\\StructType\\DeleteVersion',
            'deleteVersionResponse' => '\\Conventus\\Atoss\\StructType\\DeleteVersionResponse',
            'readInteger' => '\\Conventus\\Atoss\\StructType\\ReadInteger',
            'readIntegerResponse' => '\\Conventus\\Atoss\\StructType\\ReadIntegerResponse',
            'getEmployees' => '\\Conventus\\Atoss\\StructType\\GetEmployees',
            'getEmployeesResponse' => '\\Conventus\\Atoss\\StructType\\GetEmployeesResponse',
            'readString' => '\\Conventus\\Atoss\\StructType\\ReadString',
            'readStringResponse' => '\\Conventus\\Atoss\\StructType\\ReadStringResponse',
            'sendMessage' => '\\Conventus\\Atoss\\StructType\\SendMessage',
            'sendMessageResponse' => '\\Conventus\\Atoss\\StructType\\SendMessageResponse',
            'transferPlanVersions' => '\\Conventus\\Atoss\\StructType\\TransferPlanVersions',
            'transferPlanVersionsResponse' => '\\Conventus\\Atoss\\StructType\\TransferPlanVersionsResponse',
            'removePlanning' => '\\Conventus\\Atoss\\StructType\\RemovePlanning',
            'removePlanningResponse' => '\\Conventus\\Atoss\\StructType\\RemovePlanningResponse',
            'transferPlanningPatternIgnoreExisting' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternIgnoreExisting',
            'transferPlanningPatternIgnoreExistingResponse' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternIgnoreExistingResponse',
            'getWorkflowConfigurationParameter' => '\\Conventus\\Atoss\\StructType\\GetWorkflowConfigurationParameter',
            'getWorkflowConfigurationParameterResponse' => '\\Conventus\\Atoss\\StructType\\GetWorkflowConfigurationParameterResponse',
            'appendEmployee' => '\\Conventus\\Atoss\\StructType\\AppendEmployee',
            'appendEmployeeResponse' => '\\Conventus\\Atoss\\StructType\\AppendEmployeeResponse',
            'createBooking' => '\\Conventus\\Atoss\\StructType\\CreateBooking',
            'createBookingResponse' => '\\Conventus\\Atoss\\StructType\\CreateBookingResponse',
            'getSessionFloat' => '\\Conventus\\Atoss\\StructType\\GetSessionFloat',
            'getSessionFloatResponse' => '\\Conventus\\Atoss\\StructType\\GetSessionFloatResponse',
            'switchLocale' => '\\Conventus\\Atoss\\StructType\\SwitchLocale',
            'switchLocaleResponse' => '\\Conventus\\Atoss\\StructType\\SwitchLocaleResponse',
            'dataSetCount' => '\\Conventus\\Atoss\\StructType\\DataSetCount',
            'dataSetCountResponse' => '\\Conventus\\Atoss\\StructType\\DataSetCountResponse',
            'getSessionString' => '\\Conventus\\Atoss\\StructType\\GetSessionString',
            'getSessionStringResponse' => '\\Conventus\\Atoss\\StructType\\GetSessionStringResponse',
            'getSubstitutes' => '\\Conventus\\Atoss\\StructType\\GetSubstitutes',
            'getSubstitutesResponse' => '\\Conventus\\Atoss\\StructType\\GetSubstitutesResponse',
            'revokeToken' => '\\Conventus\\Atoss\\StructType\\RevokeToken',
            'revokeTokenResponse' => '\\Conventus\\Atoss\\StructType\\RevokeTokenResponse',
            'transferRegistry' => '\\Conventus\\Atoss\\StructType\\TransferRegistry',
            'transferRegistryResponse' => '\\Conventus\\Atoss\\StructType\\TransferRegistryResponse',
            'updateApplication' => '\\Conventus\\Atoss\\StructType\\UpdateApplication',
            'updateApplicationResponse' => '\\Conventus\\Atoss\\StructType\\UpdateApplicationResponse',
            'getVersionValidityRanges' => '\\Conventus\\Atoss\\StructType\\GetVersionValidityRanges',
            'getVersionValidityRangesResponse' => '\\Conventus\\Atoss\\StructType\\GetVersionValidityRangesResponse',
            'getHolidayCalendar' => '\\Conventus\\Atoss\\StructType\\GetHolidayCalendar',
            'getHolidayCalendarResponse' => '\\Conventus\\Atoss\\StructType\\GetHolidayCalendarResponse',
            'writeInteger' => '\\Conventus\\Atoss\\StructType\\WriteInteger',
            'writeIntegerResponse' => '\\Conventus\\Atoss\\StructType\\WriteIntegerResponse',
            'dataSetImport' => '\\Conventus\\Atoss\\StructType\\DataSetImport',
            'dataSetImportResponse' => '\\Conventus\\Atoss\\StructType\\DataSetImportResponse',
            'getBadgeEmployee' => '\\Conventus\\Atoss\\StructType\\GetBadgeEmployee',
            'getBadgeEmployeeResponse' => '\\Conventus\\Atoss\\StructType\\GetBadgeEmployeeResponse',
            'getLoggedOnUser' => '\\Conventus\\Atoss\\StructType\\GetLoggedOnUser',
            'getLoggedOnUserResponse' => '\\Conventus\\Atoss\\StructType\\GetLoggedOnUserResponse',
            'updatePlanning' => '\\Conventus\\Atoss\\StructType\\UpdatePlanning',
            'updatePlanningResponse' => '\\Conventus\\Atoss\\StructType\\UpdatePlanningResponse',
            'writeFloat' => '\\Conventus\\Atoss\\StructType\\WriteFloat',
            'writeFloatResponse' => '\\Conventus\\Atoss\\StructType\\WriteFloatResponse',
            'getVacation' => '\\Conventus\\Atoss\\StructType\\GetVacation',
            'getVacationResponse' => '\\Conventus\\Atoss\\StructType\\GetVacationResponse',
            'lockAccountingPeriodForEmployees' => '\\Conventus\\Atoss\\StructType\\LockAccountingPeriodForEmployees',
            'lockAccountingPeriodForEmployeesResponse' => '\\Conventus\\Atoss\\StructType\\LockAccountingPeriodForEmployeesResponse',
            'rollbackTransaction' => '\\Conventus\\Atoss\\StructType\\RollbackTransaction',
            'rollbackTransactionResponse' => '\\Conventus\\Atoss\\StructType\\RollbackTransactionResponse',
            'sendMail' => '\\Conventus\\Atoss\\StructType\\SendMail',
            'sendMailResponse' => '\\Conventus\\Atoss\\StructType\\SendMailResponse',
            'getApplicationProperties' => '\\Conventus\\Atoss\\StructType\\GetApplicationProperties',
            'getApplicationPropertiesResponse' => '\\Conventus\\Atoss\\StructType\\GetApplicationPropertiesResponse',
            'dataSetAppendBatched' => '\\Conventus\\Atoss\\StructType\\DataSetAppendBatched',
            'dataSetAppendBatchedResponse' => '\\Conventus\\Atoss\\StructType\\DataSetAppendBatchedResponse',
            'writeLargeString' => '\\Conventus\\Atoss\\StructType\\WriteLargeString',
            'writeLargeStringResponse' => '\\Conventus\\Atoss\\StructType\\WriteLargeStringResponse',
            'getCalculatedValue' => '\\Conventus\\Atoss\\StructType\\GetCalculatedValue',
            'getCalculatedValueResponse' => '\\Conventus\\Atoss\\StructType\\GetCalculatedValueResponse',
            'dataSetAppend' => '\\Conventus\\Atoss\\StructType\\DataSetAppend',
            'dataSetAppendResponse' => '\\Conventus\\Atoss\\StructType\\DataSetAppendResponse',
            'enumPendingTasks' => '\\Conventus\\Atoss\\StructType\\EnumPendingTasks',
            'enumPendingTasksResponse' => '\\Conventus\\Atoss\\StructType\\EnumPendingTasksResponse',
            'getEmployeeState' => '\\Conventus\\Atoss\\StructType\\GetEmployeeState',
            'getEmployeeStateResponse' => '\\Conventus\\Atoss\\StructType\\GetEmployeeStateResponse',
            'moveVersion' => '\\Conventus\\Atoss\\StructType\\MoveVersion',
            'moveVersionResponse' => '\\Conventus\\Atoss\\StructType\\MoveVersionResponse',
            'dataSetDeleteWithResult' => '\\Conventus\\Atoss\\StructType\\DataSetDeleteWithResult',
            'dataSetDeleteWithResultResponse' => '\\Conventus\\Atoss\\StructType\\DataSetDeleteWithResultResponse',
            'getVacationYearRecords' => '\\Conventus\\Atoss\\StructType\\GetVacationYearRecords',
            'getVacationYearRecordsResponse' => '\\Conventus\\Atoss\\StructType\\GetVacationYearRecordsResponse',
            'isSettingEnabled' => '\\Conventus\\Atoss\\StructType\\IsSettingEnabled',
            'isSettingEnabledResponse' => '\\Conventus\\Atoss\\StructType\\IsSettingEnabledResponse',
            'resetVersioning' => '\\Conventus\\Atoss\\StructType\\ResetVersioning',
            'resetVersioningResponse' => '\\Conventus\\Atoss\\StructType\\ResetVersioningResponse',
            'setSessionFloat' => '\\Conventus\\Atoss\\StructType\\SetSessionFloat',
            'setSessionFloatResponse' => '\\Conventus\\Atoss\\StructType\\SetSessionFloatResponse',
            'getVersioningInfo' => '\\Conventus\\Atoss\\StructType\\GetVersioningInfo',
            'getVersioningInfoResponse' => '\\Conventus\\Atoss\\StructType\\GetVersioningInfoResponse',
            'setVersioningDate' => '\\Conventus\\Atoss\\StructType\\SetVersioningDate',
            'setVersioningDateResponse' => '\\Conventus\\Atoss\\StructType\\SetVersioningDateResponse',
            'dataSetCopy' => '\\Conventus\\Atoss\\StructType\\DataSetCopy',
            'dataSetCopyResponse' => '\\Conventus\\Atoss\\StructType\\DataSetCopyResponse',
            'logout' => '\\Conventus\\Atoss\\StructType\\Logout',
            'logoutResponse' => '\\Conventus\\Atoss\\StructType\\LogoutResponse',
            'createPlanning' => '\\Conventus\\Atoss\\StructType\\CreatePlanning',
            'createPlanningResponse' => '\\Conventus\\Atoss\\StructType\\CreatePlanningResponse',
            'setSessionInteger' => '\\Conventus\\Atoss\\StructType\\SetSessionInteger',
            'setSessionIntegerResponse' => '\\Conventus\\Atoss\\StructType\\SetSessionIntegerResponse',
            'clockin' => '\\Conventus\\Atoss\\StructType\\Clockin',
            'clockinResponse' => '\\Conventus\\Atoss\\StructType\\ClockinResponse',
            'getAccounts' => '\\Conventus\\Atoss\\StructType\\GetAccounts',
            'getAccountsResponse' => '\\Conventus\\Atoss\\StructType\\GetAccountsResponse',
            'removeBooking' => '\\Conventus\\Atoss\\StructType\\RemoveBooking',
            'removeBookingResponse' => '\\Conventus\\Atoss\\StructType\\RemoveBookingResponse',
            'removeAbsence' => '\\Conventus\\Atoss\\StructType\\RemoveAbsence',
            'removeAbsenceResponse' => '\\Conventus\\Atoss\\StructType\\RemoveAbsenceResponse',
            'getAbsenceTotals' => '\\Conventus\\Atoss\\StructType\\GetAbsenceTotals',
            'getAbsenceTotalsResponse' => '\\Conventus\\Atoss\\StructType\\GetAbsenceTotalsResponse',
            'getCostCenters' => '\\Conventus\\Atoss\\StructType\\GetCostCenters',
            'getCostCentersResponse' => '\\Conventus\\Atoss\\StructType\\GetCostCentersResponse',
            'getReportEntities' => '\\Conventus\\Atoss\\StructType\\GetReportEntities',
            'getReportEntitiesResponse' => '\\Conventus\\Atoss\\StructType\\GetReportEntitiesResponse',
            'getClockinWithCorrelation' => '\\Conventus\\Atoss\\StructType\\GetClockinWithCorrelation',
            'getClockinWithCorrelationResponse' => '\\Conventus\\Atoss\\StructType\\GetClockinWithCorrelationResponse',
            'setSessionDateTime' => '\\Conventus\\Atoss\\StructType\\SetSessionDateTime',
            'setSessionDateTimeResponse' => '\\Conventus\\Atoss\\StructType\\SetSessionDateTimeResponse',
            'getDepartments' => '\\Conventus\\Atoss\\StructType\\GetDepartments',
            'getDepartmentsResponse' => '\\Conventus\\Atoss\\StructType\\GetDepartmentsResponse',
            'dataSetDelete' => '\\Conventus\\Atoss\\StructType\\DataSetDelete',
            'dataSetDeleteResponse' => '\\Conventus\\Atoss\\StructType\\DataSetDeleteResponse',
            'sendMailToMailingList' => '\\Conventus\\Atoss\\StructType\\SendMailToMailingList',
            'sendMailToMailingListResponse' => '\\Conventus\\Atoss\\StructType\\SendMailToMailingListResponse',
            'lockProcessing' => '\\Conventus\\Atoss\\StructType\\LockProcessing',
            'lockProcessingResponse' => '\\Conventus\\Atoss\\StructType\\LockProcessingResponse',
            'waitForNextEventsInQueue' => '\\Conventus\\Atoss\\StructType\\WaitForNextEventsInQueue',
            'waitForNextEventsInQueueResponse' => '\\Conventus\\Atoss\\StructType\\WaitForNextEventsInQueueResponse',
            'commitTransaction' => '\\Conventus\\Atoss\\StructType\\CommitTransaction',
            'commitTransactionResponse' => '\\Conventus\\Atoss\\StructType\\CommitTransactionResponse',
            'getDepartmentEmployees' => '\\Conventus\\Atoss\\StructType\\GetDepartmentEmployees',
            'getDepartmentEmployeesResponse' => '\\Conventus\\Atoss\\StructType\\GetDepartmentEmployeesResponse',
            'createManningLevelExtended' => '\\Conventus\\Atoss\\StructType\\CreateManningLevelExtended',
            'createManningLevelExtendedResponse' => '\\Conventus\\Atoss\\StructType\\CreateManningLevelExtendedResponse',
            'updateRepository' => '\\Conventus\\Atoss\\StructType\\UpdateRepository',
            'updateRepositoryResponse' => '\\Conventus\\Atoss\\StructType\\UpdateRepositoryResponse',
            'getAbsence' => '\\Conventus\\Atoss\\StructType\\GetAbsence',
            'getAbsenceResponse' => '\\Conventus\\Atoss\\StructType\\GetAbsenceResponse',
            'issueToken' => '\\Conventus\\Atoss\\StructType\\IssueToken',
            'issueTokenResponse' => '\\Conventus\\Atoss\\StructType\\IssueTokenResponse',
            'readDateTime' => '\\Conventus\\Atoss\\StructType\\ReadDateTime',
            'readDateTimeResponse' => '\\Conventus\\Atoss\\StructType\\ReadDateTimeResponse',
            'registerEventQueue' => '\\Conventus\\Atoss\\StructType\\RegisterEventQueue',
            'registerEventQueueResponse' => '\\Conventus\\Atoss\\StructType\\RegisterEventQueueResponse',
            'getRepository' => '\\Conventus\\Atoss\\StructType\\GetRepository',
            'getRepositoryResponse' => '\\Conventus\\Atoss\\StructType\\GetRepositoryResponse',
            'clockout' => '\\Conventus\\Atoss\\StructType\\Clockout',
            'clockoutResponse' => '\\Conventus\\Atoss\\StructType\\ClockoutResponse',
            'appendRepository' => '\\Conventus\\Atoss\\StructType\\AppendRepository',
            'appendRepositoryResponse' => '\\Conventus\\Atoss\\StructType\\AppendRepositoryResponse',
            'getManningLevelOffers' => '\\Conventus\\Atoss\\StructType\\GetManningLevelOffers',
            'getManningLevelOffersResponse' => '\\Conventus\\Atoss\\StructType\\GetManningLevelOffersResponse',
            'readXML' => '\\Conventus\\Atoss\\StructType\\ReadXML',
            'readXMLResponse' => '\\Conventus\\Atoss\\StructType\\ReadXMLResponse',
            'getSessionDateTime' => '\\Conventus\\Atoss\\StructType\\GetSessionDateTime',
            'getSessionDateTimeResponse' => '\\Conventus\\Atoss\\StructType\\GetSessionDateTimeResponse',
            'startTransaction' => '\\Conventus\\Atoss\\StructType\\StartTransaction',
            'startTransactionResponse' => '\\Conventus\\Atoss\\StructType\\StartTransactionResponse',
            'setDayProperties' => '\\Conventus\\Atoss\\StructType\\SetDayProperties',
            'setDayPropertiesResponse' => '\\Conventus\\Atoss\\StructType\\SetDayPropertiesResponse',
            'deleteApplication' => '\\Conventus\\Atoss\\StructType\\DeleteApplication',
            'deleteApplicationResponse' => '\\Conventus\\Atoss\\StructType\\DeleteApplicationResponse',
            'getProcessingQueue' => '\\Conventus\\Atoss\\StructType\\GetProcessingQueue',
            'getProcessingQueueResponse' => '\\Conventus\\Atoss\\StructType\\GetProcessingQueueResponse',
            'getRecordCount' => '\\Conventus\\Atoss\\StructType\\GetRecordCount',
            'getRecordCountResponse' => '\\Conventus\\Atoss\\StructType\\GetRecordCountResponse',
            'getReportDesigns' => '\\Conventus\\Atoss\\StructType\\GetReportDesigns',
            'getReportDesignsResponse' => '\\Conventus\\Atoss\\StructType\\GetReportDesignsResponse',
            'updatePersonalData' => '\\Conventus\\Atoss\\StructType\\UpdatePersonalData',
            'updatePersonalDataResponse' => '\\Conventus\\Atoss\\StructType\\UpdatePersonalDataResponse',
            'getTables' => '\\Conventus\\Atoss\\StructType\\GetTables',
            'getTablesResponse' => '\\Conventus\\Atoss\\StructType\\GetTablesResponse',
            'getBookings' => '\\Conventus\\Atoss\\StructType\\GetBookings',
            'getBookingsResponse' => '\\Conventus\\Atoss\\StructType\\GetBookingsResponse',
            'changePassword' => '\\Conventus\\Atoss\\StructType\\ChangePassword',
            'changePasswordResponse' => '\\Conventus\\Atoss\\StructType\\ChangePasswordResponse',
            'getShift' => '\\Conventus\\Atoss\\StructType\\GetShift',
            'getShiftResponse' => '\\Conventus\\Atoss\\StructType\\GetShiftResponse',
            'updateVersionValidityRange' => '\\Conventus\\Atoss\\StructType\\UpdateVersionValidityRange',
            'updateVersionValidityRangeResponse' => '\\Conventus\\Atoss\\StructType\\UpdateVersionValidityRangeResponse',
            'licenceEmployee' => '\\Conventus\\Atoss\\StructType\\LicenceEmployee',
            'licenceEmployeeResponse' => '\\Conventus\\Atoss\\StructType\\LicenceEmployeeResponse',
            'appendUserGroupEmployee' => '\\Conventus\\Atoss\\StructType\\AppendUserGroupEmployee',
            'appendUserGroupEmployeeResponse' => '\\Conventus\\Atoss\\StructType\\AppendUserGroupEmployeeResponse',
            'triggerWorkflowEvent' => '\\Conventus\\Atoss\\StructType\\TriggerWorkflowEvent',
            'triggerWorkflowEventResponse' => '\\Conventus\\Atoss\\StructType\\TriggerWorkflowEventResponse',
            'setApplicationPropertyInteger' => '\\Conventus\\Atoss\\StructType\\SetApplicationPropertyInteger',
            'setApplicationPropertyIntegerResponse' => '\\Conventus\\Atoss\\StructType\\SetApplicationPropertyIntegerResponse',
            'process' => '\\Conventus\\Atoss\\StructType\\Process',
            'processResponse' => '\\Conventus\\Atoss\\StructType\\ProcessResponse',
            'getMonthlyReport' => '\\Conventus\\Atoss\\StructType\\GetMonthlyReport',
            'getMonthlyReportResponse' => '\\Conventus\\Atoss\\StructType\\GetMonthlyReportResponse',
            'appendVersionValidityRange' => '\\Conventus\\Atoss\\StructType\\AppendVersionValidityRange',
            'appendVersionValidityRangeResponse' => '\\Conventus\\Atoss\\StructType\\AppendVersionValidityRangeResponse',
            'getLicenceModules' => '\\Conventus\\Atoss\\StructType\\GetLicenceModules',
            'getLicenceModulesResponse' => '\\Conventus\\Atoss\\StructType\\GetLicenceModulesResponse',
            'writeString' => '\\Conventus\\Atoss\\StructType\\WriteString',
            'writeStringResponse' => '\\Conventus\\Atoss\\StructType\\WriteStringResponse',
            'getHolidays' => '\\Conventus\\Atoss\\StructType\\GetHolidays',
            'getHolidaysResponse' => '\\Conventus\\Atoss\\StructType\\GetHolidaysResponse',
            'getActiveFollowUpApplications' => '\\Conventus\\Atoss\\StructType\\GetActiveFollowUpApplications',
            'getActiveFollowUpApplicationsResponse' => '\\Conventus\\Atoss\\StructType\\GetActiveFollowUpApplicationsResponse',
            'setApplicationPropertyDateTime' => '\\Conventus\\Atoss\\StructType\\SetApplicationPropertyDateTime',
            'setApplicationPropertyDateTimeResponse' => '\\Conventus\\Atoss\\StructType\\SetApplicationPropertyDateTimeResponse',
            'dataSetUpdate' => '\\Conventus\\Atoss\\StructType\\DataSetUpdate',
            'dataSetUpdateResponse' => '\\Conventus\\Atoss\\StructType\\DataSetUpdateResponse',
            'getBadges' => '\\Conventus\\Atoss\\StructType\\GetBadges',
            'getBadgesResponse' => '\\Conventus\\Atoss\\StructType\\GetBadgesResponse',
            'getDepartmentTree' => '\\Conventus\\Atoss\\StructType\\GetDepartmentTree',
            'getDepartmentTreeResponse' => '\\Conventus\\Atoss\\StructType\\GetDepartmentTreeResponse',
            'startExternalImport' => '\\Conventus\\Atoss\\StructType\\StartExternalImport',
            'startExternalImportResponse' => '\\Conventus\\Atoss\\StructType\\StartExternalImportResponse',
            'dataSetUpdateWithResult' => '\\Conventus\\Atoss\\StructType\\DataSetUpdateWithResult',
            'dataSetUpdateWithResultResponse' => '\\Conventus\\Atoss\\StructType\\DataSetUpdateWithResultResponse',
            'getEmployeeGroups' => '\\Conventus\\Atoss\\StructType\\GetEmployeeGroups',
            'getEmployeeGroupsResponse' => '\\Conventus\\Atoss\\StructType\\GetEmployeeGroupsResponse',
            'getMessages' => '\\Conventus\\Atoss\\StructType\\GetMessages',
            'getMessagesResponse' => '\\Conventus\\Atoss\\StructType\\GetMessagesResponse',
            'getPlannings' => '\\Conventus\\Atoss\\StructType\\GetPlannings',
            'getPlanningsResponse' => '\\Conventus\\Atoss\\StructType\\GetPlanningsResponse',
            'unregisterEventQueue' => '\\Conventus\\Atoss\\StructType\\UnregisterEventQueue',
            'unregisterEventQueueResponse' => '\\Conventus\\Atoss\\StructType\\UnregisterEventQueueResponse',
            'dataSetDeleteBatched' => '\\Conventus\\Atoss\\StructType\\DataSetDeleteBatched',
            'dataSetDeleteBatchedResponse' => '\\Conventus\\Atoss\\StructType\\DataSetDeleteBatchedResponse',
            'getAbsenceChangeLogs' => '\\Conventus\\Atoss\\StructType\\GetAbsenceChangeLogs',
            'getAbsenceChangeLogsResponse' => '\\Conventus\\Atoss\\StructType\\GetAbsenceChangeLogsResponse',
            'getLastActivity' => '\\Conventus\\Atoss\\StructType\\GetLastActivity',
            'getLastActivityResponse' => '\\Conventus\\Atoss\\StructType\\GetLastActivityResponse',
            'enumRunningTasks' => '\\Conventus\\Atoss\\StructType\\EnumRunningTasks',
            'enumRunningTasksResponse' => '\\Conventus\\Atoss\\StructType\\EnumRunningTasksResponse',
            'lockWorkplaceSales' => '\\Conventus\\Atoss\\StructType\\LockWorkplaceSales',
            'lockWorkplaceSalesResponse' => '\\Conventus\\Atoss\\StructType\\LockWorkplaceSalesResponse',
            'shutDownServer' => '\\Conventus\\Atoss\\StructType\\ShutDownServer',
            'shutDownServerResponse' => '\\Conventus\\Atoss\\StructType\\ShutDownServerResponse',
            'lockAccountingPeriod' => '\\Conventus\\Atoss\\StructType\\LockAccountingPeriod',
            'lockAccountingPeriodResponse' => '\\Conventus\\Atoss\\StructType\\LockAccountingPeriodResponse',
            'resetPassword' => '\\Conventus\\Atoss\\StructType\\ResetPassword',
            'resetPasswordResponse' => '\\Conventus\\Atoss\\StructType\\ResetPasswordResponse',
            'transferPlanningPatternVersionExtended' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternVersionExtended',
            'transferPlanningPatternVersionExtendedResponse' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternVersionExtendedResponse',
            'getUserWorkflows' => '\\Conventus\\Atoss\\StructType\\GetUserWorkflows',
            'getUserWorkflowsResponse' => '\\Conventus\\Atoss\\StructType\\GetUserWorkflowsResponse',
            'dataSetPurge' => '\\Conventus\\Atoss\\StructType\\DataSetPurge',
            'dataSetPurgeResponse' => '\\Conventus\\Atoss\\StructType\\DataSetPurgeResponse',
            'getVersions' => '\\Conventus\\Atoss\\StructType\\GetVersions',
            'getVersionsResponse' => '\\Conventus\\Atoss\\StructType\\GetVersionsResponse',
            'dataSetGet' => '\\Conventus\\Atoss\\StructType\\DataSetGet',
            'dataSetGetResponse' => '\\Conventus\\Atoss\\StructType\\DataSetGetResponse',
            'dataSetUpdateBatched' => '\\Conventus\\Atoss\\StructType\\DataSetUpdateBatched',
            'dataSetUpdateBatchedResponse' => '\\Conventus\\Atoss\\StructType\\DataSetUpdateBatchedResponse',
            'createClockin' => '\\Conventus\\Atoss\\StructType\\CreateClockin',
            'createClockinResponse' => '\\Conventus\\Atoss\\StructType\\CreateClockinResponse',
            'clockNow' => '\\Conventus\\Atoss\\StructType\\ClockNow',
            'clockNowResponse' => '\\Conventus\\Atoss\\StructType\\ClockNowResponse',
            'readLargeString' => '\\Conventus\\Atoss\\StructType\\ReadLargeString',
            'readLargeStringResponse' => '\\Conventus\\Atoss\\StructType\\ReadLargeStringResponse',
            'setApplicationPropertyString' => '\\Conventus\\Atoss\\StructType\\SetApplicationPropertyString',
            'setApplicationPropertyStringResponse' => '\\Conventus\\Atoss\\StructType\\SetApplicationPropertyStringResponse',
            'clock' => '\\Conventus\\Atoss\\StructType\\Clock',
            'clockResponse' => '\\Conventus\\Atoss\\StructType\\ClockResponse',
            'getReportParameters' => '\\Conventus\\Atoss\\StructType\\GetReportParameters',
            'getReportParametersResponse' => '\\Conventus\\Atoss\\StructType\\GetReportParametersResponse',
            'unlockWorkplaceSales' => '\\Conventus\\Atoss\\StructType\\UnlockWorkplaceSales',
            'unlockWorkplaceSalesResponse' => '\\Conventus\\Atoss\\StructType\\UnlockWorkplaceSalesResponse',
            'setMessageState' => '\\Conventus\\Atoss\\StructType\\SetMessageState',
            'setMessageStateResponse' => '\\Conventus\\Atoss\\StructType\\SetMessageStateResponse',
            'changePrimaryKey' => '\\Conventus\\Atoss\\StructType\\ChangePrimaryKey',
            'changePrimaryKeyResponse' => '\\Conventus\\Atoss\\StructType\\ChangePrimaryKeyResponse',
            'readBinary' => '\\Conventus\\Atoss\\StructType\\ReadBinary',
            'readBinaryResponse' => '\\Conventus\\Atoss\\StructType\\ReadBinaryResponse',
            'endLockoutUsers' => '\\Conventus\\Atoss\\StructType\\EndLockoutUsers',
            'endLockoutUsersResponse' => '\\Conventus\\Atoss\\StructType\\EndLockoutUsersResponse',
            'writeDuration' => '\\Conventus\\Atoss\\StructType\\WriteDuration',
            'writeDurationResponse' => '\\Conventus\\Atoss\\StructType\\WriteDurationResponse',
            'dumpTable' => '\\Conventus\\Atoss\\StructType\\DumpTable',
            'dumpTableResponse' => '\\Conventus\\Atoss\\StructType\\DumpTableResponse',
            'executeTaskImmediatly' => '\\Conventus\\Atoss\\StructType\\ExecuteTaskImmediatly',
            'executeTaskImmediatlyResponse' => '\\Conventus\\Atoss\\StructType\\ExecuteTaskImmediatlyResponse',
            'getProjects' => '\\Conventus\\Atoss\\StructType\\GetProjects',
            'getProjectsResponse' => '\\Conventus\\Atoss\\StructType\\GetProjectsResponse',
            'importXML' => '\\Conventus\\Atoss\\StructType\\ImportXML',
            'importXMLResponse' => '\\Conventus\\Atoss\\StructType\\ImportXMLResponse',
            'getFreeBalanceValue' => '\\Conventus\\Atoss\\StructType\\GetFreeBalanceValue',
            'getFreeBalanceValueResponse' => '\\Conventus\\Atoss\\StructType\\GetFreeBalanceValueResponse',
            'getServerInformation' => '\\Conventus\\Atoss\\StructType\\GetServerInformation',
            'getServerInformationResponse' => '\\Conventus\\Atoss\\StructType\\GetServerInformationResponse',
            'transferPlanningPatternVersion' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternVersion',
            'transferPlanningPatternVersionResponse' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternVersionResponse',
            'deleteVersionValidityRange' => '\\Conventus\\Atoss\\StructType\\DeleteVersionValidityRange',
            'deleteVersionValidityRangeResponse' => '\\Conventus\\Atoss\\StructType\\DeleteVersionValidityRangeResponse',
            'deleteEmployee' => '\\Conventus\\Atoss\\StructType\\DeleteEmployee',
            'deleteEmployeeResponse' => '\\Conventus\\Atoss\\StructType\\DeleteEmployeeResponse',
            'appendApplication' => '\\Conventus\\Atoss\\StructType\\AppendApplication',
            'appendApplicationResponse' => '\\Conventus\\Atoss\\StructType\\AppendApplicationResponse',
            'getTimeAccountBalance' => '\\Conventus\\Atoss\\StructType\\GetTimeAccountBalance',
            'getTimeAccountBalanceResponse' => '\\Conventus\\Atoss\\StructType\\GetTimeAccountBalanceResponse',
            'setSessionString' => '\\Conventus\\Atoss\\StructType\\SetSessionString',
            'setSessionStringResponse' => '\\Conventus\\Atoss\\StructType\\SetSessionStringResponse',
            'getFileFromUserHome' => '\\Conventus\\Atoss\\StructType\\GetFileFromUserHome',
            'getFileFromUserHomeResponse' => '\\Conventus\\Atoss\\StructType\\GetFileFromUserHomeResponse',
            'getFreeBalanceValues' => '\\Conventus\\Atoss\\StructType\\GetFreeBalanceValues',
            'getFreeBalanceValuesResponse' => '\\Conventus\\Atoss\\StructType\\GetFreeBalanceValuesResponse',
            'transferPlanningPattern' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPattern',
            'transferPlanningPatternResponse' => '\\Conventus\\Atoss\\StructType\\TransferPlanningPatternResponse',
            'checkPassword' => '\\Conventus\\Atoss\\StructType\\CheckPassword',
            'checkPasswordResponse' => '\\Conventus\\Atoss\\StructType\\CheckPasswordResponse',
            'getFreeBalances' => '\\Conventus\\Atoss\\StructType\\GetFreeBalances',
            'getFreeBalancesResponse' => '\\Conventus\\Atoss\\StructType\\GetFreeBalancesResponse',
            'getPresence' => '\\Conventus\\Atoss\\StructType\\GetPresence',
            'getPresenceResponse' => '\\Conventus\\Atoss\\StructType\\GetPresenceResponse',
            'WebAPIException' => '\\Conventus\\Atoss\\StructType\\WebAPIException',
        ];
    }
}