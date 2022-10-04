<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getVersions StructType
 * Meta information extracted from the WSDL
 * - type: tns:getVersions
 * @subpackage Structs
 */
class GetVersions extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
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
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $key = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fields = null;
    /**
     * The groupbytimestamp
     * @var int|null
     */
    protected ?int $groupbytimestamp = null;
    /**
     * Constructor method for getVersions
     * @uses GetVersions::setTable()
     * @uses GetVersions::setFrom()
     * @uses GetVersions::setTo()
     * @uses GetVersions::setKey()
     * @uses GetVersions::setFields()
     * @uses GetVersions::setGroupbytimestamp()
     * @param string $table
     * @param string $from
     * @param string $to
     * @param \Conventus\Atoss\StructType\WebPropertyObject $key
     * @param string $fields
     * @param int $groupbytimestamp
     */
    public function __construct(?string $table = null, ?string $from = null, ?string $to = null, ?\Conventus\Atoss\StructType\WebPropertyObject $key = null, ?string $fields = null, ?int $groupbytimestamp = null)
    {
        $this
            ->setTable($table)
            ->setFrom($from)
            ->setTo($to)
            ->setKey($key)
            ->setFields($fields)
            ->setGroupbytimestamp($groupbytimestamp);
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
     * @return \Conventus\Atoss\StructType\GetVersions
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
     * @return \Conventus\Atoss\StructType\GetVersions
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
     * @return \Conventus\Atoss\StructType\GetVersions
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
     * @return \Conventus\Atoss\StructType\GetVersions
     */
    public function setKey(?\Conventus\Atoss\StructType\WebPropertyObject $key = null): self
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get fields value
     * @return string|null
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param string $fields
     * @return \Conventus\Atoss\StructType\GetVersions
     */
    public function setFields(?string $fields = null): self
    {
        // validation for constraint: string
        if (!is_null($fields) && !is_string($fields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fields, true), gettype($fields)), __LINE__);
        }
        $this->fields = $fields;
        
        return $this;
    }
    /**
     * Get groupbytimestamp value
     * @return int|null
     */
    public function getGroupbytimestamp(): ?int
    {
        return $this->groupbytimestamp;
    }
    /**
     * Set groupbytimestamp value
     * @param int $groupbytimestamp
     * @return \Conventus\Atoss\StructType\GetVersions
     */
    public function setGroupbytimestamp(?int $groupbytimestamp = null): self
    {
        // validation for constraint: int
        if (!is_null($groupbytimestamp) && !(is_int($groupbytimestamp) || ctype_digit($groupbytimestamp))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupbytimestamp, true), gettype($groupbytimestamp)), __LINE__);
        }
        $this->groupbytimestamp = $groupbytimestamp;
        
        return $this;
    }
}
