<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlannings StructType
 * Meta information extracted from the WSDL
 * - type: tns:getPlannings
 * @subpackage Structs
 */
class GetPlannings extends AbstractStructBase
{
    /**
     * The datefrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datefrom = null;
    /**
     * The dateto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateto = null;
    /**
     * The timefrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timefrom = null;
    /**
     * The timeto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeto = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The workplaces
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $workplaces = null;
    /**
     * The employees
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employees = null;
    /**
     * The guids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $guids = null;
    /**
     * The mguids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $mguids = null;
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
     * Constructor method for getPlannings
     * @uses GetPlannings::setDatefrom()
     * @uses GetPlannings::setDateto()
     * @uses GetPlannings::setTimefrom()
     * @uses GetPlannings::setTimeto()
     * @uses GetPlannings::setVersion()
     * @uses GetPlannings::setWorkplaces()
     * @uses GetPlannings::setEmployees()
     * @uses GetPlannings::setGuids()
     * @uses GetPlannings::setMguids()
     * @uses GetPlannings::setFields()
     * @uses GetPlannings::setFilter()
     * @uses GetPlannings::setOrder()
     * @param string $datefrom
     * @param string $dateto
     * @param string $timefrom
     * @param string $timeto
     * @param int $version
     * @param string[] $workplaces
     * @param string[] $employees
     * @param string[] $guids
     * @param string[] $mguids
     * @param string $fields
     * @param string $filter
     * @param string $order
     */
    public function __construct(?string $datefrom = null, ?string $dateto = null, ?string $timefrom = null, ?string $timeto = null, ?int $version = null, ?array $workplaces = null, ?array $employees = null, ?array $guids = null, ?array $mguids = null, ?string $fields = null, ?string $filter = null, ?string $order = null)
    {
        $this
            ->setDatefrom($datefrom)
            ->setDateto($dateto)
            ->setTimefrom($timefrom)
            ->setTimeto($timeto)
            ->setVersion($version)
            ->setWorkplaces($workplaces)
            ->setEmployees($employees)
            ->setGuids($guids)
            ->setMguids($mguids)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order);
    }
    /**
     * Get datefrom value
     * @return string|null
     */
    public function getDatefrom(): ?string
    {
        return $this->datefrom;
    }
    /**
     * Set datefrom value
     * @param string $datefrom
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setDatefrom(?string $datefrom = null): self
    {
        // validation for constraint: string
        if (!is_null($datefrom) && !is_string($datefrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datefrom, true), gettype($datefrom)), __LINE__);
        }
        $this->datefrom = $datefrom;
        
        return $this;
    }
    /**
     * Get dateto value
     * @return string|null
     */
    public function getDateto(): ?string
    {
        return $this->dateto;
    }
    /**
     * Set dateto value
     * @param string $dateto
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setDateto(?string $dateto = null): self
    {
        // validation for constraint: string
        if (!is_null($dateto) && !is_string($dateto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateto, true), gettype($dateto)), __LINE__);
        }
        $this->dateto = $dateto;
        
        return $this;
    }
    /**
     * Get timefrom value
     * @return string|null
     */
    public function getTimefrom(): ?string
    {
        return $this->timefrom;
    }
    /**
     * Set timefrom value
     * @param string $timefrom
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setTimefrom(?string $timefrom = null): self
    {
        // validation for constraint: string
        if (!is_null($timefrom) && !is_string($timefrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timefrom, true), gettype($timefrom)), __LINE__);
        }
        $this->timefrom = $timefrom;
        
        return $this;
    }
    /**
     * Get timeto value
     * @return string|null
     */
    public function getTimeto(): ?string
    {
        return $this->timeto;
    }
    /**
     * Set timeto value
     * @param string $timeto
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setTimeto(?string $timeto = null): self
    {
        // validation for constraint: string
        if (!is_null($timeto) && !is_string($timeto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeto, true), gettype($timeto)), __LINE__);
        }
        $this->timeto = $timeto;
        
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
     * @return \Conventus\Atoss\StructType\GetPlannings
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
    /**
     * Get workplaces value
     * @return string[]
     */
    public function getWorkplaces(): ?array
    {
        return $this->workplaces;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkplaces method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkplaces method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkplacesForArrayConstraintsFromSetWorkplaces(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlanningsWorkplacesItem) {
            // validation for constraint: itemType
            if (!is_string($getPlanningsWorkplacesItem)) {
                $invalidValues[] = is_object($getPlanningsWorkplacesItem) ? get_class($getPlanningsWorkplacesItem) : sprintf('%s(%s)', gettype($getPlanningsWorkplacesItem), var_export($getPlanningsWorkplacesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The workplaces property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set workplaces value
     * @throws InvalidArgumentException
     * @param string[] $workplaces
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setWorkplaces(?array $workplaces = null): self
    {
        // validation for constraint: array
        if ('' !== ($workplacesArrayErrorMessage = self::validateWorkplacesForArrayConstraintsFromSetWorkplaces($workplaces))) {
            throw new InvalidArgumentException($workplacesArrayErrorMessage, __LINE__);
        }
        $this->workplaces = $workplaces;
        
        return $this;
    }
    /**
     * Add item to workplaces value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function addToWorkplaces(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The workplaces property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->workplaces[] = $item;
        
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
        foreach ($values as $getPlanningsEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getPlanningsEmployeesItem)) {
                $invalidValues[] = is_object($getPlanningsEmployeesItem) ? get_class($getPlanningsEmployeesItem) : sprintf('%s(%s)', gettype($getPlanningsEmployeesItem), var_export($getPlanningsEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetPlannings
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
     * @return \Conventus\Atoss\StructType\GetPlannings
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
     * Get guids value
     * @return string[]
     */
    public function getGuids(): ?array
    {
        return $this->guids;
    }
    /**
     * This method is responsible for validating the values passed to the setGuids method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGuids method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGuidsForArrayConstraintsFromSetGuids(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlanningsGuidsItem) {
            // validation for constraint: itemType
            if (!is_string($getPlanningsGuidsItem)) {
                $invalidValues[] = is_object($getPlanningsGuidsItem) ? get_class($getPlanningsGuidsItem) : sprintf('%s(%s)', gettype($getPlanningsGuidsItem), var_export($getPlanningsGuidsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The guids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set guids value
     * @throws InvalidArgumentException
     * @param string[] $guids
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setGuids(?array $guids = null): self
    {
        // validation for constraint: array
        if ('' !== ($guidsArrayErrorMessage = self::validateGuidsForArrayConstraintsFromSetGuids($guids))) {
            throw new InvalidArgumentException($guidsArrayErrorMessage, __LINE__);
        }
        $this->guids = $guids;
        
        return $this;
    }
    /**
     * Add item to guids value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function addToGuids(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The guids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->guids[] = $item;
        
        return $this;
    }
    /**
     * Get mguids value
     * @return string[]
     */
    public function getMguids(): ?array
    {
        return $this->mguids;
    }
    /**
     * This method is responsible for validating the values passed to the setMguids method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMguids method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMguidsForArrayConstraintsFromSetMguids(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlanningsMguidsItem) {
            // validation for constraint: itemType
            if (!is_string($getPlanningsMguidsItem)) {
                $invalidValues[] = is_object($getPlanningsMguidsItem) ? get_class($getPlanningsMguidsItem) : sprintf('%s(%s)', gettype($getPlanningsMguidsItem), var_export($getPlanningsMguidsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mguids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mguids value
     * @throws InvalidArgumentException
     * @param string[] $mguids
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function setMguids(?array $mguids = null): self
    {
        // validation for constraint: array
        if ('' !== ($mguidsArrayErrorMessage = self::validateMguidsForArrayConstraintsFromSetMguids($mguids))) {
            throw new InvalidArgumentException($mguidsArrayErrorMessage, __LINE__);
        }
        $this->mguids = $mguids;
        
        return $this;
    }
    /**
     * Add item to mguids value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetPlannings
     */
    public function addToMguids(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mguids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mguids[] = $item;
        
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
     * @return \Conventus\Atoss\StructType\GetPlannings
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
     * @return \Conventus\Atoss\StructType\GetPlannings
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
     * @return \Conventus\Atoss\StructType\GetPlannings
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
