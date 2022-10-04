<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setSessionFloat StructType
 * Meta information extracted from the WSDL
 * - type: tns:setSessionFloat
 * @subpackage Structs
 */
class SetSessionFloat extends AbstractStructBase
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
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * Constructor method for setSessionFloat
     * @uses SetSessionFloat::setScope()
     * @uses SetSessionFloat::setVariable()
     * @uses SetSessionFloat::setValue()
     * @param int $scope
     * @param string $variable
     * @param float $value
     */
    public function __construct(?int $scope = null, ?string $variable = null, ?float $value = null)
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
     * @return \Conventus\Atoss\StructType\SetSessionFloat
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
     * @return \Conventus\Atoss\StructType\SetSessionFloat
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
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Conventus\Atoss\StructType\SetSessionFloat
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
