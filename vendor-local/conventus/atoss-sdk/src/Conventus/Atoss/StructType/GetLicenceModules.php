<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLicenceModules StructType
 * Meta information extracted from the WSDL
 * - type: tns:getLicenceModules
 * @subpackage Structs
 */
class GetLicenceModules extends AbstractStructBase
{
    /**
     * The licence
     * @var int|null
     */
    protected ?int $licence = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * Constructor method for getLicenceModules
     * @uses GetLicenceModules::setLicence()
     * @uses GetLicenceModules::setEmployee()
     * @param int $licence
     * @param string $employee
     */
    public function __construct(?int $licence = null, ?string $employee = null)
    {
        $this
            ->setLicence($licence)
            ->setEmployee($employee);
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
     * @return \Conventus\Atoss\StructType\GetLicenceModules
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
     * @return \Conventus\Atoss\StructType\GetLicenceModules
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
}
