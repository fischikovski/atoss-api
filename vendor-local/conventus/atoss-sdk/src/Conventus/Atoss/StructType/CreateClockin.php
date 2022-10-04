<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createClockin StructType
 * Meta information extracted from the WSDL
 * - type: tns:createClockin
 * @subpackage Structs
 */
class CreateClockin extends AbstractStructBase
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
     * The shift
     * @var int|null
     */
    protected ?int $shift = null;
    /**
     * The creationtype
     * @var int|null
     */
    protected ?int $creationtype = null;
    /**
     * The costcenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $costcenter = null;
    /**
     * The freeindex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $freeindex = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The timeoffset
     * @var float|null
     */
    protected ?float $timeoffset = null;
    /**
     * Constructor method for createClockin
     * @uses CreateClockin::setEmployee()
     * @uses CreateClockin::setBadge()
     * @uses CreateClockin::setTimestamp()
     * @uses CreateClockin::setAccount()
     * @uses CreateClockin::setDevice()
     * @uses CreateClockin::setProject()
     * @uses CreateClockin::setProjectstatus()
     * @uses CreateClockin::setShift()
     * @uses CreateClockin::setCreationtype()
     * @uses CreateClockin::setCostcenter()
     * @uses CreateClockin::setFreeindex()
     * @uses CreateClockin::setRemark()
     * @uses CreateClockin::setWorkplace()
     * @uses CreateClockin::setTimeoffset()
     * @param string $employee
     * @param string $badge
     * @param string $timestamp
     * @param int $account
     * @param int $device
     * @param string $project
     * @param int $projectstatus
     * @param int $shift
     * @param int $creationtype
     * @param string $costcenter
     * @param string $freeindex
     * @param string $remark
     * @param string $workplace
     * @param float $timeoffset
     */
    public function __construct(?string $employee = null, ?string $badge = null, ?string $timestamp = null, ?int $account = null, ?int $device = null, ?string $project = null, ?int $projectstatus = null, ?int $shift = null, ?int $creationtype = null, ?string $costcenter = null, ?string $freeindex = null, ?string $remark = null, ?string $workplace = null, ?float $timeoffset = null)
    {
        $this
            ->setEmployee($employee)
            ->setBadge($badge)
            ->setTimestamp($timestamp)
            ->setAccount($account)
            ->setDevice($device)
            ->setProject($project)
            ->setProjectstatus($projectstatus)
            ->setShift($shift)
            ->setCreationtype($creationtype)
            ->setCostcenter($costcenter)
            ->setFreeindex($freeindex)
            ->setRemark($remark)
            ->setWorkplace($workplace)
            ->setTimeoffset($timeoffset);
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * Get shift value
     * @return int|null
     */
    public function getShift(): ?int
    {
        return $this->shift;
    }
    /**
     * Set shift value
     * @param int $shift
     * @return \Conventus\Atoss\StructType\CreateClockin
     */
    public function setShift(?int $shift = null): self
    {
        // validation for constraint: int
        if (!is_null($shift) && !(is_int($shift) || ctype_digit($shift))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shift, true), gettype($shift)), __LINE__);
        }
        $this->shift = $shift;
        
        return $this;
    }
    /**
     * Get creationtype value
     * @return int|null
     */
    public function getCreationtype(): ?int
    {
        return $this->creationtype;
    }
    /**
     * Set creationtype value
     * @param int $creationtype
     * @return \Conventus\Atoss\StructType\CreateClockin
     */
    public function setCreationtype(?int $creationtype = null): self
    {
        // validation for constraint: int
        if (!is_null($creationtype) && !(is_int($creationtype) || ctype_digit($creationtype))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationtype, true), gettype($creationtype)), __LINE__);
        }
        $this->creationtype = $creationtype;
        
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * Get freeindex value
     * @return string|null
     */
    public function getFreeindex(): ?string
    {
        return $this->freeindex;
    }
    /**
     * Set freeindex value
     * @param string $freeindex
     * @return \Conventus\Atoss\StructType\CreateClockin
     */
    public function setFreeindex(?string $freeindex = null): self
    {
        // validation for constraint: string
        if (!is_null($freeindex) && !is_string($freeindex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeindex, true), gettype($freeindex)), __LINE__);
        }
        $this->freeindex = $freeindex;
        
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
     * @return \Conventus\Atoss\StructType\CreateClockin
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
     * Get workplace value
     * @return string|null
     */
    public function getWorkplace(): ?string
    {
        return $this->workplace;
    }
    /**
     * Set workplace value
     * @param string $workplace
     * @return \Conventus\Atoss\StructType\CreateClockin
     */
    public function setWorkplace(?string $workplace = null): self
    {
        // validation for constraint: string
        if (!is_null($workplace) && !is_string($workplace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplace, true), gettype($workplace)), __LINE__);
        }
        $this->workplace = $workplace;
        
        return $this;
    }
    /**
     * Get timeoffset value
     * @return float|null
     */
    public function getTimeoffset(): ?float
    {
        return $this->timeoffset;
    }
    /**
     * Set timeoffset value
     * @param float $timeoffset
     * @return \Conventus\Atoss\StructType\CreateClockin
     */
    public function setTimeoffset(?float $timeoffset = null): self
    {
        // validation for constraint: float
        if (!is_null($timeoffset) && !(is_float($timeoffset) || is_numeric($timeoffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($timeoffset, true), gettype($timeoffset)), __LINE__);
        }
        $this->timeoffset = $timeoffset;
        
        return $this;
    }
}
