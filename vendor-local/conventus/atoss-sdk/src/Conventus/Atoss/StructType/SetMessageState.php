<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setMessageState StructType
 * Meta information extracted from the WSDL
 * - type: tns:setMessageState
 * @subpackage Structs
 */
class SetMessageState extends AbstractStructBase
{
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The newstate
     * @var int|null
     */
    protected ?int $newstate = null;
    /**
     * Constructor method for setMessageState
     * @uses SetMessageState::setMessage()
     * @uses SetMessageState::setNewstate()
     * @param string $message
     * @param int $newstate
     */
    public function __construct(?string $message = null, ?int $newstate = null)
    {
        $this
            ->setMessage($message)
            ->setNewstate($newstate);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Conventus\Atoss\StructType\SetMessageState
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get newstate value
     * @return int|null
     */
    public function getNewstate(): ?int
    {
        return $this->newstate;
    }
    /**
     * Set newstate value
     * @param int $newstate
     * @return \Conventus\Atoss\StructType\SetMessageState
     */
    public function setNewstate(?int $newstate = null): self
    {
        // validation for constraint: int
        if (!is_null($newstate) && !(is_int($newstate) || ctype_digit($newstate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newstate, true), gettype($newstate)), __LINE__);
        }
        $this->newstate = $newstate;
        
        return $this;
    }
}
