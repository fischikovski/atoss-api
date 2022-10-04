<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changePassword StructType
 * Meta information extracted from the WSDL
 * - type: tns:changePassword
 * @subpackage Structs
 */
class ChangePassword extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The oldpassword
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $oldpassword = null;
    /**
     * The newpassword
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $newpassword = null;
    /**
     * Constructor method for changePassword
     * @uses ChangePassword::setEmployee()
     * @uses ChangePassword::setOldpassword()
     * @uses ChangePassword::setNewpassword()
     * @param string $employee
     * @param string $oldpassword
     * @param string $newpassword
     */
    public function __construct(?string $employee = null, ?string $oldpassword = null, ?string $newpassword = null)
    {
        $this
            ->setEmployee($employee)
            ->setOldpassword($oldpassword)
            ->setNewpassword($newpassword);
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
     * @return \Conventus\Atoss\StructType\ChangePassword
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
     * Get oldpassword value
     * @return string|null
     */
    public function getOldpassword(): ?string
    {
        return $this->oldpassword;
    }
    /**
     * Set oldpassword value
     * @param string $oldpassword
     * @return \Conventus\Atoss\StructType\ChangePassword
     */
    public function setOldpassword(?string $oldpassword = null): self
    {
        // validation for constraint: string
        if (!is_null($oldpassword) && !is_string($oldpassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldpassword, true), gettype($oldpassword)), __LINE__);
        }
        $this->oldpassword = $oldpassword;
        
        return $this;
    }
    /**
     * Get newpassword value
     * @return string|null
     */
    public function getNewpassword(): ?string
    {
        return $this->newpassword;
    }
    /**
     * Set newpassword value
     * @param string $newpassword
     * @return \Conventus\Atoss\StructType\ChangePassword
     */
    public function setNewpassword(?string $newpassword = null): self
    {
        // validation for constraint: string
        if (!is_null($newpassword) && !is_string($newpassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newpassword, true), gettype($newpassword)), __LINE__);
        }
        $this->newpassword = $newpassword;
        
        return $this;
    }
}
