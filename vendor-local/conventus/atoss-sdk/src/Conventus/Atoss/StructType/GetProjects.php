<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProjects StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProjects
 * @subpackage Structs
 */
class GetProjects extends AbstractStructBase
{
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * The state
     * @var int|null
     */
    protected ?int $state = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The supervisor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supervisor = null;
    /**
     * The customer
     * @var int|null
     */
    protected ?int $customer = null;
    /**
     * The ignoremainproject
     * @var int|null
     */
    protected ?int $ignoremainproject = null;
    /**
     * The mainproject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mainproject = null;
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
     * Constructor method for getProjects
     * @uses GetProjects::setProject()
     * @uses GetProjects::setState()
     * @uses GetProjects::setEmployee()
     * @uses GetProjects::setSupervisor()
     * @uses GetProjects::setCustomer()
     * @uses GetProjects::setIgnoremainproject()
     * @uses GetProjects::setMainproject()
     * @uses GetProjects::setFields()
     * @uses GetProjects::setFilter()
     * @uses GetProjects::setOrder()
     * @param string $project
     * @param int $state
     * @param string $employee
     * @param string $supervisor
     * @param int $customer
     * @param int $ignoremainproject
     * @param string $mainproject
     * @param string $fields
     * @param string $filter
     * @param string $order
     */
    public function __construct(?string $project = null, ?int $state = null, ?string $employee = null, ?string $supervisor = null, ?int $customer = null, ?int $ignoremainproject = null, ?string $mainproject = null, ?string $fields = null, ?string $filter = null, ?string $order = null)
    {
        $this
            ->setProject($project)
            ->setState($state)
            ->setEmployee($employee)
            ->setSupervisor($supervisor)
            ->setCustomer($customer)
            ->setIgnoremainproject($ignoremainproject)
            ->setMainproject($mainproject)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order);
    }
    /**
     * Get project value
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->project;
    }
    /**
     * Set project value
     * @param string $project
     * @return \Conventus\Atoss\StructType\GetProjects
     */
    public function setProject(?string $project = null): self
    {
        // validation for constraint: string
        if (!is_null($project) && !is_string($project)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($project, true), gettype($project)), __LINE__);
        }
        $this->project = $project;
        
        return $this;
    }
    /**
     * Get state value
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param int $state
     * @return \Conventus\Atoss\StructType\GetProjects
     */
    public function setState(?int $state = null): self
    {
        // validation for constraint: int
        if (!is_null($state) && !(is_int($state) || ctype_digit($state))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\GetProjects
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
     * Get supervisor value
     * @return string|null
     */
    public function getSupervisor(): ?string
    {
        return $this->supervisor;
    }
    /**
     * Set supervisor value
     * @param string $supervisor
     * @return \Conventus\Atoss\StructType\GetProjects
     */
    public function setSupervisor(?string $supervisor = null): self
    {
        // validation for constraint: string
        if (!is_null($supervisor) && !is_string($supervisor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supervisor, true), gettype($supervisor)), __LINE__);
        }
        $this->supervisor = $supervisor;
        
        return $this;
    }
    /**
     * Get customer value
     * @return int|null
     */
    public function getCustomer(): ?int
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param int $customer
     * @return \Conventus\Atoss\StructType\GetProjects
     */
    public function setCustomer(?int $customer = null): self
    {
        // validation for constraint: int
        if (!is_null($customer) && !(is_int($customer) || ctype_digit($customer))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer, true), gettype($customer)), __LINE__);
        }
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Get ignoremainproject value
     * @return int|null
     */
    public function getIgnoremainproject(): ?int
    {
        return $this->ignoremainproject;
    }
    /**
     * Set ignoremainproject value
     * @param int $ignoremainproject
     * @return \Conventus\Atoss\StructType\GetProjects
     */
    public function setIgnoremainproject(?int $ignoremainproject = null): self
    {
        // validation for constraint: int
        if (!is_null($ignoremainproject) && !(is_int($ignoremainproject) || ctype_digit($ignoremainproject))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ignoremainproject, true), gettype($ignoremainproject)), __LINE__);
        }
        $this->ignoremainproject = $ignoremainproject;
        
        return $this;
    }
    /**
     * Get mainproject value
     * @return string|null
     */
    public function getMainproject(): ?string
    {
        return $this->mainproject;
    }
    /**
     * Set mainproject value
     * @param string $mainproject
     * @return \Conventus\Atoss\StructType\GetProjects
     */
    public function setMainproject(?string $mainproject = null): self
    {
        // validation for constraint: string
        if (!is_null($mainproject) && !is_string($mainproject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainproject, true), gettype($mainproject)), __LINE__);
        }
        $this->mainproject = $mainproject;
        
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
     * @return \Conventus\Atoss\StructType\GetProjects
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
     * @return \Conventus\Atoss\StructType\GetProjects
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
     * @return \Conventus\Atoss\StructType\GetProjects
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
