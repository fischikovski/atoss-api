<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAbsenceChangeLogs StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAbsenceChangeLogs
 * @subpackage Structs
 */
class GetAbsenceChangeLogs extends AbstractStructBase
{
    /**
     * The sourceemployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sourceemployee = null;
    /**
     * The changinguser
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $changinguser = null;
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
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * The addlookupfields
     * @var bool|null
     */
    protected ?bool $addlookupfields = null;
    /**
     * Constructor method for getAbsenceChangeLogs
     * @uses GetAbsenceChangeLogs::setSourceemployee()
     * @uses GetAbsenceChangeLogs::setChanginguser()
     * @uses GetAbsenceChangeLogs::setFrom()
     * @uses GetAbsenceChangeLogs::setTo()
     * @uses GetAbsenceChangeLogs::setOptions()
     * @uses GetAbsenceChangeLogs::setAddlookupfields()
     * @param string $sourceemployee
     * @param string $changinguser
     * @param string $from
     * @param string $to
     * @param int $options
     * @param bool $addlookupfields
     */
    public function __construct(?string $sourceemployee = null, ?string $changinguser = null, ?string $from = null, ?string $to = null, ?int $options = null, ?bool $addlookupfields = null)
    {
        $this
            ->setSourceemployee($sourceemployee)
            ->setChanginguser($changinguser)
            ->setFrom($from)
            ->setTo($to)
            ->setOptions($options)
            ->setAddlookupfields($addlookupfields);
    }
    /**
     * Get sourceemployee value
     * @return string|null
     */
    public function getSourceemployee(): ?string
    {
        return $this->sourceemployee;
    }
    /**
     * Set sourceemployee value
     * @param string $sourceemployee
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogs
     */
    public function setSourceemployee(?string $sourceemployee = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceemployee) && !is_string($sourceemployee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceemployee, true), gettype($sourceemployee)), __LINE__);
        }
        $this->sourceemployee = $sourceemployee;
        
        return $this;
    }
    /**
     * Get changinguser value
     * @return string|null
     */
    public function getChanginguser(): ?string
    {
        return $this->changinguser;
    }
    /**
     * Set changinguser value
     * @param string $changinguser
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogs
     */
    public function setChanginguser(?string $changinguser = null): self
    {
        // validation for constraint: string
        if (!is_null($changinguser) && !is_string($changinguser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changinguser, true), gettype($changinguser)), __LINE__);
        }
        $this->changinguser = $changinguser;
        
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
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogs
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
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogs
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
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogs
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
     * Get addlookupfields value
     * @return bool|null
     */
    public function getAddlookupfields(): ?bool
    {
        return $this->addlookupfields;
    }
    /**
     * Set addlookupfields value
     * @param bool $addlookupfields
     * @return \Conventus\Atoss\StructType\GetAbsenceChangeLogs
     */
    public function setAddlookupfields(?bool $addlookupfields = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addlookupfields) && !is_bool($addlookupfields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addlookupfields, true), gettype($addlookupfields)), __LINE__);
        }
        $this->addlookupfields = $addlookupfields;
        
        return $this;
    }
}
