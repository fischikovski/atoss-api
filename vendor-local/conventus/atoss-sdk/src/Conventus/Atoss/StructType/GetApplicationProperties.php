<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getApplicationProperties StructType
 * Meta information extracted from the WSDL
 * - type: tns:getApplicationProperties
 * @subpackage Structs
 */
class GetApplicationProperties extends AbstractStructBase
{
    /**
     * The workflow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workflow = null;
    /**
     * The application
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The options
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $options = null;
    /**
     * Constructor method for getApplicationProperties
     * @uses GetApplicationProperties::setWorkflow()
     * @uses GetApplicationProperties::setApplication()
     * @uses GetApplicationProperties::setOptions()
     * @param string $workflow
     * @param string $application
     * @param string $options
     */
    public function __construct(?string $workflow = null, ?string $application = null, ?string $options = null)
    {
        $this
            ->setWorkflow($workflow)
            ->setApplication($application)
            ->setOptions($options);
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
     * @return \Conventus\Atoss\StructType\GetApplicationProperties
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
     * @return \Conventus\Atoss\StructType\GetApplicationProperties
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
     * Get options value
     * @return string|null
     */
    public function getOptions(): ?string
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param string $options
     * @return \Conventus\Atoss\StructType\GetApplicationProperties
     */
    public function setOptions(?string $options = null): self
    {
        // validation for constraint: string
        if (!is_null($options) && !is_string($options)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($options, true), gettype($options)), __LINE__);
        }
        $this->options = $options;
        
        return $this;
    }
}
