<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dumpTable StructType
 * Meta information extracted from the WSDL
 * - type: tns:dumpTable
 * @subpackage Structs
 */
class DumpTable extends AbstractStructBase
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
     * Constructor method for dumpTable
     * @uses DumpTable::setTable()
     * @uses DumpTable::setFilter()
     * @param string $table
     * @param \Conventus\Atoss\StructType\WebPropertyObject $filter
     */
    public function __construct(?string $table = null, ?\Conventus\Atoss\StructType\WebPropertyObject $filter = null)
    {
        $this
            ->setTable($table)
            ->setFilter($filter);
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
     * @return \Conventus\Atoss\StructType\DumpTable
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
     * @return \Conventus\Atoss\StructType\DumpTable
     */
    public function setFilter(?\Conventus\Atoss\StructType\WebPropertyObject $filter = null): self
    {
        $this->filter = $filter;
        
        return $this;
    }
}
