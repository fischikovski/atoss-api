<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for unregisterEventQueue StructType
 * Meta information extracted from the WSDL
 * - type: tns:unregisterEventQueue
 * @subpackage Structs
 */
class UnregisterEventQueue extends AbstractStructBase
{
    /**
     * The eventQueueId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eventQueueId = null;
    /**
     * Constructor method for unregisterEventQueue
     * @uses UnregisterEventQueue::setEventQueueId()
     * @param string $eventQueueId
     */
    public function __construct(?string $eventQueueId = null)
    {
        $this
            ->setEventQueueId($eventQueueId);
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
     * @return \Conventus\Atoss\StructType\UnregisterEventQueue
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
}
