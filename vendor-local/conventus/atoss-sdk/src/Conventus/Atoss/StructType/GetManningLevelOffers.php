<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManningLevelOffers StructType
 * Meta information extracted from the WSDL
 * - type: tns:getManningLevelOffers
 * @subpackage Structs
 */
class GetManningLevelOffers extends AbstractStructBase
{
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The states
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $states = null;
    /**
     * The employees
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employees = null;
    /**
     * Constructor method for getManningLevelOffers
     * @uses GetManningLevelOffers::setStartDate()
     * @uses GetManningLevelOffers::setGuid()
     * @uses GetManningLevelOffers::setStates()
     * @uses GetManningLevelOffers::setEmployees()
     * @param string $startDate
     * @param string $guid
     * @param int[] $states
     * @param string[] $employees
     */
    public function __construct(?string $startDate = null, ?string $guid = null, ?array $states = null, ?array $employees = null)
    {
        $this
            ->setStartDate($startDate)
            ->setGuid($guid)
            ->setStates($states)
            ->setEmployees($employees);
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Conventus\Atoss\StructType\GetManningLevelOffers
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \Conventus\Atoss\StructType\GetManningLevelOffers
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get states value
     * @return int[]
     */
    public function getStates(): ?array
    {
        return $this->states;
    }
    /**
     * This method is responsible for validating the values passed to the setStates method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStates method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatesForArrayConstraintsFromSetStates(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getManningLevelOffersStatesItem) {
            // validation for constraint: itemType
            if (!(is_int($getManningLevelOffersStatesItem) || ctype_digit($getManningLevelOffersStatesItem))) {
                $invalidValues[] = is_object($getManningLevelOffersStatesItem) ? get_class($getManningLevelOffersStatesItem) : sprintf('%s(%s)', gettype($getManningLevelOffersStatesItem), var_export($getManningLevelOffersStatesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The states property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set states value
     * @throws InvalidArgumentException
     * @param int[] $states
     * @return \Conventus\Atoss\StructType\GetManningLevelOffers
     */
    public function setStates(?array $states = null): self
    {
        // validation for constraint: array
        if ('' !== ($statesArrayErrorMessage = self::validateStatesForArrayConstraintsFromSetStates($states))) {
            throw new InvalidArgumentException($statesArrayErrorMessage, __LINE__);
        }
        $this->states = $states;
        
        return $this;
    }
    /**
     * Add item to states value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\GetManningLevelOffers
     */
    public function addToStates(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The states property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->states[] = $item;
        
        return $this;
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
        foreach ($values as $getManningLevelOffersEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getManningLevelOffersEmployeesItem)) {
                $invalidValues[] = is_object($getManningLevelOffersEmployeesItem) ? get_class($getManningLevelOffersEmployeesItem) : sprintf('%s(%s)', gettype($getManningLevelOffersEmployeesItem), var_export($getManningLevelOffersEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetManningLevelOffers
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
     * @return \Conventus\Atoss\StructType\GetManningLevelOffers
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
}
