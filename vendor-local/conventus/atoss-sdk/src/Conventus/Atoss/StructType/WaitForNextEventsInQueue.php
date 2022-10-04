<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for waitForNextEventsInQueue StructType
 * Meta information extracted from the WSDL
 * - type: tns:waitForNextEventsInQueue
 * @subpackage Structs
 */
class WaitForNextEventsInQueue extends AbstractStructBase
{
    /**
     * The eventQueueId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventQueueId = null;
    /**
     * The maxNumberOfEvents
     * @var int|null
     */
    protected ?int $maxNumberOfEvents = null;
    /**
     * The timeout
     * @var int|null
     */
    protected ?int $timeout = null;
    /**
     * Constructor method for waitForNextEventsInQueue
     * @uses WaitForNextEventsInQueue::setEventQueueId()
     * @uses WaitForNextEventsInQueue::setMaxNumberOfEvents()
     * @uses WaitForNextEventsInQueue::setTimeout()
     * @param string $eventQueueId
     * @param int $maxNumberOfEvents
     * @param int $timeout
     */
    public function __construct(?string $eventQueueId = null, ?int $maxNumberOfEvents = null, ?int $timeout = null)
    {
        $this
            ->setEventQueueId($eventQueueId)
            ->setMaxNumberOfEvents($maxNumberOfEvents)
            ->setTimeout($timeout);
    }
    /**
     * Get eventQueueId value
     * @return string|null
     */
    public function getEventQueueId(): ?string
    {
        return $this->eventQueueId;
    }
    /**
     * Set eventQueueId value
     * @param string $eventQueueId
     * @return \Conventus\Atoss\StructType\WaitForNextEventsInQueue
     */
    public function setEventQueueId(?string $eventQueueId = null): self
    {
        // validation for constraint: string
        if (!is_null($eventQueueId) && !is_string($eventQueueId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventQueueId, true), gettype($eventQueueId)), __LINE__);
        }
        $this->eventQueueId = $eventQueueId;
        
        return $this;
    }
    /**
     * Get maxNumberOfEvents value
     * @return int|null
     */
    public function getMaxNumberOfEvents(): ?int
    {
        return $this->maxNumberOfEvents;
    }
    /**
     * Set maxNumberOfEvents value
     * @param int $maxNumberOfEvents
     * @return \Conventus\Atoss\StructType\WaitForNextEventsInQueue
     */
    public function setMaxNumberOfEvents(?int $maxNumberOfEvents = null): self
    {
        // validation for constraint: int
        if (!is_null($maxNumberOfEvents) && !(is_int($maxNumberOfEvents) || ctype_digit($maxNumberOfEvents))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxNumberOfEvents, true), gettype($maxNumberOfEvents)), __LINE__);
        }
        $this->maxNumberOfEvents = $maxNumberOfEvents;
        
        return $this;
    }
    /**
     * Get timeout value
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param int $timeout
     * @return \Conventus\Atoss\StructType\WaitForNextEventsInQueue
     */
    public function setTimeout(?int $timeout = null): self
    {
        // validation for constraint: int
        if (!is_null($timeout) && !(is_int($timeout) || ctype_digit($timeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        
        return $this;
    }
}
