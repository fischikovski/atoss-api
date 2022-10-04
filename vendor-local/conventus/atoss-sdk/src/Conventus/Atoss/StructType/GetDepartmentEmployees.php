<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDepartmentEmployees StructType
 * Meta information extracted from the WSDL
 * - type: tns:getDepartmentEmployees
 * @subpackage Structs
 */
class GetDepartmentEmployees extends AbstractStructBase
{
    /**
     * The department
     * @var int|null
     */
    protected ?int $department = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The includesubdivisions
     * @var int|null
     */
    protected ?int $includesubdivisions = null;
    /**
     * Constructor method for getDepartmentEmployees
     * @uses GetDepartmentEmployees::setDepartment()
     * @uses GetDepartmentEmployees::setEmployee()
     * @uses GetDepartmentEmployees::setIncludesubdivisions()
     * @param int $department
     * @param string $employee
     * @param int $includesubdivisions
     */
    public function __construct(?int $department = null, ?string $employee = null, ?int $includesubdivisions = null)
    {
        $this
            ->setDepartment($department)
            ->setEmployee($employee)
            ->setIncludesubdivisions($includesubdivisions);
    }
    /**
     * Get department value
     * @return int|null
     */
    public function getDepartment(): ?int
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param int $department
     * @return \Conventus\Atoss\StructType\GetDepartmentEmployees
     */
    public function setDepartment(?int $department = null): self
    {
        // validation for constraint: int
        if (!is_null($department) && !(is_int($department) || ctype_digit($department))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\GetDepartmentEmployees
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
     * Get includesubdivisions value
     * @return int|null
     */
    public function getIncludesubdivisions(): ?int
    {
        return $this->includesubdivisions;
    }
    /**
     * Set includesubdivisions value
     * @param int $includesubdivisions
     * @return \Conventus\Atoss\StructType\GetDepartmentEmployees
     */
    public function setIncludesubdivisions(?int $includesubdivisions = null): self
    {
        // validation for constraint: int
        if (!is_null($includesubdivisions) && !(is_int($includesubdivisions) || ctype_digit($includesubdivisions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includesubdivisions, true), gettype($includesubdivisions)), __LINE__);
        }
        $this->includesubdivisions = $includesubdivisions;
        
        return $this;
    }
}
