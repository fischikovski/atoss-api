<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeBooking StructType
 * Meta information extracted from the WSDL
 * - type: tns:removeBooking
 * @subpackage Structs
 */
class RemoveBooking extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The time
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $time = null;
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The offset
     * @var int|null
     */
    protected ?int $offset = null;
    /**
     * Constructor method for removeBooking
     * @uses RemoveBooking::setEmployee()
     * @uses RemoveBooking::setDate()
     * @uses RemoveBooking::setTime()
     * @uses RemoveBooking::setAccount()
     * @uses RemoveBooking::setOffset()
     * @param string $employee
     * @param string $date
     * @param string $time
     * @param int $account
     * @param int $offset
     */
    public function __construct(?string $employee = null, ?string $date = null, ?string $time = null, ?int $account = null, ?int $offset = null)
    {
        $this
            ->setEmployee($employee)
            ->setDate($date)
            ->setTime($time)
            ->setAccount($account)
            ->setOffset($offset);
    }
    /**
     * Get employee value
     * @return string|null
     */
    public function getEmployee(): ?string
    {
        return $this->employee;
    }
    /**
     * Set employee value
     * @param string $employee
     * @return \Conventus\Atoss\StructType\RemoveBooking
     */
    public function setEmployee(?string $employee = null): self
    {
        // validation for constraint: string
        if (!is_null($employee) && !is_string($employee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee, true), gettype($employee)), __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Conventus\Atoss\StructType\RemoveBooking
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Conventus\Atoss\StructType\RemoveBooking
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        
        return $this;
    }
    /**
     * Get account value
     * @return int|null
     */
    public function getAccount(): ?int
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param int $account
     * @return \Conventus\Atoss\StructType\RemoveBooking
     */
    public function setAccount(?int $account = null): self
    {
        // validation for constraint: int
        if (!is_null($account) && !(is_int($account) || ctype_digit($account))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \Conventus\Atoss\StructType\RemoveBooking
     */
    public function setOffset(?int $offset = null): self
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->offset = $offset;
        
        return $this;
    }
}
