<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readDurationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:readDurationResponse
 * @subpackage Structs
 */
class ReadDurationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - base: xs:double
     * - minOccurs: 0
     * - type: tns:duration
     * @var float|null
     */
    protected ?float $return = null;
    /**
     * Constructor method for readDurationResponse
     * @uses ReadDurationResponse::setReturn()
     * @param float $return
     */
    public function __construct(?float $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return float|null
     */
    public function getReturn(): ?float
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param float $return
     * @return \Conventus\Atoss\StructType\ReadDurationResponse
     */
    public function setReturn(?float $return = null): self
    {
        // validation for constraint: float
        if (!is_null($return) && !(is_float($return) || is_numeric($return))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
}
