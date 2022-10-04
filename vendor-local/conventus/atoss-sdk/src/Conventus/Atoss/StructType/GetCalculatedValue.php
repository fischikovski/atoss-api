<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCalculatedValue StructType
 * Meta information extracted from the WSDL
 * - type: tns:getCalculatedValue
 * @subpackage Structs
 */
class GetCalculatedValue extends AbstractStructBase
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
     * The options
     * @var int|null
     */
    protected ?int $options = null;
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
     * Constructor method for getCalculatedValue
     * @uses GetCalculatedValue::setEmployees()
     * @uses GetCalculatedValue::setCalculatedvalue()
     * @uses GetCalculatedValue::setFrom()
     * @uses GetCalculatedValue::setTo()
     * @uses GetCalculatedValue::setOptions()
     * @uses GetCalculatedValue::setWorkplaces()
     * @uses GetCalculatedValue::setExcludeguids()
     * @param string[] $employees
     * @param int $calculatedvalue
     * @param string $from
     * @param string $to
     * @param int $options
     * @param string[] $workplaces
     * @param string[] $excludeguids
     */
    public function __construct(?array $employees = null, ?int $calculatedvalue = null, ?string $from = null, ?string $to = null, ?int $options = null, ?array $workplaces = null, ?array $excludeguids = null)
    {
        $this
            ->setEmployees($employees)
            ->setCalculatedvalue($calculatedvalue)
            ->setFrom($from)
            ->setTo($to)
            ->setOptions($options)
            ->setWorkplaces($workplaces)
            ->setExcludeguids($excludeguids);
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
        foreach ($values as $getCalculatedValueEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValueEmployeesItem)) {
                $invalidValues[] = is_object($getCalculatedValueEmployeesItem) ? get_class($getCalculatedValueEmployeesItem) : sprintf('%s(%s)', gettype($getCalculatedValueEmployeesItem), var_export($getCalculatedValueEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
        foreach ($values as $getCalculatedValueWorkplacesItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValueWorkplacesItem)) {
                $invalidValues[] = is_object($getCalculatedValueWorkplacesItem) ? get_class($getCalculatedValueWorkplacesItem) : sprintf('%s(%s)', gettype($getCalculatedValueWorkplacesItem), var_export($getCalculatedValueWorkplacesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
        foreach ($values as $getCalculatedValueExcludeguidsItem) {
            // validation for constraint: itemType
            if (!is_string($getCalculatedValueExcludeguidsItem)) {
                $invalidValues[] = is_object($getCalculatedValueExcludeguidsItem) ? get_class($getCalculatedValueExcludeguidsItem) : sprintf('%s(%s)', gettype($getCalculatedValueExcludeguidsItem), var_export($getCalculatedValueExcludeguidsItem, true));
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
     * @return \Conventus\Atoss\StructType\GetCalculatedValue
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
}
