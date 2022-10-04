<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lockoutUsers StructType
 * Meta information extracted from the WSDL
 * - type: tns:lockoutUsers
 * @subpackage Structs
 */
class LockoutUsers extends AbstractStructBase
{
    /**
     * The waitfor
     * @var int|null
     */
    protected ?int $waitfor = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The whitelisted
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $whitelisted = null;
    /**
     * Constructor method for lockoutUsers
     * @uses LockoutUsers::setWaitfor()
     * @uses LockoutUsers::setMessage()
     * @uses LockoutUsers::setWhitelisted()
     * @param int $waitfor
     * @param string $message
     * @param string[] $whitelisted
     */
    public function __construct(?int $waitfor = null, ?string $message = null, ?array $whitelisted = null)
    {
        $this
            ->setWaitfor($waitfor)
            ->setMessage($message)
            ->setWhitelisted($whitelisted);
    }
    /**
     * Get waitfor value
     * @return int|null
     */
    public function getWaitfor(): ?int
    {
        return $this->waitfor;
    }
    /**
     * Set waitfor value
     * @param int $waitfor
     * @return \Conventus\Atoss\StructType\LockoutUsers
     */
    public function setWaitfor(?int $waitfor = null): self
    {
        // validation for constraint: int
        if (!is_null($waitfor) && !(is_int($waitfor) || ctype_digit($waitfor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($waitfor, true), gettype($waitfor)), __LINE__);
        }
        $this->waitfor = $waitfor;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\LockoutUsers
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
     * Get whitelisted value
     * @return string[]
     */
    public function getWhitelisted(): ?array
    {
        return $this->whitelisted;
    }
    /**
     * This method is responsible for validating the values passed to the setWhitelisted method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWhitelisted method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWhitelistedForArrayConstraintsFromSetWhitelisted(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lockoutUsersWhitelistedItem) {
            // validation for constraint: itemType
            if (!is_string($lockoutUsersWhitelistedItem)) {
                $invalidValues[] = is_object($lockoutUsersWhitelistedItem) ? get_class($lockoutUsersWhitelistedItem) : sprintf('%s(%s)', gettype($lockoutUsersWhitelistedItem), var_export($lockoutUsersWhitelistedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The whitelisted property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set whitelisted value
     * @throws InvalidArgumentException
     * @param string[] $whitelisted
     * @return \Conventus\Atoss\StructType\LockoutUsers
     */
    public function setWhitelisted(?array $whitelisted = null): self
    {
        // validation for constraint: array
        if ('' !== ($whitelistedArrayErrorMessage = self::validateWhitelistedForArrayConstraintsFromSetWhitelisted($whitelisted))) {
            throw new InvalidArgumentException($whitelistedArrayErrorMessage, __LINE__);
        }
        $this->whitelisted = $whitelisted;
        
        return $this;
    }
    /**
     * Add item to whitelisted value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\LockoutUsers
     */
    public function addToWhitelisted(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The whitelisted property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->whitelisted[] = $item;
        
        return $this;
    }
}
