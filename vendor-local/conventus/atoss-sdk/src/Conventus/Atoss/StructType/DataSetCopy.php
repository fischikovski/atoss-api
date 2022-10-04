<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dataSetCopy StructType
 * Meta information extracted from the WSDL
 * - type: tns:dataSetCopy
 * @subpackage Structs
 */
class DataSetCopy extends AbstractStructBase
{
    /**
     * The table
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $table = null;
    /**
     * The source
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $source = null;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $destination = null;
    /**
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * The metadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $metadata = null;
    /**
     * Constructor method for dataSetCopy
     * @uses DataSetCopy::setTable()
     * @uses DataSetCopy::setSource()
     * @uses DataSetCopy::setDestination()
     * @uses DataSetCopy::setOptions()
     * @uses DataSetCopy::setMetadata()
     * @param string $table
     * @param \Conventus\Atoss\StructType\WebPropertyObject $source
     * @param \Conventus\Atoss\StructType\WebPropertyObject $destination
     * @param int $options
     * @param \Conventus\Atoss\StructType\WebPropertyObject $metadata
     */
    public function __construct(?string $table = null, ?\Conventus\Atoss\StructType\WebPropertyObject $source = null, ?\Conventus\Atoss\StructType\WebPropertyObject $destination = null, ?int $options = null, ?\Conventus\Atoss\StructType\WebPropertyObject $metadata = null)
    {
        $this
            ->setTable($table)
            ->setSource($source)
            ->setDestination($destination)
            ->setOptions($options)
            ->setMetadata($metadata);
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
     * @return \Conventus\Atoss\StructType\DataSetCopy
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
     * Get source value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getSource(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $source
     * @return \Conventus\Atoss\StructType\DataSetCopy
     */
    public function setSource(?\Conventus\Atoss\StructType\WebPropertyObject $source = null): self
    {
        $this->source = $source;
        
        return $this;
    }
    /**
     * Get destination value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getDestination(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $destination
     * @return \Conventus\Atoss\StructType\DataSetCopy
     */
    public function setDestination(?\Conventus\Atoss\StructType\WebPropertyObject $destination = null): self
    {
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get options value
     * @return int|null
     */
    public function getOptions(): ?int
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param int $options
     * @return \Conventus\Atoss\StructType\DataSetCopy
     */
    public function setOptions(?int $options = null): self
    {
        // validation for constraint: int
        if (!is_null($options) && !(is_int($options) || ctype_digit($options))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($options, true), gettype($options)), __LINE__);
        }
        $this->options = $options;
        
        return $this;
    }
    /**
     * Get metadata value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getMetadata(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->metadata;
    }
    /**
     * Set metadata value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $metadata
     * @return \Conventus\Atoss\StructType\DataSetCopy
     */
    public function setMetadata(?\Conventus\Atoss\StructType\WebPropertyObject $metadata = null): self
    {
        $this->metadata = $metadata;
        
        return $this;
    }
}
