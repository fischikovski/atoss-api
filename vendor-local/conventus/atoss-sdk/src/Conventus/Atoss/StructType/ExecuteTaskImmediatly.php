<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for executeTaskImmediatly StructType
 * Meta information extracted from the WSDL
 * - type: tns:executeTaskImmediatly
 * @subpackage Structs
 */
class ExecuteTaskImmediatly extends AbstractStructBase
{
    /**
     * The task
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $task = null;
    /**
     * Constructor method for executeTaskImmediatly
     * @uses ExecuteTaskImmediatly::setTask()
     * @param string $task
     */
    public function __construct(?string $task = null)
    {
        $this
            ->setTask($task);
    }
    /**
     * Get task value
     * @return string|null
     */
    public function getTask(): ?string
    {
        return $this->task;
    }
    /**
     * Set task value
     * @param string $task
     * @return \Conventus\Atoss\StructType\ExecuteTaskImmediatly
     */
    public function setTask(?string $task = null): self
    {
        // validation for constraint: string
        if (!is_null($task) && !is_string($task)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($task, true), gettype($task)), __LINE__);
        }
        $this->task = $task;
        
        return $this;
    }
}
