<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readXML StructType
 * Meta information extracted from the WSDL
 * - type: tns:readXML
 * @subpackage Structs
 */
class ReadXML extends AbstractStructBase
{
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The group
     * @var int|null
     */
    protected ?int $group = null;
    /**
     * The path
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $path = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The nonhierarchic
     * @var int|null
     */
    protected ?int $nonhierarchic = null;
    /**
     * Constructor method for readXML
     * @uses ReadXML::setWorkplace()
     * @uses ReadXML::setEmployee()
     * @uses ReadXML::setGroup()
     * @uses ReadXML::setPath()
     * @uses ReadXML::setKey()
     * @uses ReadXML::setNonhierarchic()
     * @param string $workplace
     * @param string $employee
     * @param int $group
     * @param string $path
     * @param string $key
     * @param int $nonhierarchic
     */
    public function __construct(?string $workplace = null, ?string $employee = null, ?int $group = null, ?string $path = null, ?string $key = null, ?int $nonhierarchic = null)
    {
        $this
            ->setWorkplace($workplace)
            ->setEmployee($employee)
            ->setGroup($group)
            ->setPath($path)
            ->setKey($key)
            ->setNonhierarchic($nonhierarchic);
    }
    /**
     * Get workplace value
     * @return string|null
     */
    public function getWorkplace(): ?string
    {
        return $this->workplace;
    }
    /**
     * Set workplace value
     * @param string $workplace
     * @return \Conventus\Atoss\StructType\ReadXML
     */
    public function setWorkplace(?string $workplace = null): self
    {
        // validation for constraint: string
        if (!is_null($workplace) && !is_string($workplace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplace, true), gettype($workplace)), __LINE__);
        }
        $this->workplace = $workplace;
        
        return $this;
    }
    /**
     * Get employee value
     * @return string|null
     */
    public function getEmployee(): ?string
    {
        return $this->employee;
    }
    /**
     * Set employee value
     * @param string $employee
     * @return \Conventus\Atoss\StructType\ReadXML
     */
    public function setEmployee(?string $employee = null): self
    {
        // validation for constraint: string
        if (!is_null($employee) && !is_string($employee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee, true), gettype($employee)), __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\ReadXML
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
     * Get path value
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     * Set path value
     * @param string $path
     * @return \Conventus\Atoss\StructType\ReadXML
     */
    public function setPath(?string $path = null): self
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($path, true), gettype($path)), __LINE__);
        }
        $this->path = $path;
        
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
     * @return \Conventus\Atoss\StructType\ReadXML
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
     * Get nonhierarchic value
     * @return int|null
     */
    public function getNonhierarchic(): ?int
    {
        return $this->nonhierarchic;
    }
    /**
     * Set nonhierarchic value
     * @param int $nonhierarchic
     * @return \Conventus\Atoss\StructType\ReadXML
     */
    public function setNonhierarchic(?int $nonhierarchic = null): self
    {
        // validation for constraint: int
        if (!is_null($nonhierarchic) && !(is_int($nonhierarchic) || ctype_digit($nonhierarchic))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nonhierarchic, true), gettype($nonhierarchic)), __LINE__);
        }
        $this->nonhierarchic = $nonhierarchic;
        
        return $this;
    }
}
