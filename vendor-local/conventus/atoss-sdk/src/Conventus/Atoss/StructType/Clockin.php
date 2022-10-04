<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clockin StructType
 * Meta information extracted from the WSDL
 * - type: tns:clockin
 * @subpackage Structs
 */
class Clockin extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The badge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $badge = null;
    /**
     * The timestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The device
     * @var int|null
     */
    protected ?int $device = null;
    /**
     * The assignment
     * @var int|null
     */
    protected ?int $assignment = null;
    /**
     * The access
     * @var int|null
     */
    protected ?int $access = null;
    /**
     * The offline
     * @var bool|null
     */
    protected ?bool $offline = null;
    /**
     * Constructor method for clockin
     * @uses Clockin::setEmployee()
     * @uses Clockin::setBadge()
     * @uses Clockin::setTimestamp()
     * @uses Clockin::setAccount()
     * @uses Clockin::setDevice()
     * @uses Clockin::setAssignment()
     * @uses Clockin::setAccess()
     * @uses Clockin::setOffline()
     * @param string $employee
     * @param string $badge
     * @param string $timestamp
     * @param int $account
     * @param int $device
     * @param int $assignment
     * @param int $access
     * @param bool $offline
     */
    public function __construct(?string $employee = null, ?string $badge = null, ?string $timestamp = null, ?int $account = null, ?int $device = null, ?int $assignment = null, ?int $access = null, ?bool $offline = null)
    {
        $this
            ->setEmployee($employee)
            ->setBadge($badge)
            ->setTimestamp($timestamp)
            ->setAccount($account)
            ->setDevice($device)
            ->setAssignment($assignment)
            ->setAccess($access)
            ->setOffline($offline);
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
     * @return \Conventus\Atoss\StructType\Clockin
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
     * Get badge value
     * @return string|null
     */
    public function getBadge(): ?string
    {
        return $this->badge;
    }
    /**
     * Set badge value
     * @param string $badge
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setBadge(?string $badge = null): self
    {
        // validation for constraint: string
        if (!is_null($badge) && !is_string($badge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($badge, true), gettype($badge)), __LINE__);
        }
        $this->badge = $badge;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get account value
     * @return int|null
     */
    public function getAccount(): ?int
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param int $account
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setAccount(?int $account = null): self
    {
        // validation for constraint: int
        if (!is_null($account) && !(is_int($account) || ctype_digit($account))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get device value
     * @return int|null
     */
    public function getDevice(): ?int
    {
        return $this->device;
    }
    /**
     * Set device value
     * @param int $device
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setDevice(?int $device = null): self
    {
        // validation for constraint: int
        if (!is_null($device) && !(is_int($device) || ctype_digit($device))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($device, true), gettype($device)), __LINE__);
        }
        $this->device = $device;
        
        return $this;
    }
    /**
     * Get assignment value
     * @return int|null
     */
    public function getAssignment(): ?int
    {
        return $this->assignment;
    }
    /**
     * Set assignment value
     * @param int $assignment
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setAssignment(?int $assignment = null): self
    {
        // validation for constraint: int
        if (!is_null($assignment) && !(is_int($assignment) || ctype_digit($assignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignment, true), gettype($assignment)), __LINE__);
        }
        $this->assignment = $assignment;
        
        return $this;
    }
    /**
     * Get access value
     * @return int|null
     */
    public function getAccess(): ?int
    {
        return $this->access;
    }
    /**
     * Set access value
     * @param int $access
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setAccess(?int $access = null): self
    {
        // validation for constraint: int
        if (!is_null($access) && !(is_int($access) || ctype_digit($access))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($access, true), gettype($access)), __LINE__);
        }
        $this->access = $access;
        
        return $this;
    }
    /**
     * Get offline value
     * @return bool|null
     */
    public function getOffline(): ?bool
    {
        return $this->offline;
    }
    /**
     * Set offline value
     * @param bool $offline
     * @return \Conventus\Atoss\StructType\Clockin
     */
    public function setOffline(?bool $offline = null): self
    {
        // validation for constraint: boolean
        if (!is_null($offline) && !is_bool($offline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($offline, true), gettype($offline)), __LINE__);
        }
        $this->offline = $offline;
        
        return $this;
    }
}
