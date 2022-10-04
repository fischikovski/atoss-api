<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isSettingEnabled StructType
 * Meta information extracted from the WSDL
 * - type: tns:isSettingEnabled
 * @subpackage Structs
 */
class IsSettingEnabled extends AbstractStructBase
{
    /**
     * The section
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $section = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The defvalue
     * @var bool|null
     */
    protected ?bool $defvalue = null;
    /**
     * Constructor method for isSettingEnabled
     * @uses IsSettingEnabled::setSection()
     * @uses IsSettingEnabled::setKey()
     * @uses IsSettingEnabled::setDefvalue()
     * @param string $section
     * @param string $key
     * @param bool $defvalue
     */
    public function __construct(?string $section = null, ?string $key = null, ?bool $defvalue = null)
    {
        $this
            ->setSection($section)
            ->setKey($key)
            ->setDefvalue($defvalue);
    }
    /**
     * Get section value
     * @return string|null
     */
    public function getSection(): ?string
    {
        return $this->section;
    }
    /**
     * Set section value
     * @param string $section
     * @return \Conventus\Atoss\StructType\IsSettingEnabled
     */
    public function setSection(?string $section = null): self
    {
        // validation for constraint: string
        if (!is_null($section) && !is_string($section)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($section, true), gettype($section)), __LINE__);
        }
        $this->section = $section;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Conventus\Atoss\StructType\IsSettingEnabled
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get defvalue value
     * @return bool|null
     */
    public function getDefvalue(): ?bool
    {
        return $this->defvalue;
    }
    /**
     * Set defvalue value
     * @param bool $defvalue
     * @return \Conventus\Atoss\StructType\IsSettingEnabled
     */
    public function setDefvalue(?bool $defvalue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($defvalue) && !is_bool($defvalue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defvalue, true), gettype($defvalue)), __LINE__);
        }
        $this->defvalue = $defvalue;
        
        return $this;
    }
}
