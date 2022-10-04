<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lockProcessing StructType
 * Meta information extracted from the WSDL
 * - type: tns:lockProcessing
 * @subpackage Structs
 */
class LockProcessing extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The period
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $period = null;
    /**
     * The locked
     * @var int|null
     */
    protected ?int $locked = null;
    /**
     * Constructor method for lockProcessing
     * @uses LockProcessing::setEmployee()
     * @uses LockProcessing::setPeriod()
     * @uses LockProcessing::setLocked()
     * @param string $employee
     * @param string $period
     * @param int $locked
     */
    public function __construct(?string $employee = null, ?string $period = null, ?int $locked = null)
    {
        $this
            ->setEmployee($employee)
            ->setPeriod($period)
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
     * @return \Conventus\Atoss\StructType\LockProcessing
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
     * Get period value
     * @return string|null
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param string $period
     * @return \Conventus\Atoss\StructType\LockProcessing
     */
    public function setPeriod(?string $period = null): self
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->period = $period;
        
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
     * @return \Conventus\Atoss\StructType\LockProcessing
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
