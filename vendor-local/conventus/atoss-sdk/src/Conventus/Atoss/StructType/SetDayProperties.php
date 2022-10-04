<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setDayProperties StructType
 * Meta information extracted from the WSDL
 * - type: tns:setDayProperties
 * @subpackage Structs
 */
class SetDayProperties extends AbstractStructBase
{
    /**
     * The calendar
     * @var int|null
     */
    protected ?int $calendar = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The startdate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startdate = null;
    /**
     * The enddate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $enddate = null;
    /**
     * The operation
     * @var int|null
     */
    protected ?int $operation = null;
    /**
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * The dayofweeklist
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $dayofweeklist = null;
    /**
     * The dayproperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $dayproperties = null;
    /**
     * Constructor method for setDayProperties
     * @uses SetDayProperties::setCalendar()
     * @uses SetDayProperties::setKey()
     * @uses SetDayProperties::setStartdate()
     * @uses SetDayProperties::setEnddate()
     * @uses SetDayProperties::setOperation()
     * @uses SetDayProperties::setOptions()
     * @uses SetDayProperties::setDayofweeklist()
     * @uses SetDayProperties::setDayproperties()
     * @param int $calendar
     * @param string $key
     * @param string $startdate
     * @param string $enddate
     * @param int $operation
     * @param int $options
     * @param int[] $dayofweeklist
     * @param \Conventus\Atoss\StructType\WebPropertyObject $dayproperties
     */
    public function __construct(?int $calendar = null, ?string $key = null, ?string $startdate = null, ?string $enddate = null, ?int $operation = null, ?int $options = null, ?array $dayofweeklist = null, ?\Conventus\Atoss\StructType\WebPropertyObject $dayproperties = null)
    {
        $this
            ->setCalendar($calendar)
            ->setKey($key)
            ->setStartdate($startdate)
            ->setEnddate($enddate)
            ->setOperation($operation)
            ->setOptions($options)
            ->setDayofweeklist($dayofweeklist)
            ->setDayproperties($dayproperties);
    }
    /**
     * Get calendar value
     * @return int|null
     */
    public function getCalendar(): ?int
    {
        return $this->calendar;
    }
    /**
     * Set calendar value
     * @param int $calendar
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setCalendar(?int $calendar = null): self
    {
        // validation for constraint: int
        if (!is_null($calendar) && !(is_int($calendar) || ctype_digit($calendar))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($calendar, true), gettype($calendar)), __LINE__);
        }
        $this->calendar = $calendar;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get startdate value
     * @return string|null
     */
    public function getStartdate(): ?string
    {
        return $this->startdate;
    }
    /**
     * Set startdate value
     * @param string $startdate
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setStartdate(?string $startdate = null): self
    {
        // validation for constraint: string
        if (!is_null($startdate) && !is_string($startdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startdate, true), gettype($startdate)), __LINE__);
        }
        $this->startdate = $startdate;
        
        return $this;
    }
    /**
     * Get enddate value
     * @return string|null
     */
    public function getEnddate(): ?string
    {
        return $this->enddate;
    }
    /**
     * Set enddate value
     * @param string $enddate
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setEnddate(?string $enddate = null): self
    {
        // validation for constraint: string
        if (!is_null($enddate) && !is_string($enddate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enddate, true), gettype($enddate)), __LINE__);
        }
        $this->enddate = $enddate;
        
        return $this;
    }
    /**
     * Get operation value
     * @return int|null
     */
    public function getOperation(): ?int
    {
        return $this->operation;
    }
    /**
     * Set operation value
     * @param int $operation
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setOperation(?int $operation = null): self
    {
        // validation for constraint: int
        if (!is_null($operation) && !(is_int($operation) || ctype_digit($operation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        
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
     * @return \Conventus\Atoss\StructType\SetDayProperties
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
     * Get dayofweeklist value
     * @return int[]
     */
    public function getDayofweeklist(): ?array
    {
        return $this->dayofweeklist;
    }
    /**
     * This method is responsible for validating the values passed to the setDayofweeklist method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDayofweeklist method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDayofweeklistForArrayConstraintsFromSetDayofweeklist(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setDayPropertiesDayofweeklistItem) {
            // validation for constraint: itemType
            if (!(is_int($setDayPropertiesDayofweeklistItem) || ctype_digit($setDayPropertiesDayofweeklistItem))) {
                $invalidValues[] = is_object($setDayPropertiesDayofweeklistItem) ? get_class($setDayPropertiesDayofweeklistItem) : sprintf('%s(%s)', gettype($setDayPropertiesDayofweeklistItem), var_export($setDayPropertiesDayofweeklistItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dayofweeklist property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dayofweeklist value
     * @throws InvalidArgumentException
     * @param int[] $dayofweeklist
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setDayofweeklist(?array $dayofweeklist = null): self
    {
        // validation for constraint: array
        if ('' !== ($dayofweeklistArrayErrorMessage = self::validateDayofweeklistForArrayConstraintsFromSetDayofweeklist($dayofweeklist))) {
            throw new InvalidArgumentException($dayofweeklistArrayErrorMessage, __LINE__);
        }
        $this->dayofweeklist = $dayofweeklist;
        
        return $this;
    }
    /**
     * Add item to dayofweeklist value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function addToDayofweeklist(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The dayofweeklist property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dayofweeklist[] = $item;
        
        return $this;
    }
    /**
     * Get dayproperties value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getDayproperties(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->dayproperties;
    }
    /**
     * Set dayproperties value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $dayproperties
     * @return \Conventus\Atoss\StructType\SetDayProperties
     */
    public function setDayproperties(?\Conventus\Atoss\StructType\WebPropertyObject $dayproperties = null): self
    {
        $this->dayproperties = $dayproperties;
        
        return $this;
    }
}
