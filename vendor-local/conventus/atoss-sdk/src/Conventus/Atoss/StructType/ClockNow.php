<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clockNow StructType
 * Meta information extracted from the WSDL
 * - type: tns:clockNow
 * @subpackage Structs
 */
class ClockNow extends AbstractStructBase
{
    /**
     * The badge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $badge = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The device
     * @var int|null
     */
    protected ?int $device = null;
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The assignment
     * @var int|null
     */
    protected ?int $assignment = null;
    /**
     * The costcenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $costcenter = null;
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * The projectstatus
     * @var int|null
     */
    protected ?int $projectstatus = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The process
     * @var int|null
     */
    protected ?int $process = null;
    /**
     * The ipsource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ipsource = null;
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $latitude = null;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $longitude = null;
    /**
     * Constructor method for clockNow
     * @uses ClockNow::setBadge()
     * @uses ClockNow::setEmployee()
     * @uses ClockNow::setDevice()
     * @uses ClockNow::setAccount()
     * @uses ClockNow::setAssignment()
     * @uses ClockNow::setCostcenter()
     * @uses ClockNow::setProject()
     * @uses ClockNow::setProjectstatus()
     * @uses ClockNow::setRemark()
     * @uses ClockNow::setProcess()
     * @uses ClockNow::setIpsource()
     * @uses ClockNow::setLatitude()
     * @uses ClockNow::setLongitude()
     * @param string $badge
     * @param string $employee
     * @param int $device
     * @param int $account
     * @param int $assignment
     * @param string $costcenter
     * @param string $project
     * @param int $projectstatus
     * @param string $remark
     * @param int $process
     * @param string $ipsource
     * @param string $latitude
     * @param string $longitude
     */
    public function __construct(?string $badge = null, ?string $employee = null, ?int $device = null, ?int $account = null, ?int $assignment = null, ?string $costcenter = null, ?string $project = null, ?int $projectstatus = null, ?string $remark = null, ?int $process = null, ?string $ipsource = null, ?string $latitude = null, ?string $longitude = null)
    {
        $this
            ->setBadge($badge)
            ->setEmployee($employee)
            ->setDevice($device)
            ->setAccount($account)
            ->setAssignment($assignment)
            ->setCostcenter($costcenter)
            ->setProject($project)
            ->setProjectstatus($projectstatus)
            ->setRemark($remark)
            ->setProcess($process)
            ->setIpsource($ipsource)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
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
     * @return \Conventus\Atoss\StructType\ClockNow
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
     * @return \Conventus\Atoss\StructType\ClockNow
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
     * @return \Conventus\Atoss\StructType\ClockNow
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
     * @return \Conventus\Atoss\StructType\ClockNow
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
     * @return \Conventus\Atoss\StructType\ClockNow
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
     * Get costcenter value
     * @return string|null
     */
    public function getCostcenter(): ?string
    {
        return $this->costcenter;
    }
    /**
     * Set costcenter value
     * @param string $costcenter
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setCostcenter(?string $costcenter = null): self
    {
        // validation for constraint: string
        if (!is_null($costcenter) && !is_string($costcenter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costcenter, true), gettype($costcenter)), __LINE__);
        }
        $this->costcenter = $costcenter;
        
        return $this;
    }
    /**
     * Get project value
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->project;
    }
    /**
     * Set project value
     * @param string $project
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setProject(?string $project = null): self
    {
        // validation for constraint: string
        if (!is_null($project) && !is_string($project)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($project, true), gettype($project)), __LINE__);
        }
        $this->project = $project;
        
        return $this;
    }
    /**
     * Get projectstatus value
     * @return int|null
     */
    public function getProjectstatus(): ?int
    {
        return $this->projectstatus;
    }
    /**
     * Set projectstatus value
     * @param int $projectstatus
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setProjectstatus(?int $projectstatus = null): self
    {
        // validation for constraint: int
        if (!is_null($projectstatus) && !(is_int($projectstatus) || ctype_digit($projectstatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectstatus, true), gettype($projectstatus)), __LINE__);
        }
        $this->projectstatus = $projectstatus;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get process value
     * @return int|null
     */
    public function getProcess(): ?int
    {
        return $this->process;
    }
    /**
     * Set process value
     * @param int $process
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setProcess(?int $process = null): self
    {
        // validation for constraint: int
        if (!is_null($process) && !(is_int($process) || ctype_digit($process))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($process, true), gettype($process)), __LINE__);
        }
        $this->process = $process;
        
        return $this;
    }
    /**
     * Get ipsource value
     * @return string|null
     */
    public function getIpsource(): ?string
    {
        return $this->ipsource;
    }
    /**
     * Set ipsource value
     * @param string $ipsource
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setIpsource(?string $ipsource = null): self
    {
        // validation for constraint: string
        if (!is_null($ipsource) && !is_string($ipsource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipsource, true), gettype($ipsource)), __LINE__);
        }
        $this->ipsource = $ipsource;
        
        return $this;
    }
    /**
     * Get latitude value
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param string $latitude
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setLatitude(?string $latitude = null): self
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        
        return $this;
    }
    /**
     * Get longitude value
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param string $longitude
     * @return \Conventus\Atoss\StructType\ClockNow
     */
    public function setLongitude(?string $longitude = null): self
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        
        return $this;
    }
}
