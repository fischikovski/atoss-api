<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for xmlProperty StructType
 * Meta information extracted from the WSDL
 * - type: tns:xmlProperty
 * @subpackage Structs
 */
class XmlProperty extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * Constructor method for xmlProperty
     * @uses XmlProperty::setData()
     * @param string $data
     */
    public function __construct(?string $data = null)
    {
        $this
            ->setData($data);
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
     * @return \Conventus\Atoss\StructType\XmlProperty
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
}
