<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getHolidayCalendar StructType
 * Meta information extracted from the WSDL
 * - type: tns:getHolidayCalendar
 * @subpackage Structs
 */
class GetHolidayCalendar extends AbstractStructBase
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
     * The periodstart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodstart = null;
    /**
     * The periodend
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodend = null;
    /**
     * Constructor method for getHolidayCalendar
     * @uses GetHolidayCalendar::setEmployee()
     * @uses GetHolidayCalendar::setPeriodstart()
     * @uses GetHolidayCalendar::setPeriodend()
     * @param string[] $employee
     * @param string $periodstart
     * @param string $periodend
     */
    public function __construct(?array $employee = null, ?string $periodstart = null, ?string $periodend = null)
    {
        $this
            ->setEmployee($employee)
            ->setPeriodstart($periodstart)
            ->setPeriodend($periodend);
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
        foreach ($values as $getHolidayCalendarEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getHolidayCalendarEmployeeItem)) {
                $invalidValues[] = is_object($getHolidayCalendarEmployeeItem) ? get_class($getHolidayCalendarEmployeeItem) : sprintf('%s(%s)', gettype($getHolidayCalendarEmployeeItem), var_export($getHolidayCalendarEmployeeItem, true));
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
     * @return \Conventus\Atoss\StructType\GetHolidayCalendar
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
     * @return \Conventus\Atoss\StructType\GetHolidayCalendar
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
     * Get periodstart value
     * @return string|null
     */
    public function getPeriodstart(): ?string
    {
        return $this->periodstart;
    }
    /**
     * Set periodstart value
     * @param string $periodstart
     * @return \Conventus\Atoss\StructType\GetHolidayCalendar
     */
    public function setPeriodstart(?string $periodstart = null): self
    {
        // validation for constraint: string
        if (!is_null($periodstart) && !is_string($periodstart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodstart, true), gettype($periodstart)), __LINE__);
        }
        $this->periodstart = $periodstart;
        
        return $this;
    }
    /**
     * Get periodend value
     * @return string|null
     */
    public function getPeriodend(): ?string
    {
        return $this->periodend;
    }
    /**
     * Set periodend value
     * @param string $periodend
     * @return \Conventus\Atoss\StructType\GetHolidayCalendar
     */
    public function setPeriodend(?string $periodend = null): self
    {
        // validation for constraint: string
        if (!is_null($periodend) && !is_string($periodend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodend, true), gettype($periodend)), __LINE__);
        }
        $this->periodend = $periodend;
        
        return $this;
    }
}
