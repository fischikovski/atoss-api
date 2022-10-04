<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lockAccountingPeriod StructType
 * Meta information extracted from the WSDL
 * - type: tns:lockAccountingPeriod
 * @subpackage Structs
 */
class LockAccountingPeriod extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
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
     * Constructor method for lockAccountingPeriod
     * @uses LockAccountingPeriod::setEmployee()
     * @uses LockAccountingPeriod::setFirstday()
     * @uses LockAccountingPeriod::setLastday()
     * @uses LockAccountingPeriod::setLocked()
     * @param string $employee
     * @param string $firstday
     * @param string $lastday
     * @param int $locked
     */
    public function __construct(?string $employee = null, ?string $firstday = null, ?string $lastday = null, ?int $locked = null)
    {
        $this
            ->setEmployee($employee)
            ->setFirstday($firstday)
            ->setLastday($lastday)
            ->setLocked($locked);
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
     * @return \Conventus\Atoss\StructType\LockAccountingPeriod
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
     * @return \Conventus\Atoss\StructType\LockAccountingPeriod
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
     * @return \Conventus\Atoss\StructType\LockAccountingPeriod
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
     * @return \Conventus\Atoss\StructType\LockAccountingPeriod
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
