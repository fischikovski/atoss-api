<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteVersion StructType
 * Meta information extracted from the WSDL
 * - type: tns:deleteVersion
 * @subpackage Structs
 */
class DeleteVersion extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The changetimestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $changetimestamp = null;
    /**
     * The field
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $field = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $key = null;
    /**
     * The changetype
     * @var int|null
     */
    protected ?int $changetype = null;
    /**
     * Constructor method for deleteVersion
     * @uses DeleteVersion::setTable()
     * @uses DeleteVersion::setChangetimestamp()
     * @uses DeleteVersion::setField()
     * @uses DeleteVersion::setKey()
     * @uses DeleteVersion::setChangetype()
     * @param string $table
     * @param string $changetimestamp
     * @param string $field
     * @param \Conventus\Atoss\StructType\WebPropertyObject $key
     * @param int $changetype
     */
    public function __construct(?string $table = null, ?string $changetimestamp = null, ?string $field = null, ?\Conventus\Atoss\StructType\WebPropertyObject $key = null, ?int $changetype = null)
    {
        $this
            ->setTable($table)
            ->setChangetimestamp($changetimestamp)
            ->setField($field)
            ->setKey($key)
            ->setChangetype($changetype);
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
     * @return \Conventus\Atoss\StructType\DeleteVersion
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
     * Get changetimestamp value
     * @return string|null
     */
    public function getChangetimestamp(): ?string
    {
        return $this->changetimestamp;
    }
    /**
     * Set changetimestamp value
     * @param string $changetimestamp
     * @return \Conventus\Atoss\StructType\DeleteVersion
     */
    public function setChangetimestamp(?string $changetimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($changetimestamp) && !is_string($changetimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changetimestamp, true), gettype($changetimestamp)), __LINE__);
        }
        $this->changetimestamp = $changetimestamp;
        
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
     * @return \Conventus\Atoss\StructType\DeleteVersion
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
    /**
     * Get key value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getKey(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $key
     * @return \Conventus\Atoss\StructType\DeleteVersion
     */
    public function setKey(?\Conventus\Atoss\StructType\WebPropertyObject $key = null): self
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get changetype value
     * @return int|null
     */
    public function getChangetype(): ?int
    {
        return $this->changetype;
    }
    /**
     * Set changetype value
     * @param int $changetype
     * @return \Conventus\Atoss\StructType\DeleteVersion
     */
    public function setChangetype(?int $changetype = null): self
    {
        // validation for constraint: int
        if (!is_null($changetype) && !(is_int($changetype) || ctype_digit($changetype))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changetype, true), gettype($changetype)), __LINE__);
        }
        $this->changetype = $changetype;
        
        return $this;
    }
}
