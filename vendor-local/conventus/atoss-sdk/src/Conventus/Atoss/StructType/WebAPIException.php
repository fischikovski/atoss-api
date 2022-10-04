<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebAPIException StructType
 * Meta information extracted from the WSDL
 * - type: tns:WebAPIException
 * @subpackage Structs
 */
class WebAPIException extends AbstractStructBase
{
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The exceptionDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $exceptionDetails = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The extendedResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $extendedResult = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The errorDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * Constructor method for WebAPIException
     * @uses WebAPIException::setMessage()
     * @uses WebAPIException::setExceptionDetails()
     * @uses WebAPIException::setErrorCode()
     * @uses WebAPIException::setExtendedResult()
     * @uses WebAPIException::setName()
     * @uses WebAPIException::setErrorDescription()
     * @param string $message
     * @param \Conventus\Atoss\StructType\WebPropertyObject $exceptionDetails
     * @param int $errorCode
     * @param int $extendedResult
     * @param string $name
     * @param string $errorDescription
     */
    public function __construct(?string $message = null, ?\Conventus\Atoss\StructType\WebPropertyObject $exceptionDetails = null, ?int $errorCode = null, ?int $extendedResult = null, ?string $name = null, ?string $errorDescription = null)
    {
        $this
            ->setMessage($message)
            ->setExceptionDetails($exceptionDetails)
            ->setErrorCode($errorCode)
            ->setExtendedResult($extendedResult)
            ->setName($name)
            ->setErrorDescription($errorDescription);
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
     * @return \Conventus\Atoss\StructType\WebAPIException
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
     * Get exceptionDetails value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getExceptionDetails(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->exceptionDetails;
    }
    /**
     * Set exceptionDetails value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $exceptionDetails
     * @return \Conventus\Atoss\StructType\WebAPIException
     */
    public function setExceptionDetails(?\Conventus\Atoss\StructType\WebPropertyObject $exceptionDetails = null): self
    {
        $this->exceptionDetails = $exceptionDetails;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Conventus\Atoss\StructType\WebAPIException
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get extendedResult value
     * @return int|null
     */
    public function getExtendedResult(): ?int
    {
        return $this->extendedResult;
    }
    /**
     * Set extendedResult value
     * @param int $extendedResult
     * @return \Conventus\Atoss\StructType\WebAPIException
     */
    public function setExtendedResult(?int $extendedResult = null): self
    {
        // validation for constraint: int
        if (!is_null($extendedResult) && !(is_int($extendedResult) || ctype_digit($extendedResult))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extendedResult, true), gettype($extendedResult)), __LINE__);
        }
        $this->extendedResult = $extendedResult;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Conventus\Atoss\StructType\WebAPIException
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Conventus\Atoss\StructType\WebAPIException
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
}
