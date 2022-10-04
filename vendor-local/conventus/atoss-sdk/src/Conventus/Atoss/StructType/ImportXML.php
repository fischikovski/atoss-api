<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for importXML StructType
 * Meta information extracted from the WSDL
 * - type: tns:importXML
 * @subpackage Structs
 */
class ImportXML extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The format
     * @var int|null
     */
    protected ?int $format = null;
    /**
     * Constructor method for importXML
     * @uses ImportXML::setTable()
     * @uses ImportXML::setData()
     * @uses ImportXML::setFormat()
     * @param string $table
     * @param string $data
     * @param int $format
     */
    public function __construct(?string $table = null, ?string $data = null, ?int $format = null)
    {
        $this
            ->setTable($table)
            ->setData($data)
            ->setFormat($format);
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
     * @return \Conventus\Atoss\StructType\ImportXML
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
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Conventus\Atoss\StructType\ImportXML
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get format value
     * @return int|null
     */
    public function getFormat(): ?int
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param int $format
     * @return \Conventus\Atoss\StructType\ImportXML
     */
    public function setFormat(?int $format = null): self
    {
        // validation for constraint: int
        if (!is_null($format) && !(is_int($format) || ctype_digit($format))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
}
