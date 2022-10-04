<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clock StructType
 * Meta information extracted from the WSDL
 * - type: tns:clock
 * @subpackage Structs
 */
class Clock extends AbstractStructBase
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
     * The costcenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $costcenter = null;
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
     * The freeindex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $freeindex = null;
    /**
     * The timeaccountbalancetype
     * @var int|null
     */
    protected ?int $timeaccountbalancetype = null;
    /**
     * The ipsource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ipsource = null;
    /**
     * The displayoptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $displayoptions = null;
    /**
     * The waste
     * @var float|null
     */
    protected ?float $waste = null;
    /**
     * The yield
     * @var float|null
     */
    protected ?float $yield = null;
    /**
     * The process
     * @var int|null
     */
    protected ?int $process = null;
    /**
     * The noresult
     * @var int|null
     */
    protected ?int $noresult = null;
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
     * The offline
     * @var bool|null
     */
    protected ?bool $offline = null;
    /**
     * Constructor method for clock
     * @uses Clock::setEmployee()
     * @uses Clock::setBadge()
     * @uses Clock::setTimestamp()
     * @uses Clock::setAccount()
     * @uses Clock::setDevice()
     * @uses Clock::setAssignment()
     * @uses Clock::setAccess()
     * @uses Clock::setProject()
     * @uses Clock::setProjectstatus()
     * @uses Clock::setShift()
     * @uses Clock::setCostcenter()
     * @uses Clock::setRemark()
     * @uses Clock::setWorkplace()
     * @uses Clock::setFreeindex()
     * @uses Clock::setTimeaccountbalancetype()
     * @uses Clock::setIpsource()
     * @uses Clock::setDisplayoptions()
     * @uses Clock::setWaste()
     * @uses Clock::setYield()
     * @uses Clock::setProcess()
     * @uses Clock::setNoresult()
     * @uses Clock::setLatitude()
     * @uses Clock::setLongitude()
     * @uses Clock::setOffline()
     * @param string $employee
     * @param string $badge
     * @param string $timestamp
     * @param int $account
     * @param int $device
     * @param int $assignment
     * @param int $access
     * @param string $project
     * @param int $projectstatus
     * @param int $shift
     * @param string $costcenter
     * @param string $remark
     * @param string $workplace
     * @param string $freeindex
     * @param int $timeaccountbalancetype
     * @param string $ipsource
     * @param string $displayoptions
     * @param float $waste
     * @param float $yield
     * @param int $process
     * @param int $noresult
     * @param string $latitude
     * @param string $longitude
     * @param bool $offline
     */
    public function __construct(?string $employee = null, ?string $badge = null, ?string $timestamp = null, ?int $account = null, ?int $device = null, ?int $assignment = null, ?int $access = null, ?string $project = null, ?int $projectstatus = null, ?int $shift = null, ?string $costcenter = null, ?string $remark = null, ?string $workplace = null, ?string $freeindex = null, ?int $timeaccountbalancetype = null, ?string $ipsource = null, ?string $displayoptions = null, ?float $waste = null, ?float $yield = null, ?int $process = null, ?int $noresult = null, ?string $latitude = null, ?string $longitude = null, ?bool $offline = null)
    {
        $this
            ->setEmployee($employee)
            ->setBadge($badge)
            ->setTimestamp($timestamp)
            ->setAccount($account)
            ->setDevice($device)
            ->setAssignment($assignment)
            ->setAccess($access)
            ->setProject($project)
            ->setProjectstatus($projectstatus)
            ->setShift($shift)
            ->setCostcenter($costcenter)
            ->setRemark($remark)
            ->setWorkplace($workplace)
            ->setFreeindex($freeindex)
            ->setTimeaccountbalancetype($timeaccountbalancetype)
            ->setIpsource($ipsource)
            ->setDisplayoptions($displayoptions)
            ->setWaste($waste)
            ->setYield($yield)
            ->setProcess($process)
            ->setNoresult($noresult)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * Get timeaccountbalancetype value
     * @return int|null
     */
    public function getTimeaccountbalancetype(): ?int
    {
        return $this->timeaccountbalancetype;
    }
    /**
     * Set timeaccountbalancetype value
     * @param int $timeaccountbalancetype
     * @return \Conventus\Atoss\StructType\Clock
     */
    public function setTimeaccountbalancetype(?int $timeaccountbalancetype = null): self
    {
        // validation for constraint: int
        if (!is_null($timeaccountbalancetype) && !(is_int($timeaccountbalancetype) || ctype_digit($timeaccountbalancetype))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeaccountbalancetype, true), gettype($timeaccountbalancetype)), __LINE__);
        }
        $this->timeaccountbalancetype = $timeaccountbalancetype;
        
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * Get displayoptions value
     * @return string|null
     */
    public function getDisplayoptions(): ?string
    {
        return $this->displayoptions;
    }
    /**
     * Set displayoptions value
     * @param string $displayoptions
     * @return \Conventus\Atoss\StructType\Clock
     */
    public function setDisplayoptions(?string $displayoptions = null): self
    {
        // validation for constraint: string
        if (!is_null($displayoptions) && !is_string($displayoptions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayoptions, true), gettype($displayoptions)), __LINE__);
        }
        $this->displayoptions = $displayoptions;
        
        return $this;
    }
    /**
     * Get waste value
     * @return float|null
     */
    public function getWaste(): ?float
    {
        return $this->waste;
    }
    /**
     * Set waste value
     * @param float $waste
     * @return \Conventus\Atoss\StructType\Clock
     */
    public function setWaste(?float $waste = null): self
    {
        // validation for constraint: float
        if (!is_null($waste) && !(is_float($waste) || is_numeric($waste))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($waste, true), gettype($waste)), __LINE__);
        }
        $this->waste = $waste;
        
        return $this;
    }
    /**
     * Get yield value
     * @return float|null
     */
    public function getYield(): ?float
    {
        return $this->yield;
    }
    /**
     * Set yield value
     * @param float $yield
     * @return \Conventus\Atoss\StructType\Clock
     */
    public function setYield(?float $yield = null): self
    {
        // validation for constraint: float
        if (!is_null($yield) && !(is_float($yield) || is_numeric($yield))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($yield, true), gettype($yield)), __LINE__);
        }
        $this->yield = $yield;
        
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * Get noresult value
     * @return int|null
     */
    public function getNoresult(): ?int
    {
        return $this->noresult;
    }
    /**
     * Set noresult value
     * @param int $noresult
     * @return \Conventus\Atoss\StructType\Clock
     */
    public function setNoresult(?int $noresult = null): self
    {
        // validation for constraint: int
        if (!is_null($noresult) && !(is_int($noresult) || ctype_digit($noresult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noresult, true), gettype($noresult)), __LINE__);
        }
        $this->noresult = $noresult;
        
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
     * @return \Conventus\Atoss\StructType\Clock
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
