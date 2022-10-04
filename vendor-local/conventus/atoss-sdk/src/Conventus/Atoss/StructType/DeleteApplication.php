<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteApplication StructType
 * Meta information extracted from the WSDL
 * - type: tns:deleteApplication
 * @subpackage Structs
 */
class DeleteApplication extends AbstractStructBase
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
     * Constructor method for deleteApplication
     * @uses DeleteApplication::setApplication()
     * @uses DeleteApplication::setWorkflow()
     * @param string $application
     * @param string $workflow
     */
    public function __construct(?string $application = null, ?string $workflow = null)
    {
        $this
            ->setApplication($application)
            ->setWorkflow($workflow);
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
     * @return \Conventus\Atoss\StructType\DeleteApplication
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
     * @return \Conventus\Atoss\StructType\DeleteApplication
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
}
