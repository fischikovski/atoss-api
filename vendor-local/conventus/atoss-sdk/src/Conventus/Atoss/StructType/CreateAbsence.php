<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createAbsence StructType
 * Meta information extracted from the WSDL
 * - type: tns:createAbsence
 * @subpackage Structs
 */
class CreateAbsence extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The reserved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reserved = null;
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
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The daypartfrom
     * @var int|null
     */
    protected ?int $daypartfrom = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The daypartto
     * @var int|null
     */
    protected ?int $daypartto = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * The adjacencehandling
     * @var int|null
     */
    protected ?int $adjacencehandling = null;
    /**
     * The overlappinghandling
     * @var int|null
     */
    protected ?int $overlappinghandling = null;
    /**
     * The application
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The substitute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $substitute = null;
    /**
     * Constructor method for createAbsence
     * @uses CreateAbsence::setEmployee()
     * @uses CreateAbsence::setReserved()
     * @uses CreateAbsence::setFrom()
     * @uses CreateAbsence::setTo()
     * @uses CreateAbsence::setAccount()
     * @uses CreateAbsence::setDaypartfrom()
     * @uses CreateAbsence::setRemark()
     * @uses CreateAbsence::setDaypartto()
     * @uses CreateAbsence::setVersion()
     * @uses CreateAbsence::setOptions()
     * @uses CreateAbsence::setAdjacencehandling()
     * @uses CreateAbsence::setOverlappinghandling()
     * @uses CreateAbsence::setApplication()
     * @uses CreateAbsence::setSubstitute()
     * @param string $employee
     * @param string $reserved
     * @param string $from
     * @param string $to
     * @param int $account
     * @param int $daypartfrom
     * @param string $remark
     * @param int $daypartto
     * @param int $version
     * @param int $options
     * @param int $adjacencehandling
     * @param int $overlappinghandling
     * @param string $application
     * @param string $substitute
     */
    public function __construct(?string $employee = null, ?string $reserved = null, ?string $from = null, ?string $to = null, ?int $account = null, ?int $daypartfrom = null, ?string $remark = null, ?int $daypartto = null, ?int $version = null, ?int $options = null, ?int $adjacencehandling = null, ?int $overlappinghandling = null, ?string $application = null, ?string $substitute = null)
    {
        $this
            ->setEmployee($employee)
            ->setReserved($reserved)
            ->setFrom($from)
            ->setTo($to)
            ->setAccount($account)
            ->setDaypartfrom($daypartfrom)
            ->setRemark($remark)
            ->setDaypartto($daypartto)
            ->setVersion($version)
            ->setOptions($options)
            ->setAdjacencehandling($adjacencehandling)
            ->setOverlappinghandling($overlappinghandling)
            ->setApplication($application)
            ->setSubstitute($substitute);
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
     * Get reserved value
     * @return string|null
     */
    public function getReserved(): ?string
    {
        return $this->reserved;
    }
    /**
     * Set reserved value
     * @param string $reserved
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setReserved(?string $reserved = null): self
    {
        // validation for constraint: string
        if (!is_null($reserved) && !is_string($reserved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reserved, true), gettype($reserved)), __LINE__);
        }
        $this->reserved = $reserved;
        
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
     * Get daypartfrom value
     * @return int|null
     */
    public function getDaypartfrom(): ?int
    {
        return $this->daypartfrom;
    }
    /**
     * Set daypartfrom value
     * @param int $daypartfrom
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setDaypartfrom(?int $daypartfrom = null): self
    {
        // validation for constraint: int
        if (!is_null($daypartfrom) && !(is_int($daypartfrom) || ctype_digit($daypartfrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daypartfrom, true), gettype($daypartfrom)), __LINE__);
        }
        $this->daypartfrom = $daypartfrom;
        
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
     * Get daypartto value
     * @return int|null
     */
    public function getDaypartto(): ?int
    {
        return $this->daypartto;
    }
    /**
     * Set daypartto value
     * @param int $daypartto
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setDaypartto(?int $daypartto = null): self
    {
        // validation for constraint: int
        if (!is_null($daypartto) && !(is_int($daypartto) || ctype_digit($daypartto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daypartto, true), gettype($daypartto)), __LINE__);
        }
        $this->daypartto = $daypartto;
        
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
     * @return \Conventus\Atoss\StructType\CreateAbsence
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
    /**
     * Get adjacencehandling value
     * @return int|null
     */
    public function getAdjacencehandling(): ?int
    {
        return $this->adjacencehandling;
    }
    /**
     * Set adjacencehandling value
     * @param int $adjacencehandling
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setAdjacencehandling(?int $adjacencehandling = null): self
    {
        // validation for constraint: int
        if (!is_null($adjacencehandling) && !(is_int($adjacencehandling) || ctype_digit($adjacencehandling))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adjacencehandling, true), gettype($adjacencehandling)), __LINE__);
        }
        $this->adjacencehandling = $adjacencehandling;
        
        return $this;
    }
    /**
     * Get overlappinghandling value
     * @return int|null
     */
    public function getOverlappinghandling(): ?int
    {
        return $this->overlappinghandling;
    }
    /**
     * Set overlappinghandling value
     * @param int $overlappinghandling
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setOverlappinghandling(?int $overlappinghandling = null): self
    {
        // validation for constraint: int
        if (!is_null($overlappinghandling) && !(is_int($overlappinghandling) || ctype_digit($overlappinghandling))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($overlappinghandling, true), gettype($overlappinghandling)), __LINE__);
        }
        $this->overlappinghandling = $overlappinghandling;
        
        return $this;
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setApplication(?string $application = null): self
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($application, true), gettype($application)), __LINE__);
        }
        $this->application = $application;
        
        return $this;
    }
    /**
     * Get substitute value
     * @return string|null
     */
    public function getSubstitute(): ?string
    {
        return $this->substitute;
    }
    /**
     * Set substitute value
     * @param string $substitute
     * @return \Conventus\Atoss\StructType\CreateAbsence
     */
    public function setSubstitute(?string $substitute = null): self
    {
        // validation for constraint: string
        if (!is_null($substitute) && !is_string($substitute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($substitute, true), gettype($substitute)), __LINE__);
        }
        $this->substitute = $substitute;
        
        return $this;
    }
}
