<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDepartments StructType
 * Meta information extracted from the WSDL
 * - type: tns:getDepartments
 * @subpackage Structs
 */
class GetDepartments extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The group
     * @var int|null
     */
    protected ?int $group = null;
    /**
     * The right
     * @var int|null
     */
    protected ?int $right = null;
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
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * Constructor method for getDepartments
     * @uses GetDepartments::setEmployee()
     * @uses GetDepartments::setGroup()
     * @uses GetDepartments::setRight()
     * @uses GetDepartments::setFilter()
     * @uses GetDepartments::setOrder()
     * @uses GetDepartments::setId()
     * @param string $employee
     * @param int $group
     * @param int $right
     * @param string $filter
     * @param string $order
     * @param int $id
     */
    public function __construct(?string $employee = null, ?int $group = null, ?int $right = null, ?string $filter = null, ?string $order = null, ?int $id = null)
    {
        $this
            ->setEmployee($employee)
            ->setGroup($group)
            ->setRight($right)
            ->setFilter($filter)
            ->setOrder($order)
            ->setId($id);
    }
    /**
     * Get employee value
     * @return string|null
     */
    public function getEmployee(): ?string
    {
        return $this->employee;
    }
    /**
     * Set employee value
     * @param string $employee
     * @return \Conventus\Atoss\StructType\GetDepartments
     */
    public function setEmployee(?string $employee = null): self
    {
        // validation for constraint: string
        if (!is_null($employee) && !is_string($employee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee, true), gettype($employee)), __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
    /**
     * Get group value
     * @return int|null
     */
    public function getGroup(): ?int
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param int $group
     * @return \Conventus\Atoss\StructType\GetDepartments
     */
    public function setGroup(?int $group = null): self
    {
        // validation for constraint: int
        if (!is_null($group) && !(is_int($group) || ctype_digit($group))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        
        return $this;
    }
    /**
     * Get right value
     * @return int|null
     */
    public function getRight(): ?int
    {
        return $this->right;
    }
    /**
     * Set right value
     * @param int $right
     * @return \Conventus\Atoss\StructType\GetDepartments
     */
    public function setRight(?int $right = null): self
    {
        // validation for constraint: int
        if (!is_null($right) && !(is_int($right) || ctype_digit($right))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($right, true), gettype($right)), __LINE__);
        }
        $this->right = $right;
        
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
     * @return \Conventus\Atoss\StructType\GetDepartments
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
     * @return \Conventus\Atoss\StructType\GetDepartments
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
     * @return \Conventus\Atoss\StructType\GetDepartments
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
}
