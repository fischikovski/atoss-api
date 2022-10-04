<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShift StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShift
 * @subpackage Structs
 */
class GetShift extends AbstractStructBase
{
    /**
     * The nummer
     * @var int|null
     */
    protected ?int $nummer = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fields = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $order = null;
    /**
     * Constructor method for getShift
     * @uses GetShift::setNummer()
     * @uses GetShift::setFields()
     * @uses GetShift::setFilter()
     * @uses GetShift::setOrder()
     * @param int $nummer
     * @param string $fields
     * @param string $filter
     * @param string $order
     */
    public function __construct(?int $nummer = null, ?string $fields = null, ?string $filter = null, ?string $order = null)
    {
        $this
            ->setNummer($nummer)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order);
    }
    /**
     * Get nummer value
     * @return int|null
     */
    public function getNummer(): ?int
    {
        return $this->nummer;
    }
    /**
     * Set nummer value
     * @param int $nummer
     * @return \Conventus\Atoss\StructType\GetShift
     */
    public function setNummer(?int $nummer = null): self
    {
        // validation for constraint: int
        if (!is_null($nummer) && !(is_int($nummer) || ctype_digit($nummer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nummer, true), gettype($nummer)), __LINE__);
        }
        $this->nummer = $nummer;
        
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
     * @return \Conventus\Atoss\StructType\GetShift
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
     * Get filter value
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Conventus\Atoss\StructType\GetShift
     */
    public function setFilter(?string $filter = null): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        
        return $this;
    }
    /**
     * Get order value
     * @return string|null
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param string $order
     * @return \Conventus\Atoss\StructType\GetShift
     */
    public function setOrder(?string $order = null): self
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        
        return $this;
    }
}
