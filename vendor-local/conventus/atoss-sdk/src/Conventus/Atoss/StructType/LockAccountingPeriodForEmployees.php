<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lockAccountingPeriodForEmployees StructType
 * Meta information extracted from the WSDL
 * - type: tns:lockAccountingPeriodForEmployees
 * @subpackage Structs
 */
class LockAccountingPeriodForEmployees extends AbstractStructBase
{
    /**
     * The employees
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employees = null;
    /**
     * The firstday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstday = null;
    /**
     * The lastday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastday = null;
    /**
     * The locked
     * @var int|null
     */
    protected ?int $locked = null;
    /**
     * Constructor method for lockAccountingPeriodForEmployees
     * @uses LockAccountingPeriodForEmployees::setEmployees()
     * @uses LockAccountingPeriodForEmployees::setFirstday()
     * @uses LockAccountingPeriodForEmployees::setLastday()
     * @uses LockAccountingPeriodForEmployees::setLocked()
     * @param string[] $employees
     * @param string $firstday
     * @param string $lastday
     * @param int $locked
     */
    public function __construct(?array $employees = null, ?string $firstday = null, ?string $lastday = null, ?int $locked = null)
    {
        $this
            ->setEmployees($employees)
            ->setFirstday($firstday)
            ->setLastday($lastday)
            ->setLocked($locked);
    }
    /**
     * Get employees value
     * @return string[]
     */
    public function getEmployees(): ?array
    {
        return $this->employees;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployees method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployees method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeesForArrayConstraintsFromSetEmployees(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lockAccountingPeriodForEmployeesEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($lockAccountingPeriodForEmployeesEmployeesItem)) {
                $invalidValues[] = is_object($lockAccountingPeriodForEmployeesEmployeesItem) ? get_class($lockAccountingPeriodForEmployeesEmployeesItem) : sprintf('%s(%s)', gettype($lockAccountingPeriodForEmployeesEmployeesItem), var_export($lockAccountingPeriodForEmployeesEmployeesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The employees property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set employees value
     * @throws InvalidArgumentException
     * @param string[] $employees
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees
     */
    public function setEmployees(?array $employees = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeesArrayErrorMessage = self::validateEmployeesForArrayConstraintsFromSetEmployees($employees))) {
            throw new InvalidArgumentException($employeesArrayErrorMessage, __LINE__);
        }
        $this->employees = $employees;
        
        return $this;
    }
    /**
     * Add item to employees value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees
     */
    public function addToEmployees(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The employees property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->employees[] = $item;
        
        return $this;
    }
    /**
     * Get firstday value
     * @return string|null
     */
    public function getFirstday(): ?string
    {
        return $this->firstday;
    }
    /**
     * Set firstday value
     * @param string $firstday
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees
     */
    public function setFirstday(?string $firstday = null): self
    {
        // validation for constraint: string
        if (!is_null($firstday) && !is_string($firstday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstday, true), gettype($firstday)), __LINE__);
        }
        $this->firstday = $firstday;
        
        return $this;
    }
    /**
     * Get lastday value
     * @return string|null
     */
    public function getLastday(): ?string
    {
        return $this->lastday;
    }
    /**
     * Set lastday value
     * @param string $lastday
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees
     */
    public function setLastday(?string $lastday = null): self
    {
        // validation for constraint: string
        if (!is_null($lastday) && !is_string($lastday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastday, true), gettype($lastday)), __LINE__);
        }
        $this->lastday = $lastday;
        
        return $this;
    }
    /**
     * Get locked value
     * @return int|null
     */
    public function getLocked(): ?int
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param int $locked
     * @return \Conventus\Atoss\StructType\LockAccountingPeriodForEmployees
     */
    public function setLocked(?int $locked = null): self
    {
        // validation for constraint: int
        if (!is_null($locked) && !(is_int($locked) || ctype_digit($locked))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
}
