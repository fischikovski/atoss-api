<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPlanning StructType
 * Meta information extracted from the WSDL
 * - type: tns:createPlanning
 * @subpackage Structs
 */
class CreatePlanning extends AbstractStructBase
{
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The from
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The pause
     * Meta information extracted from the WSDL
     * - base: xs:double
     * - minOccurs: 0
     * - type: tns:duration
     * @var float|null
     */
    protected ?float $pause = null;
    /**
     * The pausestart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pausestart = null;
    /**
     * The shift
     * @var int|null
     */
    protected ?int $shift = null;
    /**
     * The qualification
     * @var int|null
     */
    protected ?int $qualification = null;
    /**
     * The efficiency
     * @var float|null
     */
    protected ?float $efficiency = null;
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * The rhythm
     * @var int|null
     */
    protected ?int $rhythm = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The mguid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mguid = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The shortcut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shortcut = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * Constructor method for createPlanning
     * @uses CreatePlanning::setDate()
     * @uses CreatePlanning::setFrom()
     * @uses CreatePlanning::setTo()
     * @uses CreatePlanning::setPause()
     * @uses CreatePlanning::setPausestart()
     * @uses CreatePlanning::setShift()
     * @uses CreatePlanning::setQualification()
     * @uses CreatePlanning::setEfficiency()
     * @uses CreatePlanning::setWorkplace()
     * @uses CreatePlanning::setProject()
     * @uses CreatePlanning::setRhythm()
     * @uses CreatePlanning::setEmployee()
     * @uses CreatePlanning::setAccount()
     * @uses CreatePlanning::setVersion()
     * @uses CreatePlanning::setMguid()
     * @uses CreatePlanning::setGuid()
     * @uses CreatePlanning::setRemark()
     * @uses CreatePlanning::setShortcut()
     * @uses CreatePlanning::setDescription()
     * @uses CreatePlanning::setOptions()
     * @param string $date
     * @param string $from
     * @param string $to
     * @param float $pause
     * @param string $pausestart
     * @param int $shift
     * @param int $qualification
     * @param float $efficiency
     * @param string $workplace
     * @param string $project
     * @param int $rhythm
     * @param string $employee
     * @param int $account
     * @param int $version
     * @param string $mguid
     * @param string $guid
     * @param string $remark
     * @param string $shortcut
     * @param string $description
     * @param int $options
     */
    public function __construct(?string $date = null, ?string $from = null, ?string $to = null, ?float $pause = null, ?string $pausestart = null, ?int $shift = null, ?int $qualification = null, ?float $efficiency = null, ?string $workplace = null, ?string $project = null, ?int $rhythm = null, ?string $employee = null, ?int $account = null, ?int $version = null, ?string $mguid = null, ?string $guid = null, ?string $remark = null, ?string $shortcut = null, ?string $description = null, ?int $options = null)
    {
        $this
            ->setDate($date)
            ->setFrom($from)
            ->setTo($to)
            ->setPause($pause)
            ->setPausestart($pausestart)
            ->setShift($shift)
            ->setQualification($qualification)
            ->setEfficiency($efficiency)
            ->setWorkplace($workplace)
            ->setProject($project)
            ->setRhythm($rhythm)
            ->setEmployee($employee)
            ->setAccount($account)
            ->setVersion($version)
            ->setMguid($mguid)
            ->setGuid($guid)
            ->setRemark($remark)
            ->setShortcut($shortcut)
            ->setDescription($description)
            ->setOptions($options);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
    /**
     * Get pause value
     * @return float|null
     */
    public function getPause(): ?float
    {
        return $this->pause;
    }
    /**
     * Set pause value
     * @param float $pause
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setPause(?float $pause = null): self
    {
        // validation for constraint: float
        if (!is_null($pause) && !(is_float($pause) || is_numeric($pause))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pause, true), gettype($pause)), __LINE__);
        }
        $this->pause = $pause;
        
        return $this;
    }
    /**
     * Get pausestart value
     * @return string|null
     */
    public function getPausestart(): ?string
    {
        return $this->pausestart;
    }
    /**
     * Set pausestart value
     * @param string $pausestart
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setPausestart(?string $pausestart = null): self
    {
        // validation for constraint: string
        if (!is_null($pausestart) && !is_string($pausestart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pausestart, true), gettype($pausestart)), __LINE__);
        }
        $this->pausestart = $pausestart;
        
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * Get qualification value
     * @return int|null
     */
    public function getQualification(): ?int
    {
        return $this->qualification;
    }
    /**
     * Set qualification value
     * @param int $qualification
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setQualification(?int $qualification = null): self
    {
        // validation for constraint: int
        if (!is_null($qualification) && !(is_int($qualification) || ctype_digit($qualification))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualification, true), gettype($qualification)), __LINE__);
        }
        $this->qualification = $qualification;
        
        return $this;
    }
    /**
     * Get efficiency value
     * @return float|null
     */
    public function getEfficiency(): ?float
    {
        return $this->efficiency;
    }
    /**
     * Set efficiency value
     * @param float $efficiency
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setEfficiency(?float $efficiency = null): self
    {
        // validation for constraint: float
        if (!is_null($efficiency) && !(is_float($efficiency) || is_numeric($efficiency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($efficiency, true), gettype($efficiency)), __LINE__);
        }
        $this->efficiency = $efficiency;
        
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * Get rhythm value
     * @return int|null
     */
    public function getRhythm(): ?int
    {
        return $this->rhythm;
    }
    /**
     * Set rhythm value
     * @param int $rhythm
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setRhythm(?int $rhythm = null): self
    {
        // validation for constraint: int
        if (!is_null($rhythm) && !(is_int($rhythm) || ctype_digit($rhythm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rhythm, true), gettype($rhythm)), __LINE__);
        }
        $this->rhythm = $rhythm;
        
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get mguid value
     * @return string|null
     */
    public function getMguid(): ?string
    {
        return $this->mguid;
    }
    /**
     * Set mguid value
     * @param string $mguid
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setMguid(?string $mguid = null): self
    {
        // validation for constraint: string
        if (!is_null($mguid) && !is_string($mguid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mguid, true), gettype($mguid)), __LINE__);
        }
        $this->mguid = $mguid;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * @return \Conventus\Atoss\StructType\CreatePlanning
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
     * Get shortcut value
     * @return string|null
     */
    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }
    /**
     * Set shortcut value
     * @param string $shortcut
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setShortcut(?string $shortcut = null): self
    {
        // validation for constraint: string
        if (!is_null($shortcut) && !is_string($shortcut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortcut, true), gettype($shortcut)), __LINE__);
        }
        $this->shortcut = $shortcut;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get options value
     * @return int|null
     */
    public function getOptions(): ?int
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param int $options
     * @return \Conventus\Atoss\StructType\CreatePlanning
     */
    public function setOptions(?int $options = null): self
    {
        // validation for constraint: int
        if (!is_null($options) && !(is_int($options) || ctype_digit($options))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($options, true), gettype($options)), __LINE__);
        }
        $this->options = $options;
        
        return $this;
    }
}
