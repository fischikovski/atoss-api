<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for triggerWorkflowEvent StructType
 * Meta information extracted from the WSDL
 * - type: tns:triggerWorkflowEvent
 * @subpackage Structs
 */
class TriggerWorkflowEvent extends AbstractStructBase
{
    /**
     * The application
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The event
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $event = null;
    /**
     * The reason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reason = null;
    /**
     * Constructor method for triggerWorkflowEvent
     * @uses TriggerWorkflowEvent::setApplication()
     * @uses TriggerWorkflowEvent::setEvent()
     * @uses TriggerWorkflowEvent::setReason()
     * @param string $application
     * @param string $event
     * @param string $reason
     */
    public function __construct(?string $application = null, ?string $event = null, ?string $reason = null)
    {
        $this
            ->setApplication($application)
            ->setEvent($event)
            ->setReason($reason);
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
     * @return \Conventus\Atoss\StructType\TriggerWorkflowEvent
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
     * Get event value
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }
    /**
     * Set event value
     * @param string $event
     * @return \Conventus\Atoss\StructType\TriggerWorkflowEvent
     */
    public function setEvent(?string $event = null): self
    {
        // validation for constraint: string
        if (!is_null($event) && !is_string($event)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event, true), gettype($event)), __LINE__);
        }
        $this->event = $event;
        
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Conventus\Atoss\StructType\TriggerWorkflowEvent
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
        return $this;
    }
}
