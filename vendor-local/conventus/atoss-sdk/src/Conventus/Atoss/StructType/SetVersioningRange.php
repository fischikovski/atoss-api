<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setVersioningRange StructType
 * Meta information extracted from the WSDL
 * - type: tns:setVersioningRange
 * @subpackage Structs
 */
class SetVersioningRange extends AbstractStructBase
{
    /**
     * The start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $start = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The listofchanges
     * @var int|null
     */
    protected ?int $listofchanges = null;
    /**
     * The effectiveday
     * @var int|null
     */
    protected ?int $effectiveday = null;
    /**
     * Constructor method for setVersioningRange
     * @uses SetVersioningRange::setStart()
     * @uses SetVersioningRange::setEnd()
     * @uses SetVersioningRange::setListofchanges()
     * @uses SetVersioningRange::setEffectiveday()
     * @param string $start
     * @param string $end
     * @param int $listofchanges
     * @param int $effectiveday
     */
    public function __construct(?string $start = null, ?string $end = null, ?int $listofchanges = null, ?int $effectiveday = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setListofchanges($listofchanges)
            ->setEffectiveday($effectiveday);
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Conventus\Atoss\StructType\SetVersioningRange
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Conventus\Atoss\StructType\SetVersioningRange
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
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
     * @return \Conventus\Atoss\StructType\SetVersioningRange
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
    /**
     * Get effectiveday value
     * @return int|null
     */
    public function getEffectiveday(): ?int
    {
        return $this->effectiveday;
    }
    /**
     * Set effectiveday value
     * @param int $effectiveday
     * @return \Conventus\Atoss\StructType\SetVersioningRange
     */
    public function setEffectiveday(?int $effectiveday = null): self
    {
        // validation for constraint: int
        if (!is_null($effectiveday) && !(is_int($effectiveday) || ctype_digit($effectiveday))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($effectiveday, true), gettype($effectiveday)), __LINE__);
        }
        $this->effectiveday = $effectiveday;
        
        return $this;
    }
}
