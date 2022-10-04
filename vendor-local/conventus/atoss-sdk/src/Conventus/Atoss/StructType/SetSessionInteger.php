<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setSessionInteger StructType
 * Meta information extracted from the WSDL
 * - type: tns:setSessionInteger
 * @subpackage Structs
 */
class SetSessionInteger extends AbstractStructBase
{
    /**
     * The scope
     * @var int|null
     */
    protected ?int $scope = null;
    /**
     * The variable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $variable = null;
    /**
     * The value
     * @var int|null
     */
    protected ?int $value = null;
    /**
     * Constructor method for setSessionInteger
     * @uses SetSessionInteger::setScope()
     * @uses SetSessionInteger::setVariable()
     * @uses SetSessionInteger::setValue()
     * @param int $scope
     * @param string $variable
     * @param int $value
     */
    public function __construct(?int $scope = null, ?string $variable = null, ?int $value = null)
    {
        $this
            ->setScope($scope)
            ->setVariable($variable)
            ->setValue($value);
    }
    /**
     * Get scope value
     * @return int|null
     */
    public function getScope(): ?int
    {
        return $this->scope;
    }
    /**
     * Set scope value
     * @param int $scope
     * @return \Conventus\Atoss\StructType\SetSessionInteger
     */
    public function setScope(?int $scope = null): self
    {
        // validation for constraint: int
        if (!is_null($scope) && !(is_int($scope) || ctype_digit($scope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->scope = $scope;
        
        return $this;
    }
    /**
     * Get variable value
     * @return string|null
     */
    public function getVariable(): ?string
    {
        return $this->variable;
    }
    /**
     * Set variable value
     * @param string $variable
     * @return \Conventus\Atoss\StructType\SetSessionInteger
     */
    public function setVariable(?string $variable = null): self
    {
        // validation for constraint: string
        if (!is_null($variable) && !is_string($variable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variable, true), gettype($variable)), __LINE__);
        }
        $this->variable = $variable;
        
        return $this;
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \Conventus\Atoss\StructType\SetSessionInteger
     */
    public function setValue(?int $value = null): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
