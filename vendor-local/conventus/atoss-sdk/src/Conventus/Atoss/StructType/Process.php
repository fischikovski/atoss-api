<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for process StructType
 * Meta information extracted from the WSDL
 * - type: tns:process
 * @subpackage Structs
 */
class Process extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $start = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The reserved
     * @var bool|null
     */
    protected ?bool $reserved = null;
    /**
     * The reserved2
     * @var bool|null
     */
    protected ?bool $reserved2 = null;
    /**
     * Constructor method for process
     * @uses Process::setEmployee()
     * @uses Process::setStart()
     * @uses Process::setEnd()
     * @uses Process::setReserved()
     * @uses Process::setReserved2()
     * @param string $employee
     * @param string $start
     * @param string $end
     * @param bool $reserved
     * @param bool $reserved2
     */
    public function __construct(?string $employee = null, ?string $start = null, ?string $end = null, ?bool $reserved = null, ?bool $reserved2 = null)
    {
        $this
            ->setEmployee($employee)
            ->setStart($start)
            ->setEnd($end)
            ->setReserved($reserved)
            ->setReserved2($reserved2);
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
     * @return \Conventus\Atoss\StructType\Process
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
     * Get start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Conventus\Atoss\StructType\Process
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Conventus\Atoss\StructType\Process
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
    /**
     * Get reserved value
     * @return bool|null
     */
    public function getReserved(): ?bool
    {
        return $this->reserved;
    }
    /**
     * Set reserved value
     * @param bool $reserved
     * @return \Conventus\Atoss\StructType\Process
     */
    public function setReserved(?bool $reserved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reserved) && !is_bool($reserved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserved, true), gettype($reserved)), __LINE__);
        }
        $this->reserved = $reserved;
        
        return $this;
    }
    /**
     * Get reserved2 value
     * @return bool|null
     */
    public function getReserved2(): ?bool
    {
        return $this->reserved2;
    }
    /**
     * Set reserved2 value
     * @param bool $reserved2
     * @return \Conventus\Atoss\StructType\Process
     */
    public function setReserved2(?bool $reserved2 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reserved2) && !is_bool($reserved2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserved2, true), gettype($reserved2)), __LINE__);
        }
        $this->reserved2 = $reserved2;
        
        return $this;
    }
}
