<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSubstitutes StructType
 * Meta information extracted from the WSDL
 * - type: tns:getSubstitutes
 * @subpackage Structs
 */
class GetSubstitutes extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The reverse
     * @var int|null
     */
    protected ?int $reverse = null;
    /**
     * Constructor method for getSubstitutes
     * @uses GetSubstitutes::setEmployee()
     * @uses GetSubstitutes::setReverse()
     * @param string $employee
     * @param int $reverse
     */
    public function __construct(?string $employee = null, ?int $reverse = null)
    {
        $this
            ->setEmployee($employee)
            ->setReverse($reverse);
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
     * @return \Conventus\Atoss\StructType\GetSubstitutes
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
     * Get reverse value
     * @return int|null
     */
    public function getReverse(): ?int
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param int $reverse
     * @return \Conventus\Atoss\StructType\GetSubstitutes
     */
    public function setReverse(?int $reverse = null): self
    {
        // validation for constraint: int
        if (!is_null($reverse) && !(is_int($reverse) || ctype_digit($reverse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reverse, true), gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        
        return $this;
    }
}
