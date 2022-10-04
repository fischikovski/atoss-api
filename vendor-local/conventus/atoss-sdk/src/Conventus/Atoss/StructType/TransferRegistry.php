<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transferRegistry StructType
 * Meta information extracted from the WSDL
 * - type: tns:transferRegistry
 * @subpackage Structs
 */
class TransferRegistry extends AbstractStructBase
{
    /**
     * The srcworkstation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $srcworkstation = null;
    /**
     * The destworkstation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destworkstation = null;
    /**
     * Constructor method for transferRegistry
     * @uses TransferRegistry::setSrcworkstation()
     * @uses TransferRegistry::setDestworkstation()
     * @param string $srcworkstation
     * @param string $destworkstation
     */
    public function __construct(?string $srcworkstation = null, ?string $destworkstation = null)
    {
        $this
            ->setSrcworkstation($srcworkstation)
            ->setDestworkstation($destworkstation);
    }
    /**
     * Get srcworkstation value
     * @return string|null
     */
    public function getSrcworkstation(): ?string
    {
        return $this->srcworkstation;
    }
    /**
     * Set srcworkstation value
     * @param string $srcworkstation
     * @return \Conventus\Atoss\StructType\TransferRegistry
     */
    public function setSrcworkstation(?string $srcworkstation = null): self
    {
        // validation for constraint: string
        if (!is_null($srcworkstation) && !is_string($srcworkstation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($srcworkstation, true), gettype($srcworkstation)), __LINE__);
        }
        $this->srcworkstation = $srcworkstation;
        
        return $this;
    }
    /**
     * Get destworkstation value
     * @return string|null
     */
    public function getDestworkstation(): ?string
    {
        return $this->destworkstation;
    }
    /**
     * Set destworkstation value
     * @param string $destworkstation
     * @return \Conventus\Atoss\StructType\TransferRegistry
     */
    public function setDestworkstation(?string $destworkstation = null): self
    {
        // validation for constraint: string
        if (!is_null($destworkstation) && !is_string($destworkstation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destworkstation, true), gettype($destworkstation)), __LINE__);
        }
        $this->destworkstation = $destworkstation;
        
        return $this;
    }
}
