<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getHolidays StructType
 * Meta information extracted from the WSDL
 * - type: tns:getHolidays
 * @subpackage Structs
 */
class GetHolidays extends AbstractStructBase
{
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The relation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $relation = null;
    /**
     * The periodstart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodstart = null;
    /**
     * The periodend
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $periodend = null;
    /**
     * Constructor method for getHolidays
     * @uses GetHolidays::setType()
     * @uses GetHolidays::setRelation()
     * @uses GetHolidays::setPeriodstart()
     * @uses GetHolidays::setPeriodend()
     * @param int $type
     * @param string $relation
     * @param string $periodstart
     * @param string $periodend
     */
    public function __construct(?int $type = null, ?string $relation = null, ?string $periodstart = null, ?string $periodend = null)
    {
        $this
            ->setType($type)
            ->setRelation($relation)
            ->setPeriodstart($periodstart)
            ->setPeriodend($periodend);
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Conventus\Atoss\StructType\GetHolidays
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get relation value
     * @return string|null
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }
    /**
     * Set relation value
     * @param string $relation
     * @return \Conventus\Atoss\StructType\GetHolidays
     */
    public function setRelation(?string $relation = null): self
    {
        // validation for constraint: string
        if (!is_null($relation) && !is_string($relation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relation, true), gettype($relation)), __LINE__);
        }
        $this->relation = $relation;
        
        return $this;
    }
    /**
     * Get periodstart value
     * @return string|null
     */
    public function getPeriodstart(): ?string
    {
        return $this->periodstart;
    }
    /**
     * Set periodstart value
     * @param string $periodstart
     * @return \Conventus\Atoss\StructType\GetHolidays
     */
    public function setPeriodstart(?string $periodstart = null): self
    {
        // validation for constraint: string
        if (!is_null($periodstart) && !is_string($periodstart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodstart, true), gettype($periodstart)), __LINE__);
        }
        $this->periodstart = $periodstart;
        
        return $this;
    }
    /**
     * Get periodend value
     * @return string|null
     */
    public function getPeriodend(): ?string
    {
        return $this->periodend;
    }
    /**
     * Set periodend value
     * @param string $periodend
     * @return \Conventus\Atoss\StructType\GetHolidays
     */
    public function setPeriodend(?string $periodend = null): self
    {
        // validation for constraint: string
        if (!is_null($periodend) && !is_string($periodend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodend, true), gettype($periodend)), __LINE__);
        }
        $this->periodend = $periodend;
        
        return $this;
    }
}
