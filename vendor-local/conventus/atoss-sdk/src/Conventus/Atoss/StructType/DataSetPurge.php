<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dataSetPurge StructType
 * Meta information extracted from the WSDL
 * - type: tns:dataSetPurge
 * @subpackage Structs
 */
class DataSetPurge extends AbstractStructBase
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
     * The simulation
     * @var int|null
     */
    protected ?int $simulation = null;
    /**
     * Constructor method for dataSetPurge
     * @uses DataSetPurge::setTable()
     * @uses DataSetPurge::setFilter()
     * @uses DataSetPurge::setSimulation()
     * @param string $table
     * @param \Conventus\Atoss\StructType\WebPropertyObject $filter
     * @param int $simulation
     */
    public function __construct(?string $table = null, ?\Conventus\Atoss\StructType\WebPropertyObject $filter = null, ?int $simulation = null)
    {
        $this
            ->setTable($table)
            ->setFilter($filter)
            ->setSimulation($simulation);
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
     * @return \Conventus\Atoss\StructType\DataSetPurge
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
     * @return \Conventus\Atoss\StructType\DataSetPurge
     */
    public function setFilter(?\Conventus\Atoss\StructType\WebPropertyObject $filter = null): self
    {
        $this->filter = $filter;
        
        return $this;
    }
    /**
     * Get simulation value
     * @return int|null
     */
    public function getSimulation(): ?int
    {
        return $this->simulation;
    }
    /**
     * Set simulation value
     * @param int $simulation
     * @return \Conventus\Atoss\StructType\DataSetPurge
     */
    public function setSimulation(?int $simulation = null): self
    {
        // validation for constraint: int
        if (!is_null($simulation) && !(is_int($simulation) || ctype_digit($simulation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($simulation, true), gettype($simulation)), __LINE__);
        }
        $this->simulation = $simulation;
        
        return $this;
    }
}
