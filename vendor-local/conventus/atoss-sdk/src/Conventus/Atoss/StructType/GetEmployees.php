<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEmployees StructType
 * Meta information extracted from the WSDL
 * - type: tns:getEmployees
 * @subpackage Structs
 */
class GetEmployees extends AbstractStructBase
{
    /**
     * The group
     * @var int|null
     */
    protected ?int $group = null;
    /**
     * The right
     * @var int|null
     */
    protected ?int $right = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employee = null;
    /**
     * The empgroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $empgroup = null;
    /**
     * The department
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $department = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fields = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $order = null;
    /**
     * Constructor method for getEmployees
     * @uses GetEmployees::setGroup()
     * @uses GetEmployees::setRight()
     * @uses GetEmployees::setEmployee()
     * @uses GetEmployees::setEmpgroup()
     * @uses GetEmployees::setDepartment()
     * @uses GetEmployees::setFields()
     * @uses GetEmployees::setFilter()
     * @uses GetEmployees::setOrder()
     * @param int $group
     * @param int $right
     * @param string[] $employee
     * @param int[] $empgroup
     * @param int[] $department
     * @param string $fields
     * @param string $filter
     * @param string $order
     */
    public function __construct(?int $group = null, ?int $right = null, ?array $employee = null, ?array $empgroup = null, ?array $department = null, ?string $fields = null, ?string $filter = null, ?string $order = null)
    {
        $this
            ->setGroup($group)
            ->setRight($right)
            ->setEmployee($employee)
            ->setEmpgroup($empgroup)
            ->setDepartment($department)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order);
    }
    /**
     * Get group value
     * @return int|null
     */
    public function getGroup(): ?int
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param int $group
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function setGroup(?int $group = null): self
    {
        // validation for constraint: int
        if (!is_null($group) && !(is_int($group) || ctype_digit($group))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        
        return $this;
    }
    /**
     * Get right value
     * @return int|null
     */
    public function getRight(): ?int
    {
        return $this->right;
    }
    /**
     * Set right value
     * @param int $right
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function setRight(?int $right = null): self
    {
        // validation for constraint: int
        if (!is_null($right) && !(is_int($right) || ctype_digit($right))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($right, true), gettype($right)), __LINE__);
        }
        $this->right = $right;
        
        return $this;
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
        foreach ($values as $getEmployeesEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getEmployeesEmployeeItem)) {
                $invalidValues[] = is_object($getEmployeesEmployeeItem) ? get_class($getEmployeesEmployeeItem) : sprintf('%s(%s)', gettype($getEmployeesEmployeeItem), var_export($getEmployeesEmployeeItem, true));
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
     * @return \Conventus\Atoss\StructType\GetEmployees
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
     * @return \Conventus\Atoss\StructType\GetEmployees
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
     * Get empgroup value
     * @return int[]
     */
    public function getEmpgroup(): ?array
    {
        return $this->empgroup;
    }
    /**
     * This method is responsible for validating the values passed to the setEmpgroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmpgroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmpgroupForArrayConstraintsFromSetEmpgroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEmployeesEmpgroupItem) {
            // validation for constraint: itemType
            if (!(is_int($getEmployeesEmpgroupItem) || ctype_digit($getEmployeesEmpgroupItem))) {
                $invalidValues[] = is_object($getEmployeesEmpgroupItem) ? get_class($getEmployeesEmpgroupItem) : sprintf('%s(%s)', gettype($getEmployeesEmpgroupItem), var_export($getEmployeesEmpgroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The empgroup property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set empgroup value
     * @throws InvalidArgumentException
     * @param int[] $empgroup
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function setEmpgroup(?array $empgroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($empgroupArrayErrorMessage = self::validateEmpgroupForArrayConstraintsFromSetEmpgroup($empgroup))) {
            throw new InvalidArgumentException($empgroupArrayErrorMessage, __LINE__);
        }
        $this->empgroup = $empgroup;
        
        return $this;
    }
    /**
     * Add item to empgroup value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function addToEmpgroup(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The empgroup property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->empgroup[] = $item;
        
        return $this;
    }
    /**
     * Get department value
     * @return int[]
     */
    public function getDepartment(): ?array
    {
        return $this->department;
    }
    /**
     * This method is responsible for validating the values passed to the setDepartment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepartment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDepartmentForArrayConstraintsFromSetDepartment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEmployeesDepartmentItem) {
            // validation for constraint: itemType
            if (!(is_int($getEmployeesDepartmentItem) || ctype_digit($getEmployeesDepartmentItem))) {
                $invalidValues[] = is_object($getEmployeesDepartmentItem) ? get_class($getEmployeesDepartmentItem) : sprintf('%s(%s)', gettype($getEmployeesDepartmentItem), var_export($getEmployeesDepartmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The department property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set department value
     * @throws InvalidArgumentException
     * @param int[] $department
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function setDepartment(?array $department = null): self
    {
        // validation for constraint: array
        if ('' !== ($departmentArrayErrorMessage = self::validateDepartmentForArrayConstraintsFromSetDepartment($department))) {
            throw new InvalidArgumentException($departmentArrayErrorMessage, __LINE__);
        }
        $this->department = $department;
        
        return $this;
    }
    /**
     * Add item to department value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function addToDepartment(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The department property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->department[] = $item;
        
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
     * @return \Conventus\Atoss\StructType\GetEmployees
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
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function setFilter(?string $filter = null): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        
        return $this;
    }
    /**
     * Get order value
     * @return string|null
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param string $order
     * @return \Conventus\Atoss\StructType\GetEmployees
     */
    public function setOrder(?string $order = null): self
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        
        return $this;
    }
}
