<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTableFields StructType
 * Meta information extracted from the WSDL
 * - type: tns:getTableFields
 * @subpackage Structs
 */
class GetTableFields extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The field
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * Constructor method for getTableFields
     * @uses GetTableFields::setTable()
     * @uses GetTableFields::setField()
     * @param string $table
     * @param string $field
     */
    public function __construct(?string $table = null, ?string $field = null)
    {
        $this
            ->setTable($table)
            ->setField($field);
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
     * @return \Conventus\Atoss\StructType\GetTableFields
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
     * Get field value
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \Conventus\Atoss\StructType\GetTableFields
     */
    public function setField(?string $field = null): self
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        
        return $this;
    }
}
