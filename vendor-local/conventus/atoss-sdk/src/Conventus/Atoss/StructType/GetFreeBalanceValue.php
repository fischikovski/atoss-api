<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFreeBalanceValue StructType
 * Meta information extracted from the WSDL
 * - type: tns:getFreeBalanceValue
 * @subpackage Structs
 */
class GetFreeBalanceValue extends AbstractStructBase
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
     * The balance
     * @var int|null
     */
    protected ?int $balance = null;
    /**
     * The effectiveday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $effectiveday = null;
    /**
     * The carry
     * @var int|null
     */
    protected ?int $carry = null;
    /**
     * The daily
     * @var int|null
     */
    protected ?int $daily = null;
    /**
     * Constructor method for getFreeBalanceValue
     * @uses GetFreeBalanceValue::setEmployee()
     * @uses GetFreeBalanceValue::setBalance()
     * @uses GetFreeBalanceValue::setEffectiveday()
     * @uses GetFreeBalanceValue::setCarry()
     * @uses GetFreeBalanceValue::setDaily()
     * @param string[] $employee
     * @param int $balance
     * @param string $effectiveday
     * @param int $carry
     * @param int $daily
     */
    public function __construct(?array $employee = null, ?int $balance = null, ?string $effectiveday = null, ?int $carry = null, ?int $daily = null)
    {
        $this
            ->setEmployee($employee)
            ->setBalance($balance)
            ->setEffectiveday($effectiveday)
            ->setCarry($carry)
            ->setDaily($daily);
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
        foreach ($values as $getFreeBalanceValueEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getFreeBalanceValueEmployeeItem)) {
                $invalidValues[] = is_object($getFreeBalanceValueEmployeeItem) ? get_class($getFreeBalanceValueEmployeeItem) : sprintf('%s(%s)', gettype($getFreeBalanceValueEmployeeItem), var_export($getFreeBalanceValueEmployeeItem, true));
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValue
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValue
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
     * Get balance value
     * @return int|null
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param int $balance
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValue
     */
    public function setBalance(?int $balance = null): self
    {
        // validation for constraint: int
        if (!is_null($balance) && !(is_int($balance) || ctype_digit($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->balance = $balance;
        
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValue
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
    /**
     * Get carry value
     * @return int|null
     */
    public function getCarry(): ?int
    {
        return $this->carry;
    }
    /**
     * Set carry value
     * @param int $carry
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValue
     */
    public function setCarry(?int $carry = null): self
    {
        // validation for constraint: int
        if (!is_null($carry) && !(is_int($carry) || ctype_digit($carry))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carry, true), gettype($carry)), __LINE__);
        }
        $this->carry = $carry;
        
        return $this;
    }
    /**
     * Get daily value
     * @return int|null
     */
    public function getDaily(): ?int
    {
        return $this->daily;
    }
    /**
     * Set daily value
     * @param int $daily
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValue
     */
    public function setDaily(?int $daily = null): self
    {
        // validation for constraint: int
        if (!is_null($daily) && !(is_int($daily) || ctype_digit($daily))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daily, true), gettype($daily)), __LINE__);
        }
        $this->daily = $daily;
        
        return $this;
    }
}
