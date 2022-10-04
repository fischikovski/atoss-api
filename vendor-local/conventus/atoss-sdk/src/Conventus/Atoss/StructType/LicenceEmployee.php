<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for licenceEmployee StructType
 * Meta information extracted from the WSDL
 * - type: tns:licenceEmployee
 * @subpackage Structs
 */
class LicenceEmployee extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The licence
     * @var int|null
     */
    protected ?int $licence = null;
    /**
     * The activity
     * @var int|null
     */
    protected ?int $activity = null;
    /**
     * Constructor method for licenceEmployee
     * @uses LicenceEmployee::setEmployee()
     * @uses LicenceEmployee::setLicence()
     * @uses LicenceEmployee::setActivity()
     * @param string $employee
     * @param int $licence
     * @param int $activity
     */
    public function __construct(?string $employee = null, ?int $licence = null, ?int $activity = null)
    {
        $this
            ->setEmployee($employee)
            ->setLicence($licence)
            ->setActivity($activity);
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
     * @return \Conventus\Atoss\StructType\LicenceEmployee
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
     * Get licence value
     * @return int|null
     */
    public function getLicence(): ?int
    {
        return $this->licence;
    }
    /**
     * Set licence value
     * @param int $licence
     * @return \Conventus\Atoss\StructType\LicenceEmployee
     */
    public function setLicence(?int $licence = null): self
    {
        // validation for constraint: int
        if (!is_null($licence) && !(is_int($licence) || ctype_digit($licence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($licence, true), gettype($licence)), __LINE__);
        }
        $this->licence = $licence;
        
        return $this;
    }
    /**
     * Get activity value
     * @return int|null
     */
    public function getActivity(): ?int
    {
        return $this->activity;
    }
    /**
     * Set activity value
     * @param int $activity
     * @return \Conventus\Atoss\StructType\LicenceEmployee
     */
    public function setActivity(?int $activity = null): self
    {
        // validation for constraint: int
        if (!is_null($activity) && !(is_int($activity) || ctype_digit($activity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($activity, true), gettype($activity)), __LINE__);
        }
        $this->activity = $activity;
        
        return $this;
    }
}
