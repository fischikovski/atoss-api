<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCostCenters StructType
 * Meta information extracted from the WSDL
 * - type: tns:getCostCenters
 * @subpackage Structs
 */
class GetCostCenters extends AbstractStructBase
{
    /**
     * The costcenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $costcenter = null;
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
     * Constructor method for getCostCenters
     * @uses GetCostCenters::setCostcenter()
     * @uses GetCostCenters::setFields()
     * @uses GetCostCenters::setFilter()
     * @uses GetCostCenters::setOrder()
     * @param string $costcenter
     * @param string $fields
     * @param string $filter
     * @param string $order
     */
    public function __construct(?string $costcenter = null, ?string $fields = null, ?string $filter = null, ?string $order = null)
    {
        $this
            ->setCostcenter($costcenter)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order);
    }
    /**
     * Get costcenter value
     * @return string|null
     */
    public function getCostcenter(): ?string
    {
        return $this->costcenter;
    }
    /**
     * Set costcenter value
     * @param string $costcenter
     * @return \Conventus\Atoss\StructType\GetCostCenters
     */
    public function setCostcenter(?string $costcenter = null): self
    {
        // validation for constraint: string
        if (!is_null($costcenter) && !is_string($costcenter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costcenter, true), gettype($costcenter)), __LINE__);
        }
        $this->costcenter = $costcenter;
        
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
     * @return \Conventus\Atoss\StructType\GetCostCenters
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
     * @return \Conventus\Atoss\StructType\GetCostCenters
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
     * @return \Conventus\Atoss\StructType\GetCostCenters
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
