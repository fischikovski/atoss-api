<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getVersionValidityRanges StructType
 * Meta information extracted from the WSDL
 * - type: tns:getVersionValidityRanges
 * @subpackage Structs
 */
class GetVersionValidityRanges extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $key = null;
    /**
     * The validfrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validfrom = null;
    /**
     * The validto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validto = null;
    /**
     * Constructor method for getVersionValidityRanges
     * @uses GetVersionValidityRanges::setTable()
     * @uses GetVersionValidityRanges::setKey()
     * @uses GetVersionValidityRanges::setValidfrom()
     * @uses GetVersionValidityRanges::setValidto()
     * @param string $table
     * @param \Conventus\Atoss\StructType\WebPropertyObject $key
     * @param string $validfrom
     * @param string $validto
     */
    public function __construct(?string $table = null, ?\Conventus\Atoss\StructType\WebPropertyObject $key = null, ?string $validfrom = null, ?string $validto = null)
    {
        $this
            ->setTable($table)
            ->setKey($key)
            ->setValidfrom($validfrom)
            ->setValidto($validto);
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
     * @return \Conventus\Atoss\StructType\GetVersionValidityRanges
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
     * @return \Conventus\Atoss\StructType\GetVersionValidityRanges
     */
    public function setKey(?\Conventus\Atoss\StructType\WebPropertyObject $key = null): self
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get validfrom value
     * @return string|null
     */
    public function getValidfrom(): ?string
    {
        return $this->validfrom;
    }
    /**
     * Set validfrom value
     * @param string $validfrom
     * @return \Conventus\Atoss\StructType\GetVersionValidityRanges
     */
    public function setValidfrom(?string $validfrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validfrom) && !is_string($validfrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validfrom, true), gettype($validfrom)), __LINE__);
        }
        $this->validfrom = $validfrom;
        
        return $this;
    }
    /**
     * Get validto value
     * @return string|null
     */
    public function getValidto(): ?string
    {
        return $this->validto;
    }
    /**
     * Set validto value
     * @param string $validto
     * @return \Conventus\Atoss\StructType\GetVersionValidityRanges
     */
    public function setValidto(?string $validto = null): self
    {
        // validation for constraint: string
        if (!is_null($validto) && !is_string($validto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validto, true), gettype($validto)), __LINE__);
        }
        $this->validto = $validto;
        
        return $this;
    }
}
