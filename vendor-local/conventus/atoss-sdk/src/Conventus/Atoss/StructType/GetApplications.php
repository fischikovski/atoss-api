<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getApplications StructType
 * Meta information extracted from the WSDL
 * - type: tns:getApplications
 * @subpackage Structs
 */
class GetApplications extends AbstractStructBase
{
    /**
     * The application
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The workflow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workflow = null;
    /**
     * The applicant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $applicant = null;
    /**
     * The state
     * @var int|null
     */
    protected ?int $state = null;
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
     * Constructor method for getApplications
     * @uses GetApplications::setApplication()
     * @uses GetApplications::setWorkflow()
     * @uses GetApplications::setApplicant()
     * @uses GetApplications::setState()
     * @uses GetApplications::setFields()
     * @uses GetApplications::setFilter()
     * @uses GetApplications::setOrder()
     * @param string $application
     * @param string $workflow
     * @param string $applicant
     * @param int $state
     * @param string $fields
     * @param string $filter
     * @param string $order
     */
    public function __construct(?string $application = null, ?string $workflow = null, ?string $applicant = null, ?int $state = null, ?string $fields = null, ?string $filter = null, ?string $order = null)
    {
        $this
            ->setApplication($application)
            ->setWorkflow($workflow)
            ->setApplicant($applicant)
            ->setState($state)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order);
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Conventus\Atoss\StructType\GetApplications
     */
    public function setApplication(?string $application = null): self
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($application, true), gettype($application)), __LINE__);
        }
        $this->application = $application;
        
        return $this;
    }
    /**
     * Get workflow value
     * @return string|null
     */
    public function getWorkflow(): ?string
    {
        return $this->workflow;
    }
    /**
     * Set workflow value
     * @param string $workflow
     * @return \Conventus\Atoss\StructType\GetApplications
     */
    public function setWorkflow(?string $workflow = null): self
    {
        // validation for constraint: string
        if (!is_null($workflow) && !is_string($workflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workflow, true), gettype($workflow)), __LINE__);
        }
        $this->workflow = $workflow;
        
        return $this;
    }
    /**
     * Get applicant value
     * @return string|null
     */
    public function getApplicant(): ?string
    {
        return $this->applicant;
    }
    /**
     * Set applicant value
     * @param string $applicant
     * @return \Conventus\Atoss\StructType\GetApplications
     */
    public function setApplicant(?string $applicant = null): self
    {
        // validation for constraint: string
        if (!is_null($applicant) && !is_string($applicant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicant, true), gettype($applicant)), __LINE__);
        }
        $this->applicant = $applicant;
        
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
     * @return \Conventus\Atoss\StructType\GetApplications
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
     * @return \Conventus\Atoss\StructType\GetApplications
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
     * @return \Conventus\Atoss\StructType\GetApplications
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
     * @return \Conventus\Atoss\StructType\GetApplications
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
