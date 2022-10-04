<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBadgeEmployee StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBadgeEmployee
 * @subpackage Structs
 */
class GetBadgeEmployee extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The pincode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pincode = null;
    /**
     * The checkpincode
     * @var bool|null
     */
    protected ?bool $checkpincode = null;
    /**
     * Constructor method for getBadgeEmployee
     * @uses GetBadgeEmployee::setId()
     * @uses GetBadgeEmployee::setPincode()
     * @uses GetBadgeEmployee::setCheckpincode()
     * @param string $id
     * @param string $pincode
     * @param bool $checkpincode
     */
    public function __construct(?string $id = null, ?string $pincode = null, ?bool $checkpincode = null)
    {
        $this
            ->setId($id)
            ->setPincode($pincode)
            ->setCheckpincode($checkpincode);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Conventus\Atoss\StructType\GetBadgeEmployee
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get pincode value
     * @return string|null
     */
    public function getPincode(): ?string
    {
        return $this->pincode;
    }
    /**
     * Set pincode value
     * @param string $pincode
     * @return \Conventus\Atoss\StructType\GetBadgeEmployee
     */
    public function setPincode(?string $pincode = null): self
    {
        // validation for constraint: string
        if (!is_null($pincode) && !is_string($pincode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pincode, true), gettype($pincode)), __LINE__);
        }
        $this->pincode = $pincode;
        
        return $this;
    }
    /**
     * Get checkpincode value
     * @return bool|null
     */
    public function getCheckpincode(): ?bool
    {
        return $this->checkpincode;
    }
    /**
     * Set checkpincode value
     * @param bool $checkpincode
     * @return \Conventus\Atoss\StructType\GetBadgeEmployee
     */
    public function setCheckpincode(?bool $checkpincode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkpincode) && !is_bool($checkpincode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkpincode, true), gettype($checkpincode)), __LINE__);
        }
        $this->checkpincode = $checkpincode;
        
        return $this;
    }
}
