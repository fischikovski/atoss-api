<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateVersionValidityRange StructType
 * Meta information extracted from the WSDL
 * - type: tns:updateVersionValidityRange
 * @subpackage Structs
 */
class UpdateVersionValidityRange extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $filter = null;
    /**
     * The newChangeTimestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $newChangeTimestamp = null;
    /**
     * The newValidTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $newValidTo = null;
    /**
     * The values
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $values = null;
    /**
     * Constructor method for updateVersionValidityRange
     * @uses UpdateVersionValidityRange::setTable()
     * @uses UpdateVersionValidityRange::setFilter()
     * @uses UpdateVersionValidityRange::setNewChangeTimestamp()
     * @uses UpdateVersionValidityRange::setNewValidTo()
     * @uses UpdateVersionValidityRange::setValues()
     * @param string $table
     * @param \Conventus\Atoss\StructType\WebPropertyObject $filter
     * @param string $newChangeTimestamp
     * @param string $newValidTo
     * @param \Conventus\Atoss\StructType\WebPropertyObject $values
     */
    public function __construct(?string $table = null, ?\Conventus\Atoss\StructType\WebPropertyObject $filter = null, ?string $newChangeTimestamp = null, ?string $newValidTo = null, ?\Conventus\Atoss\StructType\WebPropertyObject $values = null)
    {
        $this
            ->setTable($table)
            ->setFilter($filter)
            ->setNewChangeTimestamp($newChangeTimestamp)
            ->setNewValidTo($newValidTo)
            ->setValues($values);
    }
    /**
     * Get table value
     * @return string|null
     */
    public function getTable(): ?string
    {
        return $this->table;
    }
    /**
     * Set table value
     * @param string $table
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRange
     */
    public function setTable(?string $table = null): self
    {
        // validation for constraint: string
        if (!is_null($table) && !is_string($table)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($table, true), gettype($table)), __LINE__);
        }
        $this->table = $table;
        
        return $this;
    }
    /**
     * Get filter value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getFilter(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $filter
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRange
     */
    public function setFilter(?\Conventus\Atoss\StructType\WebPropertyObject $filter = null): self
    {
        $this->filter = $filter;
        
        return $this;
    }
    /**
     * Get newChangeTimestamp value
     * @return string|null
     */
    public function getNewChangeTimestamp(): ?string
    {
        return $this->newChangeTimestamp;
    }
    /**
     * Set newChangeTimestamp value
     * @param string $newChangeTimestamp
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRange
     */
    public function setNewChangeTimestamp(?string $newChangeTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($newChangeTimestamp) && !is_string($newChangeTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newChangeTimestamp, true), gettype($newChangeTimestamp)), __LINE__);
        }
        $this->newChangeTimestamp = $newChangeTimestamp;
        
        return $this;
    }
    /**
     * Get newValidTo value
     * @return string|null
     */
    public function getNewValidTo(): ?string
    {
        return $this->newValidTo;
    }
    /**
     * Set newValidTo value
     * @param string $newValidTo
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRange
     */
    public function setNewValidTo(?string $newValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($newValidTo) && !is_string($newValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newValidTo, true), gettype($newValidTo)), __LINE__);
        }
        $this->newValidTo = $newValidTo;
        
        return $this;
    }
    /**
     * Get values value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getValues(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->values;
    }
    /**
     * Set values value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $values
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRange
     */
    public function setValues(?\Conventus\Atoss\StructType\WebPropertyObject $values = null): self
    {
        $this->values = $values;
        
        return $this;
    }
}
