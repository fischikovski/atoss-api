<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBookings StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBookings
 * @subpackage Structs
 */
class GetBookings extends AbstractStructBase
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
     * The respectoffset
     * @var int|null
     */
    protected ?int $respectoffset = null;
    /**
     * The accounts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $accounts = null;
    /**
     * The projects
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $projects = null;
    /**
     * The costs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $costs = null;
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
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * Constructor method for getBookings
     * @uses GetBookings::setEmployees()
     * @uses GetBookings::setFirstday()
     * @uses GetBookings::setLastday()
     * @uses GetBookings::setRespectoffset()
     * @uses GetBookings::setAccounts()
     * @uses GetBookings::setProjects()
     * @uses GetBookings::setCosts()
     * @uses GetBookings::setFields()
     * @uses GetBookings::setFilter()
     * @uses GetBookings::setOrder()
     * @uses GetBookings::setOptions()
     * @param string[] $employees
     * @param string $firstday
     * @param string $lastday
     * @param int $respectoffset
     * @param int[] $accounts
     * @param string[] $projects
     * @param string[] $costs
     * @param string $fields
     * @param string $filter
     * @param string $order
     * @param int $options
     */
    public function __construct(?array $employees = null, ?string $firstday = null, ?string $lastday = null, ?int $respectoffset = null, ?array $accounts = null, ?array $projects = null, ?array $costs = null, ?string $fields = null, ?string $filter = null, ?string $order = null, ?int $options = null)
    {
        $this
            ->setEmployees($employees)
            ->setFirstday($firstday)
            ->setLastday($lastday)
            ->setRespectoffset($respectoffset)
            ->setAccounts($accounts)
            ->setProjects($projects)
            ->setCosts($costs)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order)
            ->setOptions($options);
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
        foreach ($values as $getBookingsEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getBookingsEmployeesItem)) {
                $invalidValues[] = is_object($getBookingsEmployeesItem) ? get_class($getBookingsEmployeesItem) : sprintf('%s(%s)', gettype($getBookingsEmployeesItem), var_export($getBookingsEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * Get respectoffset value
     * @return int|null
     */
    public function getRespectoffset(): ?int
    {
        return $this->respectoffset;
    }
    /**
     * Set respectoffset value
     * @param int $respectoffset
     * @return \Conventus\Atoss\StructType\GetBookings
     */
    public function setRespectoffset(?int $respectoffset = null): self
    {
        // validation for constraint: int
        if (!is_null($respectoffset) && !(is_int($respectoffset) || ctype_digit($respectoffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($respectoffset, true), gettype($respectoffset)), __LINE__);
        }
        $this->respectoffset = $respectoffset;
        
        return $this;
    }
    /**
     * Get accounts value
     * @return int[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }
    /**
     * This method is responsible for validating the values passed to the setAccounts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccounts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountsForArrayConstraintsFromSetAccounts(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingsAccountsItem) {
            // validation for constraint: itemType
            if (!(is_int($getBookingsAccountsItem) || ctype_digit($getBookingsAccountsItem))) {
                $invalidValues[] = is_object($getBookingsAccountsItem) ? get_class($getBookingsAccountsItem) : sprintf('%s(%s)', gettype($getBookingsAccountsItem), var_export($getBookingsAccountsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accounts property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accounts value
     * @throws InvalidArgumentException
     * @param int[] $accounts
     * @return \Conventus\Atoss\StructType\GetBookings
     */
    public function setAccounts(?array $accounts = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountsArrayErrorMessage = self::validateAccountsForArrayConstraintsFromSetAccounts($accounts))) {
            throw new InvalidArgumentException($accountsArrayErrorMessage, __LINE__);
        }
        $this->accounts = $accounts;
        
        return $this;
    }
    /**
     * Add item to accounts value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\GetBookings
     */
    public function addToAccounts(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The accounts property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accounts[] = $item;
        
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
        foreach ($values as $getBookingsProjectsItem) {
            // validation for constraint: itemType
            if (!is_string($getBookingsProjectsItem)) {
                $invalidValues[] = is_object($getBookingsProjectsItem) ? get_class($getBookingsProjectsItem) : sprintf('%s(%s)', gettype($getBookingsProjectsItem), var_export($getBookingsProjectsItem, true));
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * Get costs value
     * @return string[]
     */
    public function getCosts(): ?array
    {
        return $this->costs;
    }
    /**
     * This method is responsible for validating the values passed to the setCosts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCosts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCostsForArrayConstraintsFromSetCosts(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingsCostsItem) {
            // validation for constraint: itemType
            if (!is_string($getBookingsCostsItem)) {
                $invalidValues[] = is_object($getBookingsCostsItem) ? get_class($getBookingsCostsItem) : sprintf('%s(%s)', gettype($getBookingsCostsItem), var_export($getBookingsCostsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The costs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set costs value
     * @throws InvalidArgumentException
     * @param string[] $costs
     * @return \Conventus\Atoss\StructType\GetBookings
     */
    public function setCosts(?array $costs = null): self
    {
        // validation for constraint: array
        if ('' !== ($costsArrayErrorMessage = self::validateCostsForArrayConstraintsFromSetCosts($costs))) {
            throw new InvalidArgumentException($costsArrayErrorMessage, __LINE__);
        }
        $this->costs = $costs;
        
        return $this;
    }
    /**
     * Add item to costs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetBookings
     */
    public function addToCosts(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The costs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->costs[] = $item;
        
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
     * @return \Conventus\Atoss\StructType\GetBookings
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
    /**
     * Get options value
     * @return int|null
     */
    public function getOptions(): ?int
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param int $options
     * @return \Conventus\Atoss\StructType\GetBookings
     */
    public function setOptions(?int $options = null): self
    {
        // validation for constraint: int
        if (!is_null($options) && !(is_int($options) || ctype_digit($options))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($options, true), gettype($options)), __LINE__);
        }
        $this->options = $options;
        
        return $this;
    }
}
