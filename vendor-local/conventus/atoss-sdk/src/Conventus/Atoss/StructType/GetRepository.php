<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepository StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRepository
 * @subpackage Structs
 */
class GetRepository extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fields = null;
    /**
     * The restriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $restriction = null;
    /**
     * Constructor method for getRepository
     * @uses GetRepository::setGuid()
     * @uses GetRepository::setFields()
     * @uses GetRepository::setRestriction()
     * @param string $guid
     * @param string $fields
     * @param string $restriction
     */
    public function __construct(?string $guid = null, ?string $fields = null, ?string $restriction = null)
    {
        $this
            ->setGuid($guid)
            ->setFields($fields)
            ->setRestriction($restriction);
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \Conventus\Atoss\StructType\GetRepository
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get fields value
     * @return string|null
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param string $fields
     * @return \Conventus\Atoss\StructType\GetRepository
     */
    public function setFields(?string $fields = null): self
    {
        // validation for constraint: string
        if (!is_null($fields) && !is_string($fields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fields, true), gettype($fields)), __LINE__);
        }
        $this->fields = $fields;
        
        return $this;
    }
    /**
     * Get restriction value
     * @return string|null
     */
    public function getRestriction(): ?string
    {
        return $this->restriction;
    }
    /**
     * Set restriction value
     * @param string $restriction
     * @return \Conventus\Atoss\StructType\GetRepository
     */
    public function setRestriction(?string $restriction = null): self
    {
        // validation for constraint: string
        if (!is_null($restriction) && !is_string($restriction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restriction, true), gettype($restriction)), __LINE__);
        }
        $this->restriction = $restriction;
        
        return $this;
    }
}
