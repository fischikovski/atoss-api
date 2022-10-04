<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMonthlyReport StructType
 * Meta information extracted from the WSDL
 * - type: tns:getMonthlyReport
 * @subpackage Structs
 */
class GetMonthlyReport extends AbstractStructBase
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
     * The reserved
     * @var int|null
     */
    protected ?int $reserved = null;
    /**
     * The reserved2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reserved2 = null;
    /**
     * The design
     * @var int|null
     */
    protected ?int $design = null;
    /**
     * The handlingofmandantorybreak
     * @var int|null
     */
    protected ?int $handlingofmandantorybreak = null;
    /**
     * Constructor method for getMonthlyReport
     * @uses GetMonthlyReport::setEmployee()
     * @uses GetMonthlyReport::setDate()
     * @uses GetMonthlyReport::setReserved()
     * @uses GetMonthlyReport::setReserved2()
     * @uses GetMonthlyReport::setDesign()
     * @uses GetMonthlyReport::setHandlingofmandantorybreak()
     * @param string $employee
     * @param string $date
     * @param int $reserved
     * @param string $reserved2
     * @param int $design
     * @param int $handlingofmandantorybreak
     */
    public function __construct(?string $employee = null, ?string $date = null, ?int $reserved = null, ?string $reserved2 = null, ?int $design = null, ?int $handlingofmandantorybreak = null)
    {
        $this
            ->setEmployee($employee)
            ->setDate($date)
            ->setReserved($reserved)
            ->setReserved2($reserved2)
            ->setDesign($design)
            ->setHandlingofmandantorybreak($handlingofmandantorybreak);
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
     * @return \Conventus\Atoss\StructType\GetMonthlyReport
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
     * @return \Conventus\Atoss\StructType\GetMonthlyReport
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
     * Get reserved value
     * @return int|null
     */
    public function getReserved(): ?int
    {
        return $this->reserved;
    }
    /**
     * Set reserved value
     * @param int $reserved
     * @return \Conventus\Atoss\StructType\GetMonthlyReport
     */
    public function setReserved(?int $reserved = null): self
    {
        // validation for constraint: int
        if (!is_null($reserved) && !(is_int($reserved) || ctype_digit($reserved))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reserved, true), gettype($reserved)), __LINE__);
        }
        $this->reserved = $reserved;
        
        return $this;
    }
    /**
     * Get reserved2 value
     * @return string|null
     */
    public function getReserved2(): ?string
    {
        return $this->reserved2;
    }
    /**
     * Set reserved2 value
     * @param string $reserved2
     * @return \Conventus\Atoss\StructType\GetMonthlyReport
     */
    public function setReserved2(?string $reserved2 = null): self
    {
        // validation for constraint: string
        if (!is_null($reserved2) && !is_string($reserved2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reserved2, true), gettype($reserved2)), __LINE__);
        }
        $this->reserved2 = $reserved2;
        
        return $this;
    }
    /**
     * Get design value
     * @return int|null
     */
    public function getDesign(): ?int
    {
        return $this->design;
    }
    /**
     * Set design value
     * @param int $design
     * @return \Conventus\Atoss\StructType\GetMonthlyReport
     */
    public function setDesign(?int $design = null): self
    {
        // validation for constraint: int
        if (!is_null($design) && !(is_int($design) || ctype_digit($design))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($design, true), gettype($design)), __LINE__);
        }
        $this->design = $design;
        
        return $this;
    }
    /**
     * Get handlingofmandantorybreak value
     * @return int|null
     */
    public function getHandlingofmandantorybreak(): ?int
    {
        return $this->handlingofmandantorybreak;
    }
    /**
     * Set handlingofmandantorybreak value
     * @param int $handlingofmandantorybreak
     * @return \Conventus\Atoss\StructType\GetMonthlyReport
     */
    public function setHandlingofmandantorybreak(?int $handlingofmandantorybreak = null): self
    {
        // validation for constraint: int
        if (!is_null($handlingofmandantorybreak) && !(is_int($handlingofmandantorybreak) || ctype_digit($handlingofmandantorybreak))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($handlingofmandantorybreak, true), gettype($handlingofmandantorybreak)), __LINE__);
        }
        $this->handlingofmandantorybreak = $handlingofmandantorybreak;
        
        return $this;
    }
}
