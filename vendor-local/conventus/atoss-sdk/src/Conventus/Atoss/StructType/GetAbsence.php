<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAbsence StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAbsence
 * @subpackage Structs
 */
class GetAbsence extends AbstractStructBase
{
    /**
     * The start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $start = null;
    /**
     * The end
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $end = null;
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
     * The employees
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employees = null;
    /**
     * The accounts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $accounts = null;
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
     * The absenceoptions
     * @var int|null
     */
    protected ?int $absenceoptions = null;
    /**
     * Constructor method for getAbsence
     * @uses GetAbsence::setStart()
     * @uses GetAbsence::setEnd()
     * @uses GetAbsence::setFrom()
     * @uses GetAbsence::setTo()
     * @uses GetAbsence::setEmployees()
     * @uses GetAbsence::setAccounts()
     * @uses GetAbsence::setIncludeplanned()
     * @uses GetAbsence::setVersion()
     * @uses GetAbsence::setAbsenceoptions()
     * @param string $start
     * @param string $end
     * @param string $from
     * @param string $to
     * @param string[] $employees
     * @param int[] $accounts
     * @param int $includeplanned
     * @param int $version
     * @param int $absenceoptions
     */
    public function __construct(?string $start = null, ?string $end = null, ?string $from = null, ?string $to = null, ?array $employees = null, ?array $accounts = null, ?int $includeplanned = null, ?int $version = null, ?int $absenceoptions = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setFrom($from)
            ->setTo($to)
            ->setEmployees($employees)
            ->setAccounts($accounts)
            ->setIncludeplanned($includeplanned)
            ->setVersion($version)
            ->setAbsenceoptions($absenceoptions);
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Conventus\Atoss\StructType\GetAbsence
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Conventus\Atoss\StructType\GetAbsence
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
        foreach ($values as $getAbsenceEmployeesItem) {
            // validation for constraint: itemType
            if (!is_string($getAbsenceEmployeesItem)) {
                $invalidValues[] = is_object($getAbsenceEmployeesItem) ? get_class($getAbsenceEmployeesItem) : sprintf('%s(%s)', gettype($getAbsenceEmployeesItem), var_export($getAbsenceEmployeesItem, true));
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
        foreach ($values as $getAbsenceAccountsItem) {
            // validation for constraint: itemType
            if (!(is_int($getAbsenceAccountsItem) || ctype_digit($getAbsenceAccountsItem))) {
                $invalidValues[] = is_object($getAbsenceAccountsItem) ? get_class($getAbsenceAccountsItem) : sprintf('%s(%s)', gettype($getAbsenceAccountsItem), var_export($getAbsenceAccountsItem, true));
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
     * @return \Conventus\Atoss\StructType\GetAbsence
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
     * Get absenceoptions value
     * @return int|null
     */
    public function getAbsenceoptions(): ?int
    {
        return $this->absenceoptions;
    }
    /**
     * Set absenceoptions value
     * @param int $absenceoptions
     * @return \Conventus\Atoss\StructType\GetAbsence
     */
    public function setAbsenceoptions(?int $absenceoptions = null): self
    {
        // validation for constraint: int
        if (!is_null($absenceoptions) && !(is_int($absenceoptions) || ctype_digit($absenceoptions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($absenceoptions, true), gettype($absenceoptions)), __LINE__);
        }
        $this->absenceoptions = $absenceoptions;
        
        return $this;
    }
}
