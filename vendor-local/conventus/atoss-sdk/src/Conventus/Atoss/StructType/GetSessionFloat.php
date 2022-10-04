<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSessionFloat StructType
 * Meta information extracted from the WSDL
 * - type: tns:getSessionFloat
 * @subpackage Structs
 */
class GetSessionFloat extends AbstractStructBase
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
     * The defvalue
     * @var float|null
     */
    protected ?float $defvalue = null;
    /**
     * Constructor method for getSessionFloat
     * @uses GetSessionFloat::setScope()
     * @uses GetSessionFloat::setVariable()
     * @uses GetSessionFloat::setDefvalue()
     * @param int $scope
     * @param string $variable
     * @param float $defvalue
     */
    public function __construct(?int $scope = null, ?string $variable = null, ?float $defvalue = null)
    {
        $this
            ->setScope($scope)
            ->setVariable($variable)
            ->setDefvalue($defvalue);
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
     * @return \Conventus\Atoss\StructType\GetSessionFloat
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
     * @return \Conventus\Atoss\StructType\GetSessionFloat
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
     * Get defvalue value
     * @return float|null
     */
    public function getDefvalue(): ?float
    {
        return $this->defvalue;
    }
    /**
     * Set defvalue value
     * @param float $defvalue
     * @return \Conventus\Atoss\StructType\GetSessionFloat
     */
    public function setDefvalue(?float $defvalue = null): self
    {
        // validation for constraint: float
        if (!is_null($defvalue) && !(is_float($defvalue) || is_numeric($defvalue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($defvalue, true), gettype($defvalue)), __LINE__);
        }
        $this->defvalue = $defvalue;
        
        return $this;
    }
}
