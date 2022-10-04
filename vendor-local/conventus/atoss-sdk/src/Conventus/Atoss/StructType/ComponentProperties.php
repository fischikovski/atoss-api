<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for componentProperties StructType
 * @subpackage Structs
 */
class ComponentProperties extends AbstractStructBase
{
    /**
     * The entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\Entry[]
     */
    protected ?array $entry = null;
    /**
     * Constructor method for componentProperties
     * @uses ComponentProperties::setEntry()
     * @param \Conventus\Atoss\StructType\Entry[] $entry
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get entry value
     * @return \Conventus\Atoss\StructType\Entry[]
     */
    public function getEntry(): ?array
    {
        return $this->entry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $componentPropertiesEntryItem) {
            // validation for constraint: itemType
            if (!$componentPropertiesEntryItem instanceof \Conventus\Atoss\StructType\Entry) {
                $invalidValues[] = is_object($componentPropertiesEntryItem) ? get_class($componentPropertiesEntryItem) : sprintf('%s(%s)', gettype($componentPropertiesEntryItem), var_export($componentPropertiesEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entry property can only contain items of type \Conventus\Atoss\StructType\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set entry value
     * @throws InvalidArgumentException
     * @param \Conventus\Atoss\StructType\Entry[] $entry
     * @return \Conventus\Atoss\StructType\ComponentProperties
     */
    public function setEntry(?array $entry = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        $this->entry = $entry;
        
        return $this;
    }
    /**
     * Add item to entry value
     * @throws InvalidArgumentException
     * @param \Conventus\Atoss\StructType\Entry $item
     * @return \Conventus\Atoss\StructType\ComponentProperties
     */
    public function addToEntry(\Conventus\Atoss\StructType\Entry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Conventus\Atoss\StructType\Entry) {
            throw new InvalidArgumentException(sprintf('The entry property can only contain items of type \Conventus\Atoss\StructType\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entry[] = $item;
        
        return $this;
    }
}
