<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFreeBalanceValues StructType
 * Meta information extracted from the WSDL
 * - type: tns:getFreeBalanceValues
 * @subpackage Structs
 */
class GetFreeBalanceValues extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $balance = null;
    /**
     * The from
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
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
     * Constructor method for getFreeBalanceValues
     * @uses GetFreeBalanceValues::setEmployee()
     * @uses GetFreeBalanceValues::setBalance()
     * @uses GetFreeBalanceValues::setFrom()
     * @uses GetFreeBalanceValues::setTo()
     * @uses GetFreeBalanceValues::setCarry()
     * @uses GetFreeBalanceValues::setDaily()
     * @param string[] $employee
     * @param int[] $balance
     * @param string $from
     * @param string $to
     * @param int $carry
     * @param int $daily
     */
    public function __construct(?array $employee = null, ?array $balance = null, ?string $from = null, ?string $to = null, ?int $carry = null, ?int $daily = null)
    {
        $this
            ->setEmployee($employee)
            ->setBalance($balance)
            ->setFrom($from)
            ->setTo($to)
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
        foreach ($values as $getFreeBalanceValuesEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getFreeBalanceValuesEmployeeItem)) {
                $invalidValues[] = is_object($getFreeBalanceValuesEmployeeItem) ? get_class($getFreeBalanceValuesEmployeeItem) : sprintf('%s(%s)', gettype($getFreeBalanceValuesEmployeeItem), var_export($getFreeBalanceValuesEmployeeItem, true));
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
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
     * @return int[]
     */
    public function getBalance(): ?array
    {
        return $this->balance;
    }
    /**
     * This method is responsible for validating the values passed to the setBalance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBalance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBalanceForArrayConstraintsFromSetBalance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFreeBalanceValuesBalanceItem) {
            // validation for constraint: itemType
            if (!(is_int($getFreeBalanceValuesBalanceItem) || ctype_digit($getFreeBalanceValuesBalanceItem))) {
                $invalidValues[] = is_object($getFreeBalanceValuesBalanceItem) ? get_class($getFreeBalanceValuesBalanceItem) : sprintf('%s(%s)', gettype($getFreeBalanceValuesBalanceItem), var_export($getFreeBalanceValuesBalanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The balance property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set balance value
     * @throws InvalidArgumentException
     * @param int[] $balance
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
     */
    public function setBalance(?array $balance = null): self
    {
        // validation for constraint: array
        if ('' !== ($balanceArrayErrorMessage = self::validateBalanceForArrayConstraintsFromSetBalance($balance))) {
            throw new InvalidArgumentException($balanceArrayErrorMessage, __LINE__);
        }
        $this->balance = $balance;
        
        return $this;
    }
    /**
     * Add item to balance value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
     */
    public function addToBalance(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The balance property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->balance[] = $item;
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
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
     * @return \Conventus\Atoss\StructType\GetFreeBalanceValues
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
