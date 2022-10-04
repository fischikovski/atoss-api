<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReport StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReport
 * @subpackage Structs
 */
class GetReport extends AbstractStructBase
{
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $parameters = null;
    /**
     * The eventDriven
     * @var bool|null
     */
    protected ?bool $eventDriven = null;
    /**
     * Constructor method for getReport
     * @uses GetReport::setParameters()
     * @uses GetReport::setEventDriven()
     * @param \Conventus\Atoss\StructType\WebPropertyObject $parameters
     * @param bool $eventDriven
     */
    public function __construct(?\Conventus\Atoss\StructType\WebPropertyObject $parameters = null, ?bool $eventDriven = null)
    {
        $this
            ->setParameters($parameters)
            ->setEventDriven($eventDriven);
    }
    /**
     * Get parameters value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getParameters(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->parameters;
    }
    /**
     * Set parameters value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $parameters
     * @return \Conventus\Atoss\StructType\GetReport
     */
    public function setParameters(?\Conventus\Atoss\StructType\WebPropertyObject $parameters = null): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }
    /**
     * Get eventDriven value
     * @return bool|null
     */
    public function getEventDriven(): ?bool
    {
        return $this->eventDriven;
    }
    /**
     * Set eventDriven value
     * @param bool $eventDriven
     * @return \Conventus\Atoss\StructType\GetReport
     */
    public function setEventDriven(?bool $eventDriven = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eventDriven) && !is_bool($eventDriven)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eventDriven, true), gettype($eventDriven)), __LINE__);
        }
        $this->eventDriven = $eventDriven;
        
        return $this;
    }
}
