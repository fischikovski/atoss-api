<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPresence StructType
 * Meta information extracted from the WSDL
 * - type: tns:getPresence
 * @subpackage Structs
 */
class GetPresence extends AbstractStructBase
{
    /**
     * The employees
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employees = null;
    /**
     * The timestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The planversion
     * @var int|null
     */
    protected ?int $planversion = null;
    /**
     * The inputoptions
     * @var int|null
     */
    protected ?int $inputoptions = null;
    /**
     * The outputoptions
     * @var int|null
     */
    protected ?int $outputoptions = null;
    /**
     * Constructor method for getPresence
     * @uses GetPresence::setEmployees()
     * @uses GetPresence::setTimestamp()
     * @uses GetPresence::setPlanversion()
     * @uses GetPresence::setInputoptions()
     * @uses GetPresence::setOutputoptions()
     * @param string[] $employees
     * @param string $timestamp
     * @param int $planversion
     * @param int $inputoptions
     * @param int $outputoptions
     */
    public function __construct(?array $employees = null, ?string $timestamp = null, ?int $planversion = null, ?int $inputoptions = null, ?int $outputoptions = null)
    {
        $this
            ->setEmployees($employees)
            ->setTimestamp($timestamp)
            ->setPlanversion($planversion)
            ->setInputoptions($inputoptions)
            ->setOutputoptions($outputoptions);
    }
    /**
     * Get employees value
     * @return string[]
     */
    public function getEmployees(): ?array
    {
        return $this->employees;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployees method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployees method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeesForArrayConstraintsFromSetEmployees(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPresenceEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getPresenceEmployeesItem)) {
                $invalidValues[] = is_object($getPresenceEmployeesItem) ? get_class($getPresenceEmployeesItem) : sprintf('%s(%s)', gettype($getPresenceEmployeesItem), var_export($getPresenceEmployeesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The employees property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set employees value
     * @throws InvalidArgumentException
     * @param string[] $employees
     * @return \Conventus\Atoss\StructType\GetPresence
     */
    public function setEmployees(?array $employees = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeesArrayErrorMessage = self::validateEmployeesForArrayConstraintsFromSetEmployees($employees))) {
            throw new InvalidArgumentException($employeesArrayErrorMessage, __LINE__);
        }
        $this->employees = $employees;
        
        return $this;
    }
    /**
     * Add item to employees value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetPresence
     */
    public function addToEmployees(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The employees property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->employees[] = $item;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Conventus\Atoss\StructType\GetPresence
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get planversion value
     * @return int|null
     */
    public function getPlanversion(): ?int
    {
        return $this->planversion;
    }
    /**
     * Set planversion value
     * @param int $planversion
     * @return \Conventus\Atoss\StructType\GetPresence
     */
    public function setPlanversion(?int $planversion = null): self
    {
        // validation for constraint: int
        if (!is_null($planversion) && !(is_int($planversion) || ctype_digit($planversion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($planversion, true), gettype($planversion)), __LINE__);
        }
        $this->planversion = $planversion;
        
        return $this;
    }
    /**
     * Get inputoptions value
     * @return int|null
     */
    public function getInputoptions(): ?int
    {
        return $this->inputoptions;
    }
    /**
     * Set inputoptions value
     * @param int $inputoptions
     * @return \Conventus\Atoss\StructType\GetPresence
     */
    public function setInputoptions(?int $inputoptions = null): self
    {
        // validation for constraint: int
        if (!is_null($inputoptions) && !(is_int($inputoptions) || ctype_digit($inputoptions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($inputoptions, true), gettype($inputoptions)), __LINE__);
        }
        $this->inputoptions = $inputoptions;
        
        return $this;
    }
    /**
     * Get outputoptions value
     * @return int|null
     */
    public function getOutputoptions(): ?int
    {
        return $this->outputoptions;
    }
    /**
     * Set outputoptions value
     * @param int $outputoptions
     * @return \Conventus\Atoss\StructType\GetPresence
     */
    public function setOutputoptions(?int $outputoptions = null): self
    {
        // validation for constraint: int
        if (!is_null($outputoptions) && !(is_int($outputoptions) || ctype_digit($outputoptions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($outputoptions, true), gettype($outputoptions)), __LINE__);
        }
        $this->outputoptions = $outputoptions;
        
        return $this;
    }
}
