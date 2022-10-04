<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for switchLocale StructType
 * Meta information extracted from the WSDL
 * - type: tns:switchLocale
 * @subpackage Structs
 */
class SwitchLocale extends AbstractStructBase
{
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The restore
     * @var bool|null
     */
    protected ?bool $restore = null;
    /**
     * Constructor method for switchLocale
     * @uses SwitchLocale::setLocale()
     * @uses SwitchLocale::setRestore()
     * @param string $locale
     * @param bool $restore
     */
    public function __construct(?string $locale = null, ?bool $restore = null)
    {
        $this
            ->setLocale($locale)
            ->setRestore($restore);
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Conventus\Atoss\StructType\SwitchLocale
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get restore value
     * @return bool|null
     */
    public function getRestore(): ?bool
    {
        return $this->restore;
    }
    /**
     * Set restore value
     * @param bool $restore
     * @return \Conventus\Atoss\StructType\SwitchLocale
     */
    public function setRestore(?bool $restore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($restore) && !is_bool($restore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restore, true), gettype($restore)), __LINE__);
        }
        $this->restore = $restore;
        
        return $this;
    }
}
