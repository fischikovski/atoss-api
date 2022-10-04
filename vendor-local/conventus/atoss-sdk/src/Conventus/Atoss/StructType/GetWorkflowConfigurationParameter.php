<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWorkflowConfigurationParameter StructType
 * Meta information extracted from the WSDL
 * - type: tns:getWorkflowConfigurationParameter
 * @subpackage Structs
 */
class GetWorkflowConfigurationParameter extends AbstractStructBase
{
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
     * The parameter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $parameter = null;
    /**
     * Constructor method for getWorkflowConfigurationParameter
     * @uses GetWorkflowConfigurationParameter::setWorkflow()
     * @uses GetWorkflowConfigurationParameter::setWorkflowgroup()
     * @uses GetWorkflowConfigurationParameter::setParameter()
     * @param string $workflow
     * @param int $workflowgroup
     * @param string $parameter
     */
    public function __construct(?string $workflow = null, ?int $workflowgroup = null, ?string $parameter = null)
    {
        $this
            ->setWorkflow($workflow)
            ->setWorkflowgroup($workflowgroup)
            ->setParameter($parameter);
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
     * @return \Conventus\Atoss\StructType\GetWorkflowConfigurationParameter
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
     * @return \Conventus\Atoss\StructType\GetWorkflowConfigurationParameter
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
    /**
     * Get parameter value
     * @return string|null
     */
    public function getParameter(): ?string
    {
        return $this->parameter;
    }
    /**
     * Set parameter value
     * @param string $parameter
     * @return \Conventus\Atoss\StructType\GetWorkflowConfigurationParameter
     */
    public function setParameter(?string $parameter = null): self
    {
        // validation for constraint: string
        if (!is_null($parameter) && !is_string($parameter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameter, true), gettype($parameter)), __LINE__);
        }
        $this->parameter = $parameter;
        
        return $this;
    }
}
