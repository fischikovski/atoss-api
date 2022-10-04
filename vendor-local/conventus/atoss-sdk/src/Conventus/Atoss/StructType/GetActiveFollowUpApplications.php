<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getActiveFollowUpApplications StructType
 * Meta information extracted from the WSDL
 * - type: tns:getActiveFollowUpApplications
 * @subpackage Structs
 */
class GetActiveFollowUpApplications extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The workflow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workflow = null;
    /**
     * The workflowgroup
     * @var int|null
     */
    protected ?int $workflowgroup = null;
    /**
     * Constructor method for getActiveFollowUpApplications
     * @uses GetActiveFollowUpApplications::setEmployee()
     * @uses GetActiveFollowUpApplications::setWorkflow()
     * @uses GetActiveFollowUpApplications::setWorkflowgroup()
     * @param string $employee
     * @param string $workflow
     * @param int $workflowgroup
     */
    public function __construct(?string $employee = null, ?string $workflow = null, ?int $workflowgroup = null)
    {
        $this
            ->setEmployee($employee)
            ->setWorkflow($workflow)
            ->setWorkflowgroup($workflowgroup);
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
     * @return \Conventus\Atoss\StructType\GetActiveFollowUpApplications
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
     * @return \Conventus\Atoss\StructType\GetActiveFollowUpApplications
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
     * Get workflowgroup value
     * @return int|null
     */
    public function getWorkflowgroup(): ?int
    {
        return $this->workflowgroup;
    }
    /**
     * Set workflowgroup value
     * @param int $workflowgroup
     * @return \Conventus\Atoss\StructType\GetActiveFollowUpApplications
     */
    public function setWorkflowgroup(?int $workflowgroup = null): self
    {
        // validation for constraint: int
        if (!is_null($workflowgroup) && !(is_int($workflowgroup) || ctype_digit($workflowgroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workflowgroup, true), gettype($workflowgroup)), __LINE__);
        }
        $this->workflowgroup = $workflowgroup;
        
        return $this;
    }
}
