<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for webPropertyObjectList StructType
 * @subpackage Structs
 */
class WebPropertyObjectList extends AbstractStructBase
{
    /**
     * The objects
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Conventus\Atoss\StructType\WebPropertyObject[]
     */
    protected ?array $objects = null;
    /**
     * Constructor method for webPropertyObjectList
     * @uses WebPropertyObjectList::setObjects()
     * @param \Conventus\Atoss\StructType\WebPropertyObject[] $objects
     */
    public function __construct(?array $objects = null)
    {
        $this
            ->setObjects($objects);
    }
    /**
     * Get objects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Conventus\Atoss\StructType\WebPropertyObject[]
     */
    public function getObjects(): ?array
    {
        return isset($this->objects) ? $this->objects : null;
    }
    /**
     * This method is responsible for validating the values passed to the setObjects method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObjects method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObjectsForArrayConstraintsFromSetObjects(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $webPropertyObjectListObjectsItem) {
            // validation for constraint: itemType
            if (!$webPropertyObjectListObjectsItem instanceof \Conventus\Atoss\StructType\WebPropertyObject) {
                $invalidValues[] = is_object($webPropertyObjectListObjectsItem) ? get_class($webPropertyObjectListObjectsItem) : sprintf('%s(%s)', gettype($webPropertyObjectListObjectsItem), var_export($webPropertyObjectListObjectsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The objects property can only contain items of type \Conventus\Atoss\StructType\WebPropertyObject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set objects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Conventus\Atoss\StructType\WebPropertyObject[] $objects
     * @return \Conventus\Atoss\StructType\WebPropertyObjectList
     */
    public function setObjects(?array $objects = null): self
    {
        // validation for constraint: array
        if ('' !== ($objectsArrayErrorMessage = self::validateObjectsForArrayConstraintsFromSetObjects($objects))) {
            throw new InvalidArgumentException($objectsArrayErrorMessage, __LINE__);
        }
        if (is_null($objects) || (is_array($objects) && empty($objects))) {
            unset($this->objects);
        } else {
            $this->objects = $objects;
        }
        
        return $this;
    }
    /**
     * Add item to objects value
     * @throws InvalidArgumentException
     * @param \Conventus\Atoss\StructType\WebPropertyObject $item
     * @return \Conventus\Atoss\StructType\WebPropertyObjectList
     */
    public function addToObjects(\Conventus\Atoss\StructType\WebPropertyObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Conventus\Atoss\StructType\WebPropertyObject) {
            throw new InvalidArgumentException(sprintf('The objects property can only contain items of type \Conventus\Atoss\StructType\WebPropertyObject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->objects[] = $item;
        
        return $this;
    }
}
