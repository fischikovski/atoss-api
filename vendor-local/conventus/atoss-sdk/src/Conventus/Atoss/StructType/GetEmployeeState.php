<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEmployeeState StructType
 * Meta information extracted from the WSDL
 * - type: tns:getEmployeeState
 * @subpackage Structs
 */
class GetEmployeeState extends AbstractStructBase
{
    /**
     * The scenario
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $scenario = null;
    /**
     * The employees
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employees = null;
    /**
     * The time
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $time = null;
    /**
     * The kindofinformation
     * @var int|null
     */
    protected ?int $kindofinformation = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * Constructor method for getEmployeeState
     * @uses GetEmployeeState::setScenario()
     * @uses GetEmployeeState::setEmployees()
     * @uses GetEmployeeState::setTime()
     * @uses GetEmployeeState::setKindofinformation()
     * @uses GetEmployeeState::setVersion()
     * @param string $scenario
     * @param string[] $employees
     * @param string $time
     * @param int $kindofinformation
     * @param int $version
     */
    public function __construct(?string $scenario = null, ?array $employees = null, ?string $time = null, ?int $kindofinformation = null, ?int $version = null)
    {
        $this
            ->setScenario($scenario)
            ->setEmployees($employees)
            ->setTime($time)
            ->setKindofinformation($kindofinformation)
            ->setVersion($version);
    }
    /**
     * Get scenario value
     * @return string|null
     */
    public function getScenario(): ?string
    {
        return $this->scenario;
    }
    /**
     * Set scenario value
     * @param string $scenario
     * @return \Conventus\Atoss\StructType\GetEmployeeState
     */
    public function setScenario(?string $scenario = null): self
    {
        // validation for constraint: string
        if (!is_null($scenario) && !is_string($scenario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scenario, true), gettype($scenario)), __LINE__);
        }
        $this->scenario = $scenario;
        
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
        foreach ($values as $getEmployeeStateEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getEmployeeStateEmployeesItem)) {
                $invalidValues[] = is_object($getEmployeeStateEmployeesItem) ? get_class($getEmployeeStateEmployeesItem) : sprintf('%s(%s)', gettype($getEmployeeStateEmployeesItem), var_export($getEmployeeStateEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetEmployeeState
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
     * @return \Conventus\Atoss\StructType\GetEmployeeState
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
     * Get time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Conventus\Atoss\StructType\GetEmployeeState
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        
        return $this;
    }
    /**
     * Get kindofinformation value
     * @return int|null
     */
    public function getKindofinformation(): ?int
    {
        return $this->kindofinformation;
    }
    /**
     * Set kindofinformation value
     * @param int $kindofinformation
     * @return \Conventus\Atoss\StructType\GetEmployeeState
     */
    public function setKindofinformation(?int $kindofinformation = null): self
    {
        // validation for constraint: int
        if (!is_null($kindofinformation) && !(is_int($kindofinformation) || ctype_digit($kindofinformation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kindofinformation, true), gettype($kindofinformation)), __LINE__);
        }
        $this->kindofinformation = $kindofinformation;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Conventus\Atoss\StructType\GetEmployeeState
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
