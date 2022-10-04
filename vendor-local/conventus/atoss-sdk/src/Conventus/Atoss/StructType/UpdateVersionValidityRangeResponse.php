<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateVersionValidityRangeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:updateVersionValidityRangeResponse
 * @subpackage Structs
 */
class UpdateVersionValidityRangeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var int|null
     */
    protected ?int $return = null;
    /**
     * Constructor method for updateVersionValidityRangeResponse
     * @uses UpdateVersionValidityRangeResponse::setReturn()
     * @param int $return
     */
    public function __construct(?int $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return int|null
     */
    public function getReturn(): ?int
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param int $return
     * @return \Conventus\Atoss\StructType\UpdateVersionValidityRangeResponse
     */
    public function setReturn(?int $return = null): self
    {
        // validation for constraint: int
        if (!is_null($return) && !(is_int($return) || ctype_digit($return))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
}
