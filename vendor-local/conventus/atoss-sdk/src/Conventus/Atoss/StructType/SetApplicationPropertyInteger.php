<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setApplicationPropertyInteger StructType
 * Meta information extracted from the WSDL
 * - type: tns:setApplicationPropertyInteger
 * @subpackage Structs
 */
class SetApplicationPropertyInteger extends AbstractStructBase
{
    /**
     * The application
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The property
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $property = null;
    /**
     * The index
     * @var int|null
     */
    protected ?int $index = null;
    /**
     * The value
     * @var int|null
     */
    protected ?int $value = null;
    /**
     * Constructor method for setApplicationPropertyInteger
     * @uses SetApplicationPropertyInteger::setApplication()
     * @uses SetApplicationPropertyInteger::setProperty()
     * @uses SetApplicationPropertyInteger::setIndex()
     * @uses SetApplicationPropertyInteger::setValue()
     * @param string $application
     * @param string $property
     * @param int $index
     * @param int $value
     */
    public function __construct(?string $application = null, ?string $property = null, ?int $index = null, ?int $value = null)
    {
        $this
            ->setApplication($application)
            ->setProperty($property)
            ->setIndex($index)
            ->setValue($value);
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyInteger
     */
    public function setApplication(?string $application = null): self
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($application, true), gettype($application)), __LINE__);
        }
        $this->application = $application;
        
        return $this;
    }
    /**
     * Get property value
     * @return string|null
     */
    public function getProperty(): ?string
    {
        return $this->property;
    }
    /**
     * Set property value
     * @param string $property
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyInteger
     */
    public function setProperty(?string $property = null): self
    {
        // validation for constraint: string
        if (!is_null($property) && !is_string($property)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($property, true), gettype($property)), __LINE__);
        }
        $this->property = $property;
        
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyInteger
     */
    public function setIndex(?int $index = null): self
    {
        // validation for constraint: int
        if (!is_null($index) && !(is_int($index) || ctype_digit($index))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($index, true), gettype($index)), __LINE__);
        }
        $this->index = $index;
        
        return $this;
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \Conventus\Atoss\StructType\SetApplicationPropertyInteger
     */
    public function setValue(?int $value = null): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
