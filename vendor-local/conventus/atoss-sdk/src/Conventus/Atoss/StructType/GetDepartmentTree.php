<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDepartmentTree StructType
 * Meta information extracted from the WSDL
 * - type: tns:getDepartmentTree
 * @subpackage Structs
 */
class GetDepartmentTree extends AbstractStructBase
{
    /**
     * The department
     * @var int|null
     */
    protected ?int $department = null;
    /**
     * Constructor method for getDepartmentTree
     * @uses GetDepartmentTree::setDepartment()
     * @param int $department
     */
    public function __construct(?int $department = null)
    {
        $this
            ->setDepartment($department);
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
     * @return \Conventus\Atoss\StructType\GetDepartmentTree
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
}
