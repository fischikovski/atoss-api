<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getClockinWithCorrelation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getClockinWithCorrelation
 * @subpackage Structs
 */
class GetClockinWithCorrelation extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employee = null;
    /**
     * The firstday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstday = null;
    /**
     * The lastday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastday = null;
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * The cost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cost = null;
    /**
     * The correlationdate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $correlationdate = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fields = null;
    /**
     * Constructor method for getClockinWithCorrelation
     * @uses GetClockinWithCorrelation::setEmployee()
     * @uses GetClockinWithCorrelation::setFirstday()
     * @uses GetClockinWithCorrelation::setLastday()
     * @uses GetClockinWithCorrelation::setProject()
     * @uses GetClockinWithCorrelation::setCost()
     * @uses GetClockinWithCorrelation::setCorrelationdate()
     * @uses GetClockinWithCorrelation::setFields()
     * @param string[] $employee
     * @param string $firstday
     * @param string $lastday
     * @param string $project
     * @param string $cost
     * @param string $correlationdate
     * @param string $fields
     */
    public function __construct(?array $employee = null, ?string $firstday = null, ?string $lastday = null, ?string $project = null, ?string $cost = null, ?string $correlationdate = null, ?string $fields = null)
    {
        $this
            ->setEmployee($employee)
            ->setFirstday($firstday)
            ->setLastday($lastday)
            ->setProject($project)
            ->setCost($cost)
            ->setCorrelationdate($correlationdate)
            ->setFields($fields);
    }
    /**
     * Get employee value
     * @return string[]
     */
    public function getEmployee(): ?array
    {
        return $this->employee;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeForArrayConstraintsFromSetEmployee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getClockinWithCorrelationEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getClockinWithCorrelationEmployeeItem)) {
                $invalidValues[] = is_object($getClockinWithCorrelationEmployeeItem) ? get_class($getClockinWithCorrelationEmployeeItem) : sprintf('%s(%s)', gettype($getClockinWithCorrelationEmployeeItem), var_export($getClockinWithCorrelationEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The employee property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set employee value
     * @throws InvalidArgumentException
     * @param string[] $employee
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setEmployee(?array $employee = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeeArrayErrorMessage = self::validateEmployeeForArrayConstraintsFromSetEmployee($employee))) {
            throw new InvalidArgumentException($employeeArrayErrorMessage, __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
    /**
     * Add item to employee value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function addToEmployee(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The employee property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->employee[] = $item;
        
        return $this;
    }
    /**
     * Get firstday value
     * @return string|null
     */
    public function getFirstday(): ?string
    {
        return $this->firstday;
    }
    /**
     * Set firstday value
     * @param string $firstday
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setFirstday(?string $firstday = null): self
    {
        // validation for constraint: string
        if (!is_null($firstday) && !is_string($firstday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstday, true), gettype($firstday)), __LINE__);
        }
        $this->firstday = $firstday;
        
        return $this;
    }
    /**
     * Get lastday value
     * @return string|null
     */
    public function getLastday(): ?string
    {
        return $this->lastday;
    }
    /**
     * Set lastday value
     * @param string $lastday
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setLastday(?string $lastday = null): self
    {
        // validation for constraint: string
        if (!is_null($lastday) && !is_string($lastday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastday, true), gettype($lastday)), __LINE__);
        }
        $this->lastday = $lastday;
        
        return $this;
    }
    /**
     * Get project value
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->project;
    }
    /**
     * Set project value
     * @param string $project
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setProject(?string $project = null): self
    {
        // validation for constraint: string
        if (!is_null($project) && !is_string($project)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($project, true), gettype($project)), __LINE__);
        }
        $this->project = $project;
        
        return $this;
    }
    /**
     * Get cost value
     * @return string|null
     */
    public function getCost(): ?string
    {
        return $this->cost;
    }
    /**
     * Set cost value
     * @param string $cost
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setCost(?string $cost = null): self
    {
        // validation for constraint: string
        if (!is_null($cost) && !is_string($cost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cost, true), gettype($cost)), __LINE__);
        }
        $this->cost = $cost;
        
        return $this;
    }
    /**
     * Get correlationdate value
     * @return string|null
     */
    public function getCorrelationdate(): ?string
    {
        return $this->correlationdate;
    }
    /**
     * Set correlationdate value
     * @param string $correlationdate
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setCorrelationdate(?string $correlationdate = null): self
    {
        // validation for constraint: string
        if (!is_null($correlationdate) && !is_string($correlationdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationdate, true), gettype($correlationdate)), __LINE__);
        }
        $this->correlationdate = $correlationdate;
        
        return $this;
    }
    /**
     * Get fields value
     * @return string|null
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param string $fields
     * @return \Conventus\Atoss\StructType\GetClockinWithCorrelation
     */
    public function setFields(?string $fields = null): self
    {
        // validation for constraint: string
        if (!is_null($fields) && !is_string($fields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fields, true), gettype($fields)), __LINE__);
        }
        $this->fields = $fields;
        
        return $this;
    }
}
