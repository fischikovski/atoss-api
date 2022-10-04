<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimeAccountBalanceResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getTimeAccountBalanceResponse
 * @subpackage Structs
 */
class GetTimeAccountBalanceResponse extends AbstractStructBase
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
     * Constructor method for getTimeAccountBalanceResponse
     * @uses GetTimeAccountBalanceResponse::setReturn()
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
     * @return \Conventus\Atoss\StructType\GetTimeAccountBalanceResponse
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
