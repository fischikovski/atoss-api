<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAbsenceTotals StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAbsenceTotals
 * @subpackage Structs
 */
class GetAbsenceTotals extends AbstractStructBase
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
     * The includeplanned
     * @var int|null
     */
    protected ?int $includeplanned = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * Constructor method for getAbsenceTotals
     * @uses GetAbsenceTotals::setEmployees()
     * @uses GetAbsenceTotals::setFrom()
     * @uses GetAbsenceTotals::setTo()
     * @uses GetAbsenceTotals::setIncludeplanned()
     * @uses GetAbsenceTotals::setVersion()
     * @param string[] $employees
     * @param string $from
     * @param string $to
     * @param int $includeplanned
     * @param int $version
     */
    public function __construct(?array $employees = null, ?string $from = null, ?string $to = null, ?int $includeplanned = null, ?int $version = null)
    {
        $this
            ->setEmployees($employees)
            ->setFrom($from)
            ->setTo($to)
            ->setIncludeplanned($includeplanned)
            ->setVersion($version);
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
        foreach ($values as $getAbsenceTotalsEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getAbsenceTotalsEmployeesItem)) {
                $invalidValues[] = is_object($getAbsenceTotalsEmployeesItem) ? get_class($getAbsenceTotalsEmployeesItem) : sprintf('%s(%s)', gettype($getAbsenceTotalsEmployeesItem), var_export($getAbsenceTotalsEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetAbsenceTotals
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
     * @return \Conventus\Atoss\StructType\GetAbsenceTotals
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
     * @return \Conventus\Atoss\StructType\GetAbsenceTotals
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
     * @return \Conventus\Atoss\StructType\GetAbsenceTotals
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
     * Get includeplanned value
     * @return int|null
     */
    public function getIncludeplanned(): ?int
    {
        return $this->includeplanned;
    }
    /**
     * Set includeplanned value
     * @param int $includeplanned
     * @return \Conventus\Atoss\StructType\GetAbsenceTotals
     */
    public function setIncludeplanned(?int $includeplanned = null): self
    {
        // validation for constraint: int
        if (!is_null($includeplanned) && !(is_int($includeplanned) || ctype_digit($includeplanned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includeplanned, true), gettype($includeplanned)), __LINE__);
        }
        $this->includeplanned = $includeplanned;
        
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
     * @return \Conventus\Atoss\StructType\GetAbsenceTotals
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
