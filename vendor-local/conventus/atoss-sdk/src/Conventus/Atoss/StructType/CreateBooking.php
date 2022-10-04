<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createBooking StructType
 * Meta information extracted from the WSDL
 * - type: tns:createBooking
 * @subpackage Structs
 */
class CreateBooking extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The time
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $time = null;
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The duration
     * Meta information extracted from the WSDL
     * - base: xs:double
     * - minOccurs: 0
     * - type: tns:duration
     * @var float|null
     */
    protected ?float $duration = null;
    /**
     * The bookingtype
     * @var int|null
     */
    protected ?int $bookingtype = null;
    /**
     * The offset
     * @var int|null
     */
    protected ?int $offset = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * The mandatorybreak
     * @var int|null
     */
    protected ?int $mandatorybreak = null;
    /**
     * The process
     * @var int|null
     */
    protected ?int $process = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The freeindex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $freeindex = null;
    /**
     * The userremark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $userremark = null;
    /**
     * The negativebooking
     * @var int|null
     */
    protected ?int $negativebooking = null;
    /**
     * The daypart
     * @var int|null
     */
    protected ?int $daypart = null;
    /**
     * The hourlywagerate
     * @var float|null
     */
    protected ?float $hourlywagerate = null;
    /**
     * The usehourlywage
     * @var int|null
     */
    protected ?int $usehourlywage = null;
    /**
     * The place
     * @var int|null
     */
    protected ?int $place = null;
    /**
     * The vatrate
     * @var float|null
     */
    protected ?float $vatrate = null;
    /**
     * The cost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cost = null;
    /**
     * The realin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $realin = null;
    /**
     * The maincost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maincost = null;
    /**
     * The yield
     * @var float|null
     */
    protected ?float $yield = null;
    /**
     * The wasteamount
     * @var float|null
     */
    protected ?float $wasteamount = null;
    /**
     * The completedmessage
     * @var int|null
     */
    protected ?int $completedmessage = null;
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The externhourlywagerate
     * @var float|null
     */
    protected ?float $externhourlywagerate = null;
    /**
     * The costtype
     * @var int|null
     */
    protected ?int $costtype = null;
    /**
     * Constructor method for createBooking
     * @uses CreateBooking::setEmployee()
     * @uses CreateBooking::setDate()
     * @uses CreateBooking::setTime()
     * @uses CreateBooking::setAccount()
     * @uses CreateBooking::setDuration()
     * @uses CreateBooking::setBookingtype()
     * @uses CreateBooking::setOffset()
     * @uses CreateBooking::setRemark()
     * @uses CreateBooking::setProject()
     * @uses CreateBooking::setMandatorybreak()
     * @uses CreateBooking::setProcess()
     * @uses CreateBooking::setStatus()
     * @uses CreateBooking::setFreeindex()
     * @uses CreateBooking::setUserremark()
     * @uses CreateBooking::setNegativebooking()
     * @uses CreateBooking::setDaypart()
     * @uses CreateBooking::setHourlywagerate()
     * @uses CreateBooking::setUsehourlywage()
     * @uses CreateBooking::setPlace()
     * @uses CreateBooking::setVatrate()
     * @uses CreateBooking::setCost()
     * @uses CreateBooking::setRealin()
     * @uses CreateBooking::setMaincost()
     * @uses CreateBooking::setYield()
     * @uses CreateBooking::setWasteamount()
     * @uses CreateBooking::setCompletedmessage()
     * @uses CreateBooking::setWorkplace()
     * @uses CreateBooking::setExternhourlywagerate()
     * @uses CreateBooking::setCosttype()
     * @param string $employee
     * @param string $date
     * @param string $time
     * @param int $account
     * @param float $duration
     * @param int $bookingtype
     * @param int $offset
     * @param string $remark
     * @param string $project
     * @param int $mandatorybreak
     * @param int $process
     * @param int $status
     * @param string $freeindex
     * @param string $userremark
     * @param int $negativebooking
     * @param int $daypart
     * @param float $hourlywagerate
     * @param int $usehourlywage
     * @param int $place
     * @param float $vatrate
     * @param string $cost
     * @param string $realin
     * @param string $maincost
     * @param float $yield
     * @param float $wasteamount
     * @param int $completedmessage
     * @param string $workplace
     * @param float $externhourlywagerate
     * @param int $costtype
     */
    public function __construct(?string $employee = null, ?string $date = null, ?string $time = null, ?int $account = null, ?float $duration = null, ?int $bookingtype = null, ?int $offset = null, ?string $remark = null, ?string $project = null, ?int $mandatorybreak = null, ?int $process = null, ?int $status = null, ?string $freeindex = null, ?string $userremark = null, ?int $negativebooking = null, ?int $daypart = null, ?float $hourlywagerate = null, ?int $usehourlywage = null, ?int $place = null, ?float $vatrate = null, ?string $cost = null, ?string $realin = null, ?string $maincost = null, ?float $yield = null, ?float $wasteamount = null, ?int $completedmessage = null, ?string $workplace = null, ?float $externhourlywagerate = null, ?int $costtype = null)
    {
        $this
            ->setEmployee($employee)
            ->setDate($date)
            ->setTime($time)
            ->setAccount($account)
            ->setDuration($duration)
            ->setBookingtype($bookingtype)
            ->setOffset($offset)
            ->setRemark($remark)
            ->setProject($project)
            ->setMandatorybreak($mandatorybreak)
            ->setProcess($process)
            ->setStatus($status)
            ->setFreeindex($freeindex)
            ->setUserremark($userremark)
            ->setNegativebooking($negativebooking)
            ->setDaypart($daypart)
            ->setHourlywagerate($hourlywagerate)
            ->setUsehourlywage($usehourlywage)
            ->setPlace($place)
            ->setVatrate($vatrate)
            ->setCost($cost)
            ->setRealin($realin)
            ->setMaincost($maincost)
            ->setYield($yield)
            ->setWasteamount($wasteamount)
            ->setCompletedmessage($completedmessage)
            ->setWorkplace($workplace)
            ->setExternhourlywagerate($externhourlywagerate)
            ->setCosttype($costtype);
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get duration value
     * @return float|null
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param float $duration
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setDuration(?float $duration = null): self
    {
        // validation for constraint: float
        if (!is_null($duration) && !(is_float($duration) || is_numeric($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get bookingtype value
     * @return int|null
     */
    public function getBookingtype(): ?int
    {
        return $this->bookingtype;
    }
    /**
     * Set bookingtype value
     * @param int $bookingtype
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setBookingtype(?int $bookingtype = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingtype) && !(is_int($bookingtype) || ctype_digit($bookingtype))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingtype, true), gettype($bookingtype)), __LINE__);
        }
        $this->bookingtype = $bookingtype;
        
        return $this;
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setOffset(?int $offset = null): self
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->offset = $offset;
        
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get mandatorybreak value
     * @return int|null
     */
    public function getMandatorybreak(): ?int
    {
        return $this->mandatorybreak;
    }
    /**
     * Set mandatorybreak value
     * @param int $mandatorybreak
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setMandatorybreak(?int $mandatorybreak = null): self
    {
        // validation for constraint: int
        if (!is_null($mandatorybreak) && !(is_int($mandatorybreak) || ctype_digit($mandatorybreak))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandatorybreak, true), gettype($mandatorybreak)), __LINE__);
        }
        $this->mandatorybreak = $mandatorybreak;
        
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get userremark value
     * @return string|null
     */
    public function getUserremark(): ?string
    {
        return $this->userremark;
    }
    /**
     * Set userremark value
     * @param string $userremark
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setUserremark(?string $userremark = null): self
    {
        // validation for constraint: string
        if (!is_null($userremark) && !is_string($userremark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userremark, true), gettype($userremark)), __LINE__);
        }
        $this->userremark = $userremark;
        
        return $this;
    }
    /**
     * Get negativebooking value
     * @return int|null
     */
    public function getNegativebooking(): ?int
    {
        return $this->negativebooking;
    }
    /**
     * Set negativebooking value
     * @param int $negativebooking
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setNegativebooking(?int $negativebooking = null): self
    {
        // validation for constraint: int
        if (!is_null($negativebooking) && !(is_int($negativebooking) || ctype_digit($negativebooking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($negativebooking, true), gettype($negativebooking)), __LINE__);
        }
        $this->negativebooking = $negativebooking;
        
        return $this;
    }
    /**
     * Get daypart value
     * @return int|null
     */
    public function getDaypart(): ?int
    {
        return $this->daypart;
    }
    /**
     * Set daypart value
     * @param int $daypart
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setDaypart(?int $daypart = null): self
    {
        // validation for constraint: int
        if (!is_null($daypart) && !(is_int($daypart) || ctype_digit($daypart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daypart, true), gettype($daypart)), __LINE__);
        }
        $this->daypart = $daypart;
        
        return $this;
    }
    /**
     * Get hourlywagerate value
     * @return float|null
     */
    public function getHourlywagerate(): ?float
    {
        return $this->hourlywagerate;
    }
    /**
     * Set hourlywagerate value
     * @param float $hourlywagerate
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setHourlywagerate(?float $hourlywagerate = null): self
    {
        // validation for constraint: float
        if (!is_null($hourlywagerate) && !(is_float($hourlywagerate) || is_numeric($hourlywagerate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hourlywagerate, true), gettype($hourlywagerate)), __LINE__);
        }
        $this->hourlywagerate = $hourlywagerate;
        
        return $this;
    }
    /**
     * Get usehourlywage value
     * @return int|null
     */
    public function getUsehourlywage(): ?int
    {
        return $this->usehourlywage;
    }
    /**
     * Set usehourlywage value
     * @param int $usehourlywage
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setUsehourlywage(?int $usehourlywage = null): self
    {
        // validation for constraint: int
        if (!is_null($usehourlywage) && !(is_int($usehourlywage) || ctype_digit($usehourlywage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($usehourlywage, true), gettype($usehourlywage)), __LINE__);
        }
        $this->usehourlywage = $usehourlywage;
        
        return $this;
    }
    /**
     * Get place value
     * @return int|null
     */
    public function getPlace(): ?int
    {
        return $this->place;
    }
    /**
     * Set place value
     * @param int $place
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setPlace(?int $place = null): self
    {
        // validation for constraint: int
        if (!is_null($place) && !(is_int($place) || ctype_digit($place))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($place, true), gettype($place)), __LINE__);
        }
        $this->place = $place;
        
        return $this;
    }
    /**
     * Get vatrate value
     * @return float|null
     */
    public function getVatrate(): ?float
    {
        return $this->vatrate;
    }
    /**
     * Set vatrate value
     * @param float $vatrate
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setVatrate(?float $vatrate = null): self
    {
        // validation for constraint: float
        if (!is_null($vatrate) && !(is_float($vatrate) || is_numeric($vatrate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatrate, true), gettype($vatrate)), __LINE__);
        }
        $this->vatrate = $vatrate;
        
        return $this;
    }
    /**
     * Get cost value
     * @return string|null
     */
    public function getCost(): ?string
    {
        return $this->cost;
    }
    /**
     * Set cost value
     * @param string $cost
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setCost(?string $cost = null): self
    {
        // validation for constraint: string
        if (!is_null($cost) && !is_string($cost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cost, true), gettype($cost)), __LINE__);
        }
        $this->cost = $cost;
        
        return $this;
    }
    /**
     * Get realin value
     * @return string|null
     */
    public function getRealin(): ?string
    {
        return $this->realin;
    }
    /**
     * Set realin value
     * @param string $realin
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setRealin(?string $realin = null): self
    {
        // validation for constraint: string
        if (!is_null($realin) && !is_string($realin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($realin, true), gettype($realin)), __LINE__);
        }
        $this->realin = $realin;
        
        return $this;
    }
    /**
     * Get maincost value
     * @return string|null
     */
    public function getMaincost(): ?string
    {
        return $this->maincost;
    }
    /**
     * Set maincost value
     * @param string $maincost
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setMaincost(?string $maincost = null): self
    {
        // validation for constraint: string
        if (!is_null($maincost) && !is_string($maincost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maincost, true), gettype($maincost)), __LINE__);
        }
        $this->maincost = $maincost;
        
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get wasteamount value
     * @return float|null
     */
    public function getWasteamount(): ?float
    {
        return $this->wasteamount;
    }
    /**
     * Set wasteamount value
     * @param float $wasteamount
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setWasteamount(?float $wasteamount = null): self
    {
        // validation for constraint: float
        if (!is_null($wasteamount) && !(is_float($wasteamount) || is_numeric($wasteamount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wasteamount, true), gettype($wasteamount)), __LINE__);
        }
        $this->wasteamount = $wasteamount;
        
        return $this;
    }
    /**
     * Get completedmessage value
     * @return int|null
     */
    public function getCompletedmessage(): ?int
    {
        return $this->completedmessage;
    }
    /**
     * Set completedmessage value
     * @param int $completedmessage
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setCompletedmessage(?int $completedmessage = null): self
    {
        // validation for constraint: int
        if (!is_null($completedmessage) && !(is_int($completedmessage) || ctype_digit($completedmessage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($completedmessage, true), gettype($completedmessage)), __LINE__);
        }
        $this->completedmessage = $completedmessage;
        
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
     * @return \Conventus\Atoss\StructType\CreateBooking
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
     * Get externhourlywagerate value
     * @return float|null
     */
    public function getExternhourlywagerate(): ?float
    {
        return $this->externhourlywagerate;
    }
    /**
     * Set externhourlywagerate value
     * @param float $externhourlywagerate
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setExternhourlywagerate(?float $externhourlywagerate = null): self
    {
        // validation for constraint: float
        if (!is_null($externhourlywagerate) && !(is_float($externhourlywagerate) || is_numeric($externhourlywagerate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($externhourlywagerate, true), gettype($externhourlywagerate)), __LINE__);
        }
        $this->externhourlywagerate = $externhourlywagerate;
        
        return $this;
    }
    /**
     * Get costtype value
     * @return int|null
     */
    public function getCosttype(): ?int
    {
        return $this->costtype;
    }
    /**
     * Set costtype value
     * @param int $costtype
     * @return \Conventus\Atoss\StructType\CreateBooking
     */
    public function setCosttype(?int $costtype = null): self
    {
        // validation for constraint: int
        if (!is_null($costtype) && !(is_int($costtype) || ctype_digit($costtype))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($costtype, true), gettype($costtype)), __LINE__);
        }
        $this->costtype = $costtype;
        
        return $this;
    }
}
