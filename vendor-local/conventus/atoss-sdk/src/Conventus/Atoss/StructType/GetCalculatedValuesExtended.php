<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCalculatedValuesExtended StructType
 * Meta information extracted from the WSDL
 * - type: tns:getCalculatedValuesExtended
 * @subpackage Structs
 */
class GetCalculatedValuesExtended extends AbstractStructBase
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
     * The costcenters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $costcenters = null;
    /**
     * The projects
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $projects = null;
    /**
     * The workplaces
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $workplaces = null;
    /**
     * The excludeguids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $excludeguids = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The calculatedvalue
     * @var int|null
     */
    protected ?int $calculatedvalue = null;
    /**
     * The from
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The includecosts
     * @var bool|null
     */
    protected ?bool $includecosts = null;
    /**
     * The costcenterprojectaggregation
     * @var bool|null
     */
    protected ?bool $costcenterprojectaggregation = null;
    /**
     * The groupby
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $groupby = null;
    /**
     * Constructor method for getCalculatedValuesExtended
     * @uses GetCalculatedValuesExtended::setEmployees()
     * @uses GetCalculatedValuesExtended::setCostcenters()
     * @uses GetCalculatedValuesExtended::setProjects()
     * @uses GetCalculatedValuesExtended::setWorkplaces()
     * @uses GetCalculatedValuesExtended::setExcludeguids()
     * @uses GetCalculatedValuesExtended::setType()
     * @uses GetCalculatedValuesExtended::setCalculatedvalue()
     * @uses GetCalculatedValuesExtended::setFrom()
     * @uses GetCalculatedValuesExtended::setTo()
     * @uses GetCalculatedValuesExtended::setIncludecosts()
     * @uses GetCalculatedValuesExtended::setCostcenterprojectaggregation()
     * @uses GetCalculatedValuesExtended::setGroupby()
     * @param string[] $employees
     * @param string[] $costcenters
     * @param string[] $projects
     * @param string[] $workplaces
     * @param string[] $excludeguids
     * @param int $type
     * @param int $calculatedvalue
     * @param string $from
     * @param string $to
     * @param bool $includecosts
     * @param bool $costcenterprojectaggregation
     * @param string[] $groupby
     */
    public function __construct(?array $employees = null, ?array $costcenters = null, ?array $projects = null, ?array $workplaces = null, ?array $excludeguids = null, ?int $type = null, ?int $calculatedvalue = null, ?string $from = null, ?string $to = null, ?bool $includecosts = null, ?bool $costcenterprojectaggregation = null, ?array $groupby = null)
    {
        $this
            ->setEmployees($employees)
            ->setCostcenters($costcenters)
            ->setProjects($projects)
            ->setWorkplaces($workplaces)
            ->setExcludeguids($excludeguids)
            ->setType($type)
            ->setCalculatedvalue($calculatedvalue)
            ->setFrom($from)
            ->setTo($to)
            ->setIncludecosts($includecosts)
            ->setCostcenterprojectaggregation($costcenterprojectaggregation)
            ->setGroupby($groupby);
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
        foreach ($values as $getCalculatedValuesExtendedEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValuesExtendedEmployeesItem)) {
                $invalidValues[] = is_object($getCalculatedValuesExtendedEmployeesItem) ? get_class($getCalculatedValuesExtendedEmployeesItem) : sprintf('%s(%s)', gettype($getCalculatedValuesExtendedEmployeesItem), var_export($getCalculatedValuesExtendedEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
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
     * Get costcenters value
     * @return string[]
     */
    public function getCostcenters(): ?array
    {
        return $this->costcenters;
    }
    /**
     * This method is responsible for validating the values passed to the setCostcenters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCostcenters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCostcentersForArrayConstraintsFromSetCostcenters(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCalculatedValuesExtendedCostcentersItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValuesExtendedCostcentersItem)) {
                $invalidValues[] = is_object($getCalculatedValuesExtendedCostcentersItem) ? get_class($getCalculatedValuesExtendedCostcentersItem) : sprintf('%s(%s)', gettype($getCalculatedValuesExtendedCostcentersItem), var_export($getCalculatedValuesExtendedCostcentersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The costcenters property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set costcenters value
     * @throws InvalidArgumentException
     * @param string[] $costcenters
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setCostcenters(?array $costcenters = null): self
    {
        // validation for constraint: array
        if ('' !== ($costcentersArrayErrorMessage = self::validateCostcentersForArrayConstraintsFromSetCostcenters($costcenters))) {
            throw new InvalidArgumentException($costcentersArrayErrorMessage, __LINE__);
        }
        $this->costcenters = $costcenters;
        
        return $this;
    }
    /**
     * Add item to costcenters value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function addToCostcenters(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The costcenters property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->costcenters[] = $item;
        
        return $this;
    }
    /**
     * Get projects value
     * @return string[]
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }
    /**
     * This method is responsible for validating the values passed to the setProjects method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProjects method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProjectsForArrayConstraintsFromSetProjects(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCalculatedValuesExtendedProjectsItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValuesExtendedProjectsItem)) {
                $invalidValues[] = is_object($getCalculatedValuesExtendedProjectsItem) ? get_class($getCalculatedValuesExtendedProjectsItem) : sprintf('%s(%s)', gettype($getCalculatedValuesExtendedProjectsItem), var_export($getCalculatedValuesExtendedProjectsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The projects property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set projects value
     * @throws InvalidArgumentException
     * @param string[] $projects
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setProjects(?array $projects = null): self
    {
        // validation for constraint: array
        if ('' !== ($projectsArrayErrorMessage = self::validateProjectsForArrayConstraintsFromSetProjects($projects))) {
            throw new InvalidArgumentException($projectsArrayErrorMessage, __LINE__);
        }
        $this->projects = $projects;
        
        return $this;
    }
    /**
     * Add item to projects value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function addToProjects(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The projects property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->projects[] = $item;
        
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
        foreach ($values as $getCalculatedValuesExtendedWorkplacesItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValuesExtendedWorkplacesItem)) {
                $invalidValues[] = is_object($getCalculatedValuesExtendedWorkplacesItem) ? get_class($getCalculatedValuesExtendedWorkplacesItem) : sprintf('%s(%s)', gettype($getCalculatedValuesExtendedWorkplacesItem), var_export($getCalculatedValuesExtendedWorkplacesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
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
     * Get excludeguids value
     * @return string[]
     */
    public function getExcludeguids(): ?array
    {
        return $this->excludeguids;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeguids method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeguids method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeguidsForArrayConstraintsFromSetExcludeguids(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCalculatedValuesExtendedExcludeguidsItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValuesExtendedExcludeguidsItem)) {
                $invalidValues[] = is_object($getCalculatedValuesExtendedExcludeguidsItem) ? get_class($getCalculatedValuesExtendedExcludeguidsItem) : sprintf('%s(%s)', gettype($getCalculatedValuesExtendedExcludeguidsItem), var_export($getCalculatedValuesExtendedExcludeguidsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The excludeguids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set excludeguids value
     * @throws InvalidArgumentException
     * @param string[] $excludeguids
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setExcludeguids(?array $excludeguids = null): self
    {
        // validation for constraint: array
        if ('' !== ($excludeguidsArrayErrorMessage = self::validateExcludeguidsForArrayConstraintsFromSetExcludeguids($excludeguids))) {
            throw new InvalidArgumentException($excludeguidsArrayErrorMessage, __LINE__);
        }
        $this->excludeguids = $excludeguids;
        
        return $this;
    }
    /**
     * Add item to excludeguids value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function addToExcludeguids(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The excludeguids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->excludeguids[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get calculatedvalue value
     * @return int|null
     */
    public function getCalculatedvalue(): ?int
    {
        return $this->calculatedvalue;
    }
    /**
     * Set calculatedvalue value
     * @param int $calculatedvalue
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setCalculatedvalue(?int $calculatedvalue = null): self
    {
        // validation for constraint: int
        if (!is_null($calculatedvalue) && !(is_int($calculatedvalue) || ctype_digit($calculatedvalue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($calculatedvalue, true), gettype($calculatedvalue)), __LINE__);
        }
        $this->calculatedvalue = $calculatedvalue;
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
    /**
     * Get includecosts value
     * @return bool|null
     */
    public function getIncludecosts(): ?bool
    {
        return $this->includecosts;
    }
    /**
     * Set includecosts value
     * @param bool $includecosts
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setIncludecosts(?bool $includecosts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includecosts) && !is_bool($includecosts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includecosts, true), gettype($includecosts)), __LINE__);
        }
        $this->includecosts = $includecosts;
        
        return $this;
    }
    /**
     * Get costcenterprojectaggregation value
     * @return bool|null
     */
    public function getCostcenterprojectaggregation(): ?bool
    {
        return $this->costcenterprojectaggregation;
    }
    /**
     * Set costcenterprojectaggregation value
     * @param bool $costcenterprojectaggregation
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setCostcenterprojectaggregation(?bool $costcenterprojectaggregation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($costcenterprojectaggregation) && !is_bool($costcenterprojectaggregation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($costcenterprojectaggregation, true), gettype($costcenterprojectaggregation)), __LINE__);
        }
        $this->costcenterprojectaggregation = $costcenterprojectaggregation;
        
        return $this;
    }
    /**
     * Get groupby value
     * @return string[]
     */
    public function getGroupby(): ?array
    {
        return $this->groupby;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupby method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupby method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupbyForArrayConstraintsFromSetGroupby(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCalculatedValuesExtendedGroupbyItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValuesExtendedGroupbyItem)) {
                $invalidValues[] = is_object($getCalculatedValuesExtendedGroupbyItem) ? get_class($getCalculatedValuesExtendedGroupbyItem) : sprintf('%s(%s)', gettype($getCalculatedValuesExtendedGroupbyItem), var_export($getCalculatedValuesExtendedGroupbyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The groupby property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set groupby value
     * @throws InvalidArgumentException
     * @param string[] $groupby
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function setGroupby(?array $groupby = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupbyArrayErrorMessage = self::validateGroupbyForArrayConstraintsFromSetGroupby($groupby))) {
            throw new InvalidArgumentException($groupbyArrayErrorMessage, __LINE__);
        }
        $this->groupby = $groupby;
        
        return $this;
    }
    /**
     * Add item to groupby value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetCalculatedValuesExtended
     */
    public function addToGroupby(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The groupby property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->groupby[] = $item;
        
        return $this;
    }
}
