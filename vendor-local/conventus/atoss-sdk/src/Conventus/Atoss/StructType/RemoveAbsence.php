<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for removeAbsence StructType
 * Meta information extracted from the WSDL
 * - type: tns:removeAbsence
 * @subpackage Structs
 */
class RemoveAbsence extends AbstractStructBase
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
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The daypart
     * @var int|null
     */
    protected ?int $daypart = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The daypartto
     * @var int|null
     */
    protected ?int $daypartto = null;
    /**
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * Constructor method for removeAbsence
     * @uses RemoveAbsence::setEmployee()
     * @uses RemoveAbsence::setReserved()
     * @uses RemoveAbsence::setFrom()
     * @uses RemoveAbsence::setAccount()
     * @uses RemoveAbsence::setTo()
     * @uses RemoveAbsence::setDaypart()
     * @uses RemoveAbsence::setVersion()
     * @uses RemoveAbsence::setDaypartto()
     * @uses RemoveAbsence::setOptions()
     * @param string $employee
     * @param string $reserved
     * @param string $from
     * @param int $account
     * @param string $to
     * @param int $daypart
     * @param int $version
     * @param int $daypartto
     * @param int $options
     */
    public function __construct(?string $employee = null, ?string $reserved = null, ?string $from = null, ?int $account = null, ?string $to = null, ?int $daypart = null, ?int $version = null, ?int $daypartto = null, ?int $options = null)
    {
        $this
            ->setEmployee($employee)
            ->setReserved($reserved)
            ->setFrom($from)
            ->setAccount($account)
            ->setTo($to)
            ->setDaypart($daypart)
            ->setVersion($version)
            ->setDaypartto($daypartto)
            ->setOptions($options);
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
     * @return \Conventus\Atoss\StructType\RemoveAbsence
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
