<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changePrimaryKey StructType
 * Meta information extracted from the WSDL
 * - type: tns:changePrimaryKey
 * @subpackage Structs
 */
class ChangePrimaryKey extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The fromkey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $fromkey = null;
    /**
     * The tokey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $tokey = null;
    /**
     * Constructor method for changePrimaryKey
     * @uses ChangePrimaryKey::setTable()
     * @uses ChangePrimaryKey::setFromkey()
     * @uses ChangePrimaryKey::setTokey()
     * @param string $table
     * @param \Conventus\Atoss\StructType\WebPropertyObject $fromkey
     * @param \Conventus\Atoss\StructType\WebPropertyObject $tokey
     */
    public function __construct(?string $table = null, ?\Conventus\Atoss\StructType\WebPropertyObject $fromkey = null, ?\Conventus\Atoss\StructType\WebPropertyObject $tokey = null)
    {
        $this
            ->setTable($table)
            ->setFromkey($fromkey)
            ->setTokey($tokey);
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
     * @return \Conventus\Atoss\StructType\ChangePrimaryKey
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
     * Get fromkey value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getFromkey(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->fromkey;
    }
    /**
     * Set fromkey value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $fromkey
     * @return \Conventus\Atoss\StructType\ChangePrimaryKey
     */
    public function setFromkey(?\Conventus\Atoss\StructType\WebPropertyObject $fromkey = null): self
    {
        $this->fromkey = $fromkey;
        
        return $this;
    }
    /**
     * Get tokey value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getTokey(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->tokey;
    }
    /**
     * Set tokey value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $tokey
     * @return \Conventus\Atoss\StructType\ChangePrimaryKey
     */
    public function setTokey(?\Conventus\Atoss\StructType\WebPropertyObject $tokey = null): self
    {
        $this->tokey = $tokey;
        
        return $this;
    }
}
