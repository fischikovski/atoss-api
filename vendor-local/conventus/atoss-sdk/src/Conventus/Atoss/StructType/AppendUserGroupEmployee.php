<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appendUserGroupEmployee StructType
 * Meta information extracted from the WSDL
 * - type: tns:appendUserGroupEmployee
 * @subpackage Structs
 */
class AppendUserGroupEmployee extends AbstractStructBase
{
    /**
     * The usergroup
     * @var int|null
     */
    protected ?int $usergroup = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The active
     * @var int|null
     */
    protected ?int $active = null;
    /**
     * Constructor method for appendUserGroupEmployee
     * @uses AppendUserGroupEmployee::setUsergroup()
     * @uses AppendUserGroupEmployee::setEmployee()
     * @uses AppendUserGroupEmployee::setActive()
     * @param int $usergroup
     * @param string $employee
     * @param int $active
     */
    public function __construct(?int $usergroup = null, ?string $employee = null, ?int $active = null)
    {
        $this
            ->setUsergroup($usergroup)
            ->setEmployee($employee)
            ->setActive($active);
    }
    /**
     * Get usergroup value
     * @return int|null
     */
    public function getUsergroup(): ?int
    {
        return $this->usergroup;
    }
    /**
     * Set usergroup value
     * @param int $usergroup
     * @return \Conventus\Atoss\StructType\AppendUserGroupEmployee
     */
    public function setUsergroup(?int $usergroup = null): self
    {
        // validation for constraint: int
        if (!is_null($usergroup) && !(is_int($usergroup) || ctype_digit($usergroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($usergroup, true), gettype($usergroup)), __LINE__);
        }
        $this->usergroup = $usergroup;
        
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
     * @return \Conventus\Atoss\StructType\AppendUserGroupEmployee
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
     * Get active value
     * @return int|null
     */
    public function getActive(): ?int
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param int $active
     * @return \Conventus\Atoss\StructType\AppendUserGroupEmployee
     */
    public function setActive(?int $active = null): self
    {
        // validation for constraint: int
        if (!is_null($active) && !(is_int($active) || ctype_digit($active))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
}
