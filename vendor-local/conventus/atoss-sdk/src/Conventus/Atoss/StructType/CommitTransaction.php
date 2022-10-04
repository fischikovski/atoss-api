<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for commitTransaction StructType
 * Meta information extracted from the WSDL
 * - type: tns:commitTransaction
 * @subpackage Structs
 */
class CommitTransaction extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isolationlevel
     * @var int|null
     */
    protected ?int $isolationlevel = null;
    /**
     * Constructor method for commitTransaction
     * @uses CommitTransaction::setId()
     * @uses CommitTransaction::setIsolationlevel()
     * @param int $id
     * @param int $isolationlevel
     */
    public function __construct(?int $id = null, ?int $isolationlevel = null)
    {
        $this
            ->setId($id)
            ->setIsolationlevel($isolationlevel);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Conventus\Atoss\StructType\CommitTransaction
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\CommitTransaction
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
