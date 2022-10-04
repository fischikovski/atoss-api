<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for registerEventQueue StructType
 * Meta information extracted from the WSDL
 * - type: tns:registerEventQueue
 * @subpackage Structs
 */
class RegisterEventQueue extends AbstractStructBase
{
    /**
     * The eventFilter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $eventFilter = null;
    /**
     * Constructor method for registerEventQueue
     * @uses RegisterEventQueue::setEventFilter()
     * @param string[] $eventFilter
     */
    public function __construct(?array $eventFilter = null)
    {
        $this
            ->setEventFilter($eventFilter);
    }
    /**
     * Get eventFilter value
     * @return string[]
     */
    public function getEventFilter(): ?array
    {
        return $this->eventFilter;
    }
    /**
     * This method is responsible for validating the values passed to the setEventFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventFilter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventFilterForArrayConstraintsFromSetEventFilter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $registerEventQueueEventFilterItem) {
            // validation for constraint: itemType
            if (!is_string($registerEventQueueEventFilterItem)) {
                $invalidValues[] = is_object($registerEventQueueEventFilterItem) ? get_class($registerEventQueueEventFilterItem) : sprintf('%s(%s)', gettype($registerEventQueueEventFilterItem), var_export($registerEventQueueEventFilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The eventFilter property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set eventFilter value
     * @throws InvalidArgumentException
     * @param string[] $eventFilter
     * @return \Conventus\Atoss\StructType\RegisterEventQueue
     */
    public function setEventFilter(?array $eventFilter = null): self
    {
        // validation for constraint: array
        if ('' !== ($eventFilterArrayErrorMessage = self::validateEventFilterForArrayConstraintsFromSetEventFilter($eventFilter))) {
            throw new InvalidArgumentException($eventFilterArrayErrorMessage, __LINE__);
        }
        $this->eventFilter = $eventFilter;
        
        return $this;
    }
    /**
     * Add item to eventFilter value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\RegisterEventQueue
     */
    public function addToEventFilter(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The eventFilter property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->eventFilter[] = $item;
        
        return $this;
    }
}
