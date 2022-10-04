<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://conventus.atoss.com/atc/webservices?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:~5.0 to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://conventus.atoss.com/atc/webservices?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Conventus\Atoss\ClassMap::get(),
];
/**
 * Samples for Read ServiceType
 */
$read = new \Conventus\Atoss\ServiceType\Read($options);
/**
 * Sample call for readDuration operation/method
 */
if ($read->readDuration(new \Conventus\Atoss\StructType\ReadDuration()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readFloat operation/method
 */
if ($read->readFloat(new \Conventus\Atoss\StructType\ReadFloat()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readInteger operation/method
 */
if ($read->readInteger(new \Conventus\Atoss\StructType\ReadInteger()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readString operation/method
 */
if ($read->readString(new \Conventus\Atoss\StructType\ReadString()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readDateTime operation/method
 */
if ($read->readDateTime(new \Conventus\Atoss\StructType\ReadDateTime()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readXML operation/method
 */
if ($read->readXML(new \Conventus\Atoss\StructType\ReadXML()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readLargeString operation/method
 */
if ($read->readLargeString(new \Conventus\Atoss\StructType\ReadLargeString()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for readBinary operation/method
 */
if ($read->readBinary(new \Conventus\Atoss\StructType\ReadBinary()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Samples for Login ServiceType
 */
$login = new \Conventus\Atoss\ServiceType\Login($options);
/**
 * Sample call for login operation/method
 */
if ($login->login(new \Conventus\Atoss\StructType\Login()) !== false) {
    print_r($login->getResult());
} else {
    print_r($login->getLastError());
}
/**
 * Samples for Write ServiceType
 */
$write = new \Conventus\Atoss\ServiceType\Write($options);
/**
 * Sample call for writeBinary operation/method
 */
if ($write->writeBinary(new \Conventus\Atoss\StructType\WriteBinary()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeXML operation/method
 */
if ($write->writeXML(new \Conventus\Atoss\StructType\WriteXML()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeDateTime operation/method
 */
if ($write->writeDateTime(new \Conventus\Atoss\StructType\WriteDateTime()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeInteger operation/method
 */
if ($write->writeInteger(new \Conventus\Atoss\StructType\WriteInteger()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeFloat operation/method
 */
if ($write->writeFloat(new \Conventus\Atoss\StructType\WriteFloat()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeLargeString operation/method
 */
if ($write->writeLargeString(new \Conventus\Atoss\StructType\WriteLargeString()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeString operation/method
 */
if ($write->writeString(new \Conventus\Atoss\StructType\WriteString()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Sample call for writeDuration operation/method
 */
if ($write->writeDuration(new \Conventus\Atoss\StructType\WriteDuration()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Conventus\Atoss\ServiceType\Get($options);
/**
 * Sample call for getTableFields operation/method
 */
if ($get->getTableFields(new \Conventus\Atoss\StructType\GetTableFields()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCalculatedValuesExtended operation/method
 */
if ($get->getCalculatedValuesExtended(new \Conventus\Atoss\StructType\GetCalculatedValuesExtended()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReport operation/method
 */
if ($get->getReport(new \Conventus\Atoss\StructType\GetReport()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWorkplaces operation/method
 */
if ($get->getWorkplaces(new \Conventus\Atoss\StructType\GetWorkplaces()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getApplications operation/method
 */
if ($get->getApplications(new \Conventus\Atoss\StructType\GetApplications()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLastMessage operation/method
 */
if ($get->getLastMessage(new \Conventus\Atoss\StructType\GetLastMessage()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSessionInteger operation/method
 */
if ($get->getSessionInteger(new \Conventus\Atoss\StructType\GetSessionInteger()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEmployees operation/method
 */
if ($get->getEmployees(new \Conventus\Atoss\StructType\GetEmployees()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWorkflowConfigurationParameter operation/method
 */
if ($get->getWorkflowConfigurationParameter(new \Conventus\Atoss\StructType\GetWorkflowConfigurationParameter()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSessionFloat operation/method
 */
if ($get->getSessionFloat(new \Conventus\Atoss\StructType\GetSessionFloat()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSessionString operation/method
 */
if ($get->getSessionString(new \Conventus\Atoss\StructType\GetSessionString()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSubstitutes operation/method
 */
if ($get->getSubstitutes(new \Conventus\Atoss\StructType\GetSubstitutes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVersionValidityRanges operation/method
 */
if ($get->getVersionValidityRanges(new \Conventus\Atoss\StructType\GetVersionValidityRanges()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getHolidayCalendar operation/method
 */
if ($get->getHolidayCalendar(new \Conventus\Atoss\StructType\GetHolidayCalendar()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBadgeEmployee operation/method
 */
if ($get->getBadgeEmployee(new \Conventus\Atoss\StructType\GetBadgeEmployee()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLoggedOnUser operation/method
 */
if ($get->getLoggedOnUser(new \Conventus\Atoss\StructType\GetLoggedOnUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVacation operation/method
 */
if ($get->getVacation(new \Conventus\Atoss\StructType\GetVacation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getApplicationProperties operation/method
 */
if ($get->getApplicationProperties(new \Conventus\Atoss\StructType\GetApplicationProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCalculatedValue operation/method
 */
if ($get->getCalculatedValue(new \Conventus\Atoss\StructType\GetCalculatedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEmployeeState operation/method
 */
if ($get->getEmployeeState(new \Conventus\Atoss\StructType\GetEmployeeState()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVacationYearRecords operation/method
 */
if ($get->getVacationYearRecords(new \Conventus\Atoss\StructType\GetVacationYearRecords()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVersioningInfo operation/method
 */
if ($get->getVersioningInfo(new \Conventus\Atoss\StructType\GetVersioningInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccounts operation/method
 */
if ($get->getAccounts(new \Conventus\Atoss\StructType\GetAccounts()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAbsenceTotals operation/method
 */
if ($get->getAbsenceTotals(new \Conventus\Atoss\StructType\GetAbsenceTotals()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCostCenters operation/method
 */
if ($get->getCostCenters(new \Conventus\Atoss\StructType\GetCostCenters()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReportEntities operation/method
 */
if ($get->getReportEntities(new \Conventus\Atoss\StructType\GetReportEntities()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getClockinWithCorrelation operation/method
 */
if ($get->getClockinWithCorrelation(new \Conventus\Atoss\StructType\GetClockinWithCorrelation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDepartments operation/method
 */
if ($get->getDepartments(new \Conventus\Atoss\StructType\GetDepartments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDepartmentEmployees operation/method
 */
if ($get->getDepartmentEmployees(new \Conventus\Atoss\StructType\GetDepartmentEmployees()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAbsence operation/method
 */
if ($get->getAbsence(new \Conventus\Atoss\StructType\GetAbsence()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepository operation/method
 */
if ($get->getRepository(new \Conventus\Atoss\StructType\GetRepository()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManningLevelOffers operation/method
 */
if ($get->getManningLevelOffers(new \Conventus\Atoss\StructType\GetManningLevelOffers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSessionDateTime operation/method
 */
if ($get->getSessionDateTime(new \Conventus\Atoss\StructType\GetSessionDateTime()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProcessingQueue operation/method
 */
if ($get->getProcessingQueue(new \Conventus\Atoss\StructType\GetProcessingQueue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRecordCount operation/method
 */
if ($get->getRecordCount(new \Conventus\Atoss\StructType\GetRecordCount()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReportDesigns operation/method
 */
if ($get->getReportDesigns(new \Conventus\Atoss\StructType\GetReportDesigns()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTables operation/method
 */
if ($get->getTables(new \Conventus\Atoss\StructType\GetTables()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBookings operation/method
 */
if ($get->getBookings(new \Conventus\Atoss\StructType\GetBookings()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShift operation/method
 */
if ($get->getShift(new \Conventus\Atoss\StructType\GetShift()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMonthlyReport operation/method
 */
if ($get->getMonthlyReport(new \Conventus\Atoss\StructType\GetMonthlyReport()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLicenceModules operation/method
 */
if ($get->getLicenceModules(new \Conventus\Atoss\StructType\GetLicenceModules()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getHolidays operation/method
 */
if ($get->getHolidays(new \Conventus\Atoss\StructType\GetHolidays()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getActiveFollowUpApplications operation/method
 */
if ($get->getActiveFollowUpApplications(new \Conventus\Atoss\StructType\GetActiveFollowUpApplications()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBadges operation/method
 */
if ($get->getBadges(new \Conventus\Atoss\StructType\GetBadges()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDepartmentTree operation/method
 */
if ($get->getDepartmentTree(new \Conventus\Atoss\StructType\GetDepartmentTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEmployeeGroups operation/method
 */
if ($get->getEmployeeGroups(new \Conventus\Atoss\StructType\GetEmployeeGroups()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMessages operation/method
 */
if ($get->getMessages(new \Conventus\Atoss\StructType\GetMessages()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPlannings operation/method
 */
if ($get->getPlannings(new \Conventus\Atoss\StructType\GetPlannings()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAbsenceChangeLogs operation/method
 */
if ($get->getAbsenceChangeLogs(new \Conventus\Atoss\StructType\GetAbsenceChangeLogs()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLastActivity operation/method
 */
if ($get->getLastActivity(new \Conventus\Atoss\StructType\GetLastActivity()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUserWorkflows operation/method
 */
if ($get->getUserWorkflows(new \Conventus\Atoss\StructType\GetUserWorkflows()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVersions operation/method
 */
if ($get->getVersions(new \Conventus\Atoss\StructType\GetVersions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReportParameters operation/method
 */
if ($get->getReportParameters(new \Conventus\Atoss\StructType\GetReportParameters()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProjects operation/method
 */
if ($get->getProjects(new \Conventus\Atoss\StructType\GetProjects()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFreeBalanceValue operation/method
 */
if ($get->getFreeBalanceValue(new \Conventus\Atoss\StructType\GetFreeBalanceValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getServerInformation operation/method
 */
if ($get->getServerInformation(new \Conventus\Atoss\StructType\GetServerInformation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimeAccountBalance operation/method
 */
if ($get->getTimeAccountBalance(new \Conventus\Atoss\StructType\GetTimeAccountBalance()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFileFromUserHome operation/method
 */
if ($get->getFileFromUserHome(new \Conventus\Atoss\StructType\GetFileFromUserHome()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFreeBalanceValues operation/method
 */
if ($get->getFreeBalanceValues(new \Conventus\Atoss\StructType\GetFreeBalanceValues()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFreeBalances operation/method
 */
if ($get->getFreeBalances(new \Conventus\Atoss\StructType\GetFreeBalances()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPresence operation/method
 */
if ($get->getPresence(new \Conventus\Atoss\StructType\GetPresence()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Data ServiceType
 */
$data = new \Conventus\Atoss\ServiceType\Data($options);
/**
 * Sample call for dataSetMove operation/method
 */
if ($data->dataSetMove(new \Conventus\Atoss\StructType\DataSetMove()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetCount operation/method
 */
if ($data->dataSetCount(new \Conventus\Atoss\StructType\DataSetCount()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetImport operation/method
 */
if ($data->dataSetImport(new \Conventus\Atoss\StructType\DataSetImport()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetAppendBatched operation/method
 */
if ($data->dataSetAppendBatched(new \Conventus\Atoss\StructType\DataSetAppendBatched()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetAppend operation/method
 */
if ($data->dataSetAppend(new \Conventus\Atoss\StructType\DataSetAppend()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetDeleteWithResult operation/method
 */
if ($data->dataSetDeleteWithResult(new \Conventus\Atoss\StructType\DataSetDeleteWithResult()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetCopy operation/method
 */
if ($data->dataSetCopy(new \Conventus\Atoss\StructType\DataSetCopy()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetDelete operation/method
 */
if ($data->dataSetDelete(new \Conventus\Atoss\StructType\DataSetDelete()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetUpdate operation/method
 */
if ($data->dataSetUpdate(new \Conventus\Atoss\StructType\DataSetUpdate()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetUpdateWithResult operation/method
 */
if ($data->dataSetUpdateWithResult(new \Conventus\Atoss\StructType\DataSetUpdateWithResult()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetDeleteBatched operation/method
 */
if ($data->dataSetDeleteBatched(new \Conventus\Atoss\StructType\DataSetDeleteBatched()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetPurge operation/method
 */
if ($data->dataSetPurge(new \Conventus\Atoss\StructType\DataSetPurge()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetGet operation/method
 */
if ($data->dataSetGet(new \Conventus\Atoss\StructType\DataSetGet()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Sample call for dataSetUpdateBatched operation/method
 */
if ($data->dataSetUpdateBatched(new \Conventus\Atoss\StructType\DataSetUpdateBatched()) !== false) {
    print_r($data->getResult());
} else {
    print_r($data->getLastError());
}
/**
 * Samples for Lockout ServiceType
 */
$lockout = new \Conventus\Atoss\ServiceType\Lockout($options);
/**
 * Sample call for lockoutUsers operation/method
 */
if ($lockout->lockoutUsers(new \Conventus\Atoss\StructType\LockoutUsers()) !== false) {
    print_r($lockout->getResult());
} else {
    print_r($lockout->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Conventus\Atoss\ServiceType\Update($options);
/**
 * Sample call for updateManningLevelExtended operation/method
 */
if ($update->updateManningLevelExtended(new \Conventus\Atoss\StructType\UpdateManningLevelExtended()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateManningLevelOffer operation/method
 */
if ($update->updateManningLevelOffer(new \Conventus\Atoss\StructType\UpdateManningLevelOffer()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateApplication operation/method
 */
if ($update->updateApplication(new \Conventus\Atoss\StructType\UpdateApplication()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updatePlanning operation/method
 */
if ($update->updatePlanning(new \Conventus\Atoss\StructType\UpdatePlanning()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateRepository operation/method
 */
if ($update->updateRepository(new \Conventus\Atoss\StructType\UpdateRepository()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updatePersonalData operation/method
 */
if ($update->updatePersonalData(new \Conventus\Atoss\StructType\UpdatePersonalData()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateVersionValidityRange operation/method
 */
if ($update->updateVersionValidityRange(new \Conventus\Atoss\StructType\UpdateVersionValidityRange()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Conventus\Atoss\ServiceType\Create($options);
/**
 * Sample call for createAbsence operation/method
 */
if ($create->createAbsence(new \Conventus\Atoss\StructType\CreateAbsence()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createBooking operation/method
 */
if ($create->createBooking(new \Conventus\Atoss\StructType\CreateBooking()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createPlanning operation/method
 */
if ($create->createPlanning(new \Conventus\Atoss\StructType\CreatePlanning()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createManningLevelExtended operation/method
 */
if ($create->createManningLevelExtended(new \Conventus\Atoss\StructType\CreateManningLevelExtended()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createClockin operation/method
 */
if ($create->createClockin(new \Conventus\Atoss\StructType\CreateClockin()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Conventus\Atoss\ServiceType\Set($options);
/**
 * Sample call for setVersioningRange operation/method
 */
if ($set->setVersioningRange(new \Conventus\Atoss\StructType\SetVersioningRange()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setSessionFloat operation/method
 */
if ($set->setSessionFloat(new \Conventus\Atoss\StructType\SetSessionFloat()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setVersioningDate operation/method
 */
if ($set->setVersioningDate(new \Conventus\Atoss\StructType\SetVersioningDate()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setSessionInteger operation/method
 */
if ($set->setSessionInteger(new \Conventus\Atoss\StructType\SetSessionInteger()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setSessionDateTime operation/method
 */
if ($set->setSessionDateTime(new \Conventus\Atoss\StructType\SetSessionDateTime()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setDayProperties operation/method
 */
if ($set->setDayProperties(new \Conventus\Atoss\StructType\SetDayProperties()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setApplicationPropertyInteger operation/method
 */
if ($set->setApplicationPropertyInteger(new \Conventus\Atoss\StructType\SetApplicationPropertyInteger()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setApplicationPropertyDateTime operation/method
 */
if ($set->setApplicationPropertyDateTime(new \Conventus\Atoss\StructType\SetApplicationPropertyDateTime()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setApplicationPropertyString operation/method
 */
if ($set->setApplicationPropertyString(new \Conventus\Atoss\StructType\SetApplicationPropertyString()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setMessageState operation/method
 */
if ($set->setMessageState(new \Conventus\Atoss\StructType\SetMessageState()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setSessionString operation/method
 */
if ($set->setSessionString(new \Conventus\Atoss\StructType\SetSessionString()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Switch ServiceType
 */
$switch = new \Conventus\Atoss\ServiceType\_Switch($options);
/**
 * Sample call for switchUser operation/method
 */
if ($switch->switchUser(new \Conventus\Atoss\StructType\SwitchUser()) !== false) {
    print_r($switch->getResult());
} else {
    print_r($switch->getLastError());
}
/**
 * Sample call for switchLocale operation/method
 */
if ($switch->switchLocale(new \Conventus\Atoss\StructType\SwitchLocale()) !== false) {
    print_r($switch->getResult());
} else {
    print_r($switch->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \Conventus\Atoss\ServiceType\Remove($options);
/**
 * Sample call for removeClockin operation/method
 */
if ($remove->removeClockin(new \Conventus\Atoss\StructType\RemoveClockin()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for removePlanning operation/method
 */
if ($remove->removePlanning(new \Conventus\Atoss\StructType\RemovePlanning()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for removeBooking operation/method
 */
if ($remove->removeBooking(new \Conventus\Atoss\StructType\RemoveBooking()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for removeAbsence operation/method
 */
if ($remove->removeAbsence(new \Conventus\Atoss\StructType\RemoveAbsence()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Append ServiceType
 */
$append = new \Conventus\Atoss\ServiceType\Append($options);
/**
 * Sample call for appendNotificationToken operation/method
 */
if ($append->appendNotificationToken(new \Conventus\Atoss\StructType\AppendNotificationToken()) !== false) {
    print_r($append->getResult());
} else {
    print_r($append->getLastError());
}
/**
 * Sample call for appendEmployee operation/method
 */
if ($append->appendEmployee(new \Conventus\Atoss\StructType\AppendEmployee()) !== false) {
    print_r($append->getResult());
} else {
    print_r($append->getLastError());
}
/**
 * Sample call for appendRepository operation/method
 */
if ($append->appendRepository(new \Conventus\Atoss\StructType\AppendRepository()) !== false) {
    print_r($append->getResult());
} else {
    print_r($append->getLastError());
}
/**
 * Sample call for appendUserGroupEmployee operation/method
 */
if ($append->appendUserGroupEmployee(new \Conventus\Atoss\StructType\AppendUserGroupEmployee()) !== false) {
    print_r($append->getResult());
} else {
    print_r($append->getLastError());
}
/**
 * Sample call for appendVersionValidityRange operation/method
 */
if ($append->appendVersionValidityRange(new \Conventus\Atoss\StructType\AppendVersionValidityRange()) !== false) {
    print_r($append->getResult());
} else {
    print_r($append->getLastError());
}
/**
 * Sample call for appendApplication operation/method
 */
if ($append->appendApplication(new \Conventus\Atoss\StructType\AppendApplication()) !== false) {
    print_r($append->getResult());
} else {
    print_r($append->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Conventus\Atoss\ServiceType\Delete($options);
/**
 * Sample call for deleteVersion operation/method
 */
if ($delete->deleteVersion(new \Conventus\Atoss\StructType\DeleteVersion()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteApplication operation/method
 */
if ($delete->deleteApplication(new \Conventus\Atoss\StructType\DeleteApplication()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteVersionValidityRange operation/method
 */
if ($delete->deleteVersionValidityRange(new \Conventus\Atoss\StructType\DeleteVersionValidityRange()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteEmployee operation/method
 */
if ($delete->deleteEmployee(new \Conventus\Atoss\StructType\DeleteEmployee()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Conventus\Atoss\ServiceType\Send($options);
/**
 * Sample call for sendMessage operation/method
 */
if ($send->sendMessage(new \Conventus\Atoss\StructType\SendMessage()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMail operation/method
 */
if ($send->sendMail(new \Conventus\Atoss\StructType\SendMail()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for sendMailToMailingList operation/method
 */
if ($send->sendMailToMailingList(new \Conventus\Atoss\StructType\SendMailToMailingList()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Transfer ServiceType
 */
$transfer = new \Conventus\Atoss\ServiceType\Transfer($options);
/**
 * Sample call for transferPlanVersions operation/method
 */
if ($transfer->transferPlanVersions(new \Conventus\Atoss\StructType\TransferPlanVersions()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Sample call for transferPlanningPatternIgnoreExisting operation/method
 */
if ($transfer->transferPlanningPatternIgnoreExisting(new \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Sample call for transferRegistry operation/method
 */
if ($transfer->transferRegistry(new \Conventus\Atoss\StructType\TransferRegistry()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Sample call for transferPlanningPatternVersionExtended operation/method
 */
if ($transfer->transferPlanningPatternVersionExtended(new \Conventus\Atoss\StructType\TransferPlanningPatternVersionExtended()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Sample call for transferPlanningPatternVersion operation/method
 */
if ($transfer->transferPlanningPatternVersion(new \Conventus\Atoss\StructType\TransferPlanningPatternVersion()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Sample call for transferPlanningPattern operation/method
 */
if ($transfer->transferPlanningPattern(new \Conventus\Atoss\StructType\TransferPlanningPattern()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Samples for Revoke ServiceType
 */
$revoke = new \Conventus\Atoss\ServiceType\Revoke($options);
/**
 * Sample call for revokeToken operation/method
 */
if ($revoke->revokeToken(new \Conventus\Atoss\StructType\RevokeToken()) !== false) {
    print_r($revoke->getResult());
} else {
    print_r($revoke->getLastError());
}
/**
 * Samples for Lock ServiceType
 */
$lock = new \Conventus\Atoss\ServiceType\Lock($options);
/**
 * Sample call for lockAccountingPeriodForEmployees operation/method
 */
if ($lock->lockAccountingPeriodForEmployees(new \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees()) !== false) {
    print_r($lock->getResult());
} else {
    print_r($lock->getLastError());
}
/**
 * Sample call for lockProcessing operation/method
 */
if ($lock->lockProcessing(new \Conventus\Atoss\StructType\LockProcessing()) !== false) {
    print_r($lock->getResult());
} else {
    print_r($lock->getLastError());
}
/**
 * Sample call for lockWorkplaceSales operation/method
 */
if ($lock->lockWorkplaceSales(new \Conventus\Atoss\StructType\LockWorkplaceSales()) !== false) {
    print_r($lock->getResult());
} else {
    print_r($lock->getLastError());
}
/**
 * Sample call for lockAccountingPeriod operation/method
 */
if ($lock->lockAccountingPeriod(new \Conventus\Atoss\StructType\LockAccountingPeriod()) !== false) {
    print_r($lock->getResult());
} else {
    print_r($lock->getLastError());
}
/**
 * Samples for Rollback ServiceType
 */
$rollback = new \Conventus\Atoss\ServiceType\Rollback($options);
/**
 * Sample call for rollbackTransaction operation/method
 */
if ($rollback->rollbackTransaction(new \Conventus\Atoss\StructType\RollbackTransaction()) !== false) {
    print_r($rollback->getResult());
} else {
    print_r($rollback->getLastError());
}
/**
 * Samples for Enum ServiceType
 */
$enum = new \Conventus\Atoss\ServiceType\Enum($options);
/**
 * Sample call for enumPendingTasks operation/method
 */
if ($enum->enumPendingTasks(new \Conventus\Atoss\StructType\EnumPendingTasks()) !== false) {
    print_r($enum->getResult());
} else {
    print_r($enum->getLastError());
}
/**
 * Sample call for enumRunningTasks operation/method
 */
if ($enum->enumRunningTasks(new \Conventus\Atoss\StructType\EnumRunningTasks()) !== false) {
    print_r($enum->getResult());
} else {
    print_r($enum->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \Conventus\Atoss\ServiceType\Move($options);
/**
 * Sample call for moveVersion operation/method
 */
if ($move->moveVersion(new \Conventus\Atoss\StructType\MoveVersion()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \Conventus\Atoss\ServiceType\Is($options);
/**
 * Sample call for isSettingEnabled operation/method
 */
if ($is->isSettingEnabled(new \Conventus\Atoss\StructType\IsSettingEnabled()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Reset ServiceType
 */
$reset = new \Conventus\Atoss\ServiceType\Reset($options);
/**
 * Sample call for resetVersioning operation/method
 */
if ($reset->resetVersioning(new \Conventus\Atoss\StructType\ResetVersioning()) !== false) {
    print_r($reset->getResult());
} else {
    print_r($reset->getLastError());
}
/**
 * Sample call for resetPassword operation/method
 */
if ($reset->resetPassword(new \Conventus\Atoss\StructType\ResetPassword()) !== false) {
    print_r($reset->getResult());
} else {
    print_r($reset->getLastError());
}
/**
 * Samples for Logout ServiceType
 */
$logout = new \Conventus\Atoss\ServiceType\Logout($options);
/**
 * Sample call for logout operation/method
 */
if ($logout->logout(new \Conventus\Atoss\StructType\Logout()) !== false) {
    print_r($logout->getResult());
} else {
    print_r($logout->getLastError());
}
/**
 * Samples for Clockin ServiceType
 */
$clockin = new \Conventus\Atoss\ServiceType\Clockin($options);
/**
 * Sample call for clockin operation/method
 */
if ($clockin->clockin(new \Conventus\Atoss\StructType\Clockin()) !== false) {
    print_r($clockin->getResult());
} else {
    print_r($clockin->getLastError());
}
/**
 * Samples for Wait ServiceType
 */
$wait = new \Conventus\Atoss\ServiceType\Wait($options);
/**
 * Sample call for waitForNextEventsInQueue operation/method
 */
if ($wait->waitForNextEventsInQueue(new \Conventus\Atoss\StructType\WaitForNextEventsInQueue()) !== false) {
    print_r($wait->getResult());
} else {
    print_r($wait->getLastError());
}
/**
 * Samples for Commit ServiceType
 */
$commit = new \Conventus\Atoss\ServiceType\Commit($options);
/**
 * Sample call for commitTransaction operation/method
 */
if ($commit->commitTransaction(new \Conventus\Atoss\StructType\CommitTransaction()) !== false) {
    print_r($commit->getResult());
} else {
    print_r($commit->getLastError());
}
/**
 * Samples for Issue ServiceType
 */
$issue = new \Conventus\Atoss\ServiceType\Issue($options);
/**
 * Sample call for issueToken operation/method
 */
if ($issue->issueToken(new \Conventus\Atoss\StructType\IssueToken()) !== false) {
    print_r($issue->getResult());
} else {
    print_r($issue->getLastError());
}
/**
 * Samples for Register ServiceType
 */
$register = new \Conventus\Atoss\ServiceType\Register($options);
/**
 * Sample call for registerEventQueue operation/method
 */
if ($register->registerEventQueue(new \Conventus\Atoss\StructType\RegisterEventQueue()) !== false) {
    print_r($register->getResult());
} else {
    print_r($register->getLastError());
}
/**
 * Samples for Clockout ServiceType
 */
$clockout = new \Conventus\Atoss\ServiceType\Clockout($options);
/**
 * Sample call for clockout operation/method
 */
if ($clockout->clockout(new \Conventus\Atoss\StructType\Clockout()) !== false) {
    print_r($clockout->getResult());
} else {
    print_r($clockout->getLastError());
}
/**
 * Samples for Start ServiceType
 */
$start = new \Conventus\Atoss\ServiceType\Start($options);
/**
 * Sample call for startTransaction operation/method
 */
if ($start->startTransaction(new \Conventus\Atoss\StructType\StartTransaction()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Sample call for startExternalImport operation/method
 */
if ($start->startExternalImport(new \Conventus\Atoss\StructType\StartExternalImport()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \Conventus\Atoss\ServiceType\Change($options);
/**
 * Sample call for changePassword operation/method
 */
if ($change->changePassword(new \Conventus\Atoss\StructType\ChangePassword()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Sample call for changePrimaryKey operation/method
 */
if ($change->changePrimaryKey(new \Conventus\Atoss\StructType\ChangePrimaryKey()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Licence ServiceType
 */
$licence = new \Conventus\Atoss\ServiceType\Licence($options);
/**
 * Sample call for licenceEmployee operation/method
 */
if ($licence->licenceEmployee(new \Conventus\Atoss\StructType\LicenceEmployee()) !== false) {
    print_r($licence->getResult());
} else {
    print_r($licence->getLastError());
}
/**
 * Samples for Trigger ServiceType
 */
$trigger = new \Conventus\Atoss\ServiceType\Trigger($options);
/**
 * Sample call for triggerWorkflowEvent operation/method
 */
if ($trigger->triggerWorkflowEvent(new \Conventus\Atoss\StructType\TriggerWorkflowEvent()) !== false) {
    print_r($trigger->getResult());
} else {
    print_r($trigger->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \Conventus\Atoss\ServiceType\Process($options);
/**
 * Sample call for process operation/method
 */
if ($process->process(new \Conventus\Atoss\StructType\Process()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Samples for Unregister ServiceType
 */
$unregister = new \Conventus\Atoss\ServiceType\Unregister($options);
/**
 * Sample call for unregisterEventQueue operation/method
 */
if ($unregister->unregisterEventQueue(new \Conventus\Atoss\StructType\UnregisterEventQueue()) !== false) {
    print_r($unregister->getResult());
} else {
    print_r($unregister->getLastError());
}
/**
 * Samples for Shut ServiceType
 */
$shut = new \Conventus\Atoss\ServiceType\Shut($options);
/**
 * Sample call for shutDownServer operation/method
 */
if ($shut->shutDownServer(new \Conventus\Atoss\StructType\ShutDownServer()) !== false) {
    print_r($shut->getResult());
} else {
    print_r($shut->getLastError());
}
/**
 * Samples for Clock ServiceType
 */
$clock = new \Conventus\Atoss\ServiceType\Clock($options);
/**
 * Sample call for clockNow operation/method
 */
if ($clock->clockNow(new \Conventus\Atoss\StructType\ClockNow()) !== false) {
    print_r($clock->getResult());
} else {
    print_r($clock->getLastError());
}
/**
 * Sample call for clock operation/method
 */
if ($clock->clock(new \Conventus\Atoss\StructType\Clock()) !== false) {
    print_r($clock->getResult());
} else {
    print_r($clock->getLastError());
}
/**
 * Samples for Unlock ServiceType
 */
$unlock = new \Conventus\Atoss\ServiceType\Unlock($options);
/**
 * Sample call for unlockWorkplaceSales operation/method
 */
if ($unlock->unlockWorkplaceSales(new \Conventus\Atoss\StructType\UnlockWorkplaceSales()) !== false) {
    print_r($unlock->getResult());
} else {
    print_r($unlock->getLastError());
}
/**
 * Samples for End ServiceType
 */
$end = new \Conventus\Atoss\ServiceType\End($options);
/**
 * Sample call for endLockoutUsers operation/method
 */
if ($end->endLockoutUsers(new \Conventus\Atoss\StructType\EndLockoutUsers()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Samples for Dump ServiceType
 */
$dump = new \Conventus\Atoss\ServiceType\Dump($options);
/**
 * Sample call for dumpTable operation/method
 */
if ($dump->dumpTable(new \Conventus\Atoss\StructType\DumpTable()) !== false) {
    print_r($dump->getResult());
} else {
    print_r($dump->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \Conventus\Atoss\ServiceType\Execute($options);
/**
 * Sample call for executeTaskImmediatly operation/method
 */
if ($execute->executeTaskImmediatly(new \Conventus\Atoss\StructType\ExecuteTaskImmediatly()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Conventus\Atoss\ServiceType\Import($options);
/**
 * Sample call for importXML operation/method
 */
if ($import->importXML(new \Conventus\Atoss\StructType\ImportXML()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Conventus\Atoss\ServiceType\Check($options);
/**
 * Sample call for checkPassword operation/method
 */
if ($check->checkPassword(new \Conventus\Atoss\StructType\CheckPassword()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
