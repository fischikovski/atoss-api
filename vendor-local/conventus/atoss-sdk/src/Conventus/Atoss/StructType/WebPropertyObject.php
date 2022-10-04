<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for webPropertyObject StructType
 * @subpackage Structs
 */
class WebPropertyObject extends AbstractStructBase
{
    /**
     * The binaryProperties
     * @var \Conventus\Atoss\StructType\BinaryProperties|null
     */
    protected ?\Conventus\Atoss\StructType\BinaryProperties $binaryProperties = null;
    /**
     * The componentProperties
     * @var \Conventus\Atoss\StructType\ComponentProperties|null
     */
    protected ?\Conventus\Atoss\StructType\ComponentProperties $componentProperties = null;
    /**
     * The dateTimeProperties
     * @var \Conventus\Atoss\StructType\DateTimeProperties|null
     */
    protected ?\Conventus\Atoss\StructType\DateTimeProperties $dateTimeProperties = null;
    /**
     * The doubleProperties
     * @var \Conventus\Atoss\StructType\DoubleProperties|null
     */
    protected ?\Conventus\Atoss\StructType\DoubleProperties $doubleProperties = null;
    /**
     * The durationProperties
     * @var \Conventus\Atoss\StructType\DurationProperties|null
     */
    protected ?\Conventus\Atoss\StructType\DurationProperties $durationProperties = null;
    /**
     * The integerProperties
     * @var \Conventus\Atoss\StructType\IntegerProperties|null
     */
    protected ?\Conventus\Atoss\StructType\IntegerProperties $integerProperties = null;
    /**
     * The listProperites
     * @var \Conventus\Atoss\StructType\ListProperites|null
     */
    protected ?\Conventus\Atoss\StructType\ListProperites $listProperites = null;
    /**
     * The stringProperties
     * @var \Conventus\Atoss\StructType\StringProperties|null
     */
    protected ?\Conventus\Atoss\StructType\StringProperties $stringProperties = null;
    /**
     * The XMLProperties
     * @var \Conventus\Atoss\StructType\XMLProperties|null
     */
    protected ?\Conventus\Atoss\StructType\XMLProperties $XMLProperties = null;
    /**
     * Constructor method for webPropertyObject
     * @uses WebPropertyObject::setBinaryProperties()
     * @uses WebPropertyObject::setComponentProperties()
     * @uses WebPropertyObject::setDateTimeProperties()
     * @uses WebPropertyObject::setDoubleProperties()
     * @uses WebPropertyObject::setDurationProperties()
     * @uses WebPropertyObject::setIntegerProperties()
     * @uses WebPropertyObject::setListProperites()
     * @uses WebPropertyObject::setStringProperties()
     * @uses WebPropertyObject::setXMLProperties()
     * @param \Conventus\Atoss\StructType\BinaryProperties $binaryProperties
     * @param \Conventus\Atoss\StructType\ComponentProperties $componentProperties
     * @param \Conventus\Atoss\StructType\DateTimeProperties $dateTimeProperties
     * @param \Conventus\Atoss\StructType\DoubleProperties $doubleProperties
     * @param \Conventus\Atoss\StructType\DurationProperties $durationProperties
     * @param \Conventus\Atoss\StructType\IntegerProperties $integerProperties
     * @param \Conventus\Atoss\StructType\ListProperites $listProperites
     * @param \Conventus\Atoss\StructType\StringProperties $stringProperties
     * @param \Conventus\Atoss\StructType\XMLProperties $xMLProperties
     */
    public function __construct(?\Conventus\Atoss\StructType\BinaryProperties $binaryProperties = null, ?\Conventus\Atoss\StructType\ComponentProperties $componentProperties = null, ?\Conventus\Atoss\StructType\DateTimeProperties $dateTimeProperties = null, ?\Conventus\Atoss\StructType\DoubleProperties $doubleProperties = null, ?\Conventus\Atoss\StructType\DurationProperties $durationProperties = null, ?\Conventus\Atoss\StructType\IntegerProperties $integerProperties = null, ?\Conventus\Atoss\StructType\ListProperites $listProperites = null, ?\Conventus\Atoss\StructType\StringProperties $stringProperties = null, ?\Conventus\Atoss\StructType\XMLProperties $xMLProperties = null)
    {
        $this
            ->setBinaryProperties($binaryProperties)
            ->setComponentProperties($componentProperties)
            ->setDateTimeProperties($dateTimeProperties)
            ->setDoubleProperties($doubleProperties)
            ->setDurationProperties($durationProperties)
            ->setIntegerProperties($integerProperties)
            ->setListProperites($listProperites)
            ->setStringProperties($stringProperties)
            ->setXMLProperties($xMLProperties);
    }
    /**
     * Get binaryProperties value
     * @return \Conventus\Atoss\StructType\BinaryProperties|null
     */
    public function getBinaryProperties(): ?\Conventus\Atoss\StructType\BinaryProperties
    {
        return $this->binaryProperties;
    }
    /**
     * Set binaryProperties value
     * @param \Conventus\Atoss\StructType\BinaryProperties $binaryProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setBinaryProperties(?\Conventus\Atoss\StructType\BinaryProperties $binaryProperties = null): self
    {
        $this->binaryProperties = $binaryProperties;
        
        return $this;
    }
    /**
     * Get componentProperties value
     * @return \Conventus\Atoss\StructType\ComponentProperties|null
     */
    public function getComponentProperties(): ?\Conventus\Atoss\StructType\ComponentProperties
    {
        return $this->componentProperties;
    }
    /**
     * Set componentProperties value
     * @param \Conventus\Atoss\StructType\ComponentProperties $componentProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setComponentProperties(?\Conventus\Atoss\StructType\ComponentProperties $componentProperties = null): self
    {
        $this->componentProperties = $componentProperties;
        
        return $this;
    }
    /**
     * Get dateTimeProperties value
     * @return \Conventus\Atoss\StructType\DateTimeProperties|null
     */
    public function getDateTimeProperties(): ?\Conventus\Atoss\StructType\DateTimeProperties
    {
        return $this->dateTimeProperties;
    }
    /**
     * Set dateTimeProperties value
     * @param \Conventus\Atoss\StructType\DateTimeProperties $dateTimeProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setDateTimeProperties(?\Conventus\Atoss\StructType\DateTimeProperties $dateTimeProperties = null): self
    {
        $this->dateTimeProperties = $dateTimeProperties;
        
        return $this;
    }
    /**
     * Get doubleProperties value
     * @return \Conventus\Atoss\StructType\DoubleProperties|null
     */
    public function getDoubleProperties(): ?\Conventus\Atoss\StructType\DoubleProperties
    {
        return $this->doubleProperties;
    }
    /**
     * Set doubleProperties value
     * @param \Conventus\Atoss\StructType\DoubleProperties $doubleProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setDoubleProperties(?\Conventus\Atoss\StructType\DoubleProperties $doubleProperties = null): self
    {
        $this->doubleProperties = $doubleProperties;
        
        return $this;
    }
    /**
     * Get durationProperties value
     * @return \Conventus\Atoss\StructType\DurationProperties|null
     */
    public function getDurationProperties(): ?\Conventus\Atoss\StructType\DurationProperties
    {
        return $this->durationProperties;
    }
    /**
     * Set durationProperties value
     * @param \Conventus\Atoss\StructType\DurationProperties $durationProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setDurationProperties(?\Conventus\Atoss\StructType\DurationProperties $durationProperties = null): self
    {
        $this->durationProperties = $durationProperties;
        
        return $this;
    }
    /**
     * Get integerProperties value
     * @return \Conventus\Atoss\StructType\IntegerProperties|null
     */
    public function getIntegerProperties(): ?\Conventus\Atoss\StructType\IntegerProperties
    {
        return $this->integerProperties;
    }
    /**
     * Set integerProperties value
     * @param \Conventus\Atoss\StructType\IntegerProperties $integerProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setIntegerProperties(?\Conventus\Atoss\StructType\IntegerProperties $integerProperties = null): self
    {
        $this->integerProperties = $integerProperties;
        
        return $this;
    }
    /**
     * Get listProperites value
     * @return \Conventus\Atoss\StructType\ListProperites|null
     */
    public function getListProperites(): ?\Conventus\Atoss\StructType\ListProperites
    {
        return $this->listProperites;
    }
    /**
     * Set listProperites value
     * @param \Conventus\Atoss\StructType\ListProperites $listProperites
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setListProperites(?\Conventus\Atoss\StructType\ListProperites $listProperites = null): self
    {
        $this->listProperites = $listProperites;
        
        return $this;
    }
    /**
     * Get stringProperties value
     * @return \Conventus\Atoss\StructType\StringProperties|null
     */
    public function getStringProperties(): ?\Conventus\Atoss\StructType\StringProperties
    {
        return $this->stringProperties;
    }
    /**
     * Set stringProperties value
     * @param \Conventus\Atoss\StructType\StringProperties $stringProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setStringProperties(?\Conventus\Atoss\StructType\StringProperties $stringProperties = null): self
    {
        $this->stringProperties = $stringProperties;
        
        return $this;
    }
    /**
     * Get XMLProperties value
     * @return \Conventus\Atoss\StructType\XMLProperties|null
     */
    public function getXMLProperties(): ?\Conventus\Atoss\StructType\XMLProperties
    {
        return $this->XMLProperties;
    }
    /**
     * Set XMLProperties value
     * @param \Conventus\Atoss\StructType\XMLProperties $xMLProperties
     * @return \Conventus\Atoss\StructType\WebPropertyObject
     */
    public function setXMLProperties(?\Conventus\Atoss\StructType\XMLProperties $xMLProperties = null): self
    {
        $this->XMLProperties = $xMLProperties;
        
        return $this;
    }
}
