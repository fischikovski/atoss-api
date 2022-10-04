<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for startTransaction StructType
 * Meta information extracted from the WSDL
 * - type: tns:startTransaction
 * @subpackage Structs
 */
class StartTransaction extends AbstractStructBase
{
    /**
     * The isolationlevel
     * @var int|null
     */
    protected ?int $isolationlevel = null;
    /**
     * Constructor method for startTransaction
     * @uses StartTransaction::setIsolationlevel()
     * @param int $isolationlevel
     */
    public function __construct(?int $isolationlevel = null)
    {
        $this
            ->setIsolationlevel($isolationlevel);
    }
    /**
     * Get isolationlevel value
     * @return int|null
     */
    public function getIsolationlevel(): ?int
    {
        return $this->isolationlevel;
    }
    /**
     * Set isolationlevel value
     * @param int $isolationlevel
     * @return \Conventus\Atoss\StructType\StartTransaction
     */
    public function setIsolationlevel(?int $isolationlevel = null): self
    {
        // validation for constraint: int
        if (!is_null($isolationlevel) && !(is_int($isolationlevel) || ctype_digit($isolationlevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isolationlevel, true), gettype($isolationlevel)), __LINE__);
        }
        $this->isolationlevel = $isolationlevel;
        
        return $this;
    }
}
