<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getVacationYearRecords StructType
 * Meta information extracted from the WSDL
 * - type: tns:getVacationYearRecords
 * @subpackage Structs
 */
class GetVacationYearRecords extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employee = null;
    /**
     * The effectiveday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $effectiveday = null;
    /**
     * Constructor method for getVacationYearRecords
     * @uses GetVacationYearRecords::setEmployee()
     * @uses GetVacationYearRecords::setEffectiveday()
     * @param string[] $employee
     * @param string $effectiveday
     */
    public function __construct(?array $employee = null, ?string $effectiveday = null)
    {
        $this
            ->setEmployee($employee)
            ->setEffectiveday($effectiveday);
    }
    /**
     * Get employee value
     * @return string[]
     */
    public function getEmployee(): ?array
    {
        return $this->employee;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeForArrayConstraintsFromSetEmployee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVacationYearRecordsEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getVacationYearRecordsEmployeeItem)) {
                $invalidValues[] = is_object($getVacationYearRecordsEmployeeItem) ? get_class($getVacationYearRecordsEmployeeItem) : sprintf('%s(%s)', gettype($getVacationYearRecordsEmployeeItem), var_export($getVacationYearRecordsEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The employee property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set employee value
     * @throws InvalidArgumentException
     * @param string[] $employee
     * @return \Conventus\Atoss\StructType\GetVacationYearRecords
     */
    public function setEmployee(?array $employee = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeeArrayErrorMessage = self::validateEmployeeForArrayConstraintsFromSetEmployee($employee))) {
            throw new InvalidArgumentException($employeeArrayErrorMessage, __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
    /**
     * Add item to employee value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetVacationYearRecords
     */
    public function addToEmployee(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The employee property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->employee[] = $item;
        
        return $this;
    }
    /**
     * Get effectiveday value
     * @return string|null
     */
    public function getEffectiveday(): ?string
    {
        return $this->effectiveday;
    }
    /**
     * Set effectiveday value
     * @param string $effectiveday
     * @return \Conventus\Atoss\StructType\GetVacationYearRecords
     */
    public function setEffectiveday(?string $effectiveday = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveday) && !is_string($effectiveday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveday, true), gettype($effectiveday)), __LINE__);
        }
        $this->effectiveday = $effectiveday;
        
        return $this;
    }
}
