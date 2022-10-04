<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setDayPropertiesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:setDayPropertiesResponse
 * @subpackage Structs
 */
class SetDayPropertiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var bool|null
     */
    protected ?bool $return = null;
    /**
     * Constructor method for setDayPropertiesResponse
     * @uses SetDayPropertiesResponse::setReturn()
     * @param bool $return
     */
    public function __construct(?bool $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return bool|null
     */
    public function getReturn(): ?bool
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param bool $return
     * @return \Conventus\Atoss\StructType\SetDayPropertiesResponse
     */
    public function setReturn(?bool $return = null): self
    {
        // validation for constraint: boolean
        if (!is_null($return) && !is_bool($return)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        
        return $this;
    }
}
