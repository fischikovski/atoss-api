<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appendApplication StructType
 * Meta information extracted from the WSDL
 * - type: tns:appendApplication
 * @subpackage Structs
 */
class AppendApplication extends AbstractStructBase
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
     * The workflowgroup
     * @var int|null
     */
    protected ?int $workflowgroup = null;
    /**
     * The applicant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $applicant = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The substitute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $substitute = null;
    /**
     * Constructor method for appendApplication
     * @uses AppendApplication::setApplication()
     * @uses AppendApplication::setWorkflow()
     * @uses AppendApplication::setWorkflowgroup()
     * @uses AppendApplication::setApplicant()
     * @uses AppendApplication::setPriority()
     * @uses AppendApplication::setSubstitute()
     * @param string $application
     * @param string $workflow
     * @param int $workflowgroup
     * @param string $applicant
     * @param int $priority
     * @param string $substitute
     */
    public function __construct(?string $application = null, ?string $workflow = null, ?int $workflowgroup = null, ?string $applicant = null, ?int $priority = null, ?string $substitute = null)
    {
        $this
            ->setApplication($application)
            ->setWorkflow($workflow)
            ->setWorkflowgroup($workflowgroup)
            ->setApplicant($applicant)
            ->setPriority($priority)
            ->setSubstitute($substitute);
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
     * @return \Conventus\Atoss\StructType\AppendApplication
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
     * @return \Conventus\Atoss\StructType\AppendApplication
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
     * @return \Conventus\Atoss\StructType\AppendApplication
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
     * @return \Conventus\Atoss\StructType\AppendApplication
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
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Conventus\Atoss\StructType\AppendApplication
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
        return $this;
    }
    /**
     * Get substitute value
     * @return string|null
     */
    public function getSubstitute(): ?string
    {
        return $this->substitute;
    }
    /**
     * Set substitute value
     * @param string $substitute
     * @return \Conventus\Atoss\StructType\AppendApplication
     */
    public function setSubstitute(?string $substitute = null): self
    {
        // validation for constraint: string
        if (!is_null($substitute) && !is_string($substitute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($substitute, true), gettype($substitute)), __LINE__);
        }
        $this->substitute = $substitute;
        
        return $this;
    }
}
