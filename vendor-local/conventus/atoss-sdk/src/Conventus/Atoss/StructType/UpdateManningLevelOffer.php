<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateManningLevelOffer StructType
 * Meta information extracted from the WSDL
 * - type: tns:updateManningLevelOffer
 * @subpackage Structs
 */
class UpdateManningLevelOffer extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The state
     * @var int|null
     */
    protected ?int $state = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The planVersion
     * @var int|null
     */
    protected ?int $planVersion = null;
    /**
     * Constructor method for updateManningLevelOffer
     * @uses UpdateManningLevelOffer::setGuid()
     * @uses UpdateManningLevelOffer::setState()
     * @uses UpdateManningLevelOffer::setEmployee()
     * @uses UpdateManningLevelOffer::setPlanVersion()
     * @param string $guid
     * @param int $state
     * @param string $employee
     * @param int $planVersion
     */
    public function __construct(?string $guid = null, ?int $state = null, ?string $employee = null, ?int $planVersion = null)
    {
        $this
            ->setGuid($guid)
            ->setState($state)
            ->setEmployee($employee)
            ->setPlanVersion($planVersion);
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \Conventus\Atoss\StructType\UpdateManningLevelOffer
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get state value
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param int $state
     * @return \Conventus\Atoss\StructType\UpdateManningLevelOffer
     */
    public function setState(?int $state = null): self
    {
        // validation for constraint: int
        if (!is_null($state) && !(is_int($state) || ctype_digit($state))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
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
     * @return \Conventus\Atoss\StructType\UpdateManningLevelOffer
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
     * Get planVersion value
     * @return int|null
     */
    public function getPlanVersion(): ?int
    {
        return $this->planVersion;
    }
    /**
     * Set planVersion value
     * @param int $planVersion
     * @return \Conventus\Atoss\StructType\UpdateManningLevelOffer
     */
    public function setPlanVersion(?int $planVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($planVersion) && !(is_int($planVersion) || ctype_digit($planVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($planVersion, true), gettype($planVersion)), __LINE__);
        }
        $this->planVersion = $planVersion;
        
        return $this;
    }
}
