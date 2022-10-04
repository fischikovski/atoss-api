<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setVersioningDate StructType
 * Meta information extracted from the WSDL
 * - type: tns:setVersioningDate
 * @subpackage Structs
 */
class SetVersioningDate extends AbstractStructBase
{
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The timeframe
     * @var int|null
     */
    protected ?int $timeframe = null;
    /**
     * The listofchanges
     * @var int|null
     */
    protected ?int $listofchanges = null;
    /**
     * Constructor method for setVersioningDate
     * @uses SetVersioningDate::setDate()
     * @uses SetVersioningDate::setTimeframe()
     * @uses SetVersioningDate::setListofchanges()
     * @param string $date
     * @param int $timeframe
     * @param int $listofchanges
     */
    public function __construct(?string $date = null, ?int $timeframe = null, ?int $listofchanges = null)
    {
        $this
            ->setDate($date)
            ->setTimeframe($timeframe)
            ->setListofchanges($listofchanges);
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
     * @return \Conventus\Atoss\StructType\SetVersioningDate
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
     * Get timeframe value
     * @return int|null
     */
    public function getTimeframe(): ?int
    {
        return $this->timeframe;
    }
    /**
     * Set timeframe value
     * @param int $timeframe
     * @return \Conventus\Atoss\StructType\SetVersioningDate
     */
    public function setTimeframe(?int $timeframe = null): self
    {
        // validation for constraint: int
        if (!is_null($timeframe) && !(is_int($timeframe) || ctype_digit($timeframe))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeframe, true), gettype($timeframe)), __LINE__);
        }
        $this->timeframe = $timeframe;
        
        return $this;
    }
    /**
     * Get listofchanges value
     * @return int|null
     */
    public function getListofchanges(): ?int
    {
        return $this->listofchanges;
    }
    /**
     * Set listofchanges value
     * @param int $listofchanges
     * @return \Conventus\Atoss\StructType\SetVersioningDate
     */
    public function setListofchanges(?int $listofchanges = null): self
    {
        // validation for constraint: int
        if (!is_null($listofchanges) && !(is_int($listofchanges) || ctype_digit($listofchanges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listofchanges, true), gettype($listofchanges)), __LINE__);
        }
        $this->listofchanges = $listofchanges;
        
        return $this;
    }
}
