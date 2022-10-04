<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setSessionString StructType
 * Meta information extracted from the WSDL
 * - type: tns:setSessionString
 * @subpackage Structs
 */
class SetSessionString extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for setSessionString
     * @uses SetSessionString::setScope()
     * @uses SetSessionString::setVariable()
     * @uses SetSessionString::setValue()
     * @param int $scope
     * @param string $variable
     * @param string $value
     */
    public function __construct(?int $scope = null, ?string $variable = null, ?string $value = null)
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
     * @return \Conventus\Atoss\StructType\SetSessionString
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
     * @return \Conventus\Atoss\StructType\SetSessionString
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
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Conventus\Atoss\StructType\SetSessionString
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
