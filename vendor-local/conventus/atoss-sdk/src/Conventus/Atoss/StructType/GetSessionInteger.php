<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSessionInteger StructType
 * Meta information extracted from the WSDL
 * - type: tns:getSessionInteger
 * @subpackage Structs
 */
class GetSessionInteger extends AbstractStructBase
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
     * @var int|null
     */
    protected ?int $defvalue = null;
    /**
     * Constructor method for getSessionInteger
     * @uses GetSessionInteger::setScope()
     * @uses GetSessionInteger::setVariable()
     * @uses GetSessionInteger::setDefvalue()
     * @param int $scope
     * @param string $variable
     * @param int $defvalue
     */
    public function __construct(?int $scope = null, ?string $variable = null, ?int $defvalue = null)
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
     * @return \Conventus\Atoss\StructType\GetSessionInteger
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
     * @return \Conventus\Atoss\StructType\GetSessionInteger
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
     * @return int|null
     */
    public function getDefvalue(): ?int
    {
        return $this->defvalue;
    }
    /**
     * Set defvalue value
     * @param int $defvalue
     * @return \Conventus\Atoss\StructType\GetSessionInteger
     */
    public function setDefvalue(?int $defvalue = null): self
    {
        // validation for constraint: int
        if (!is_null($defvalue) && !(is_int($defvalue) || ctype_digit($defvalue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defvalue, true), gettype($defvalue)), __LINE__);
        }
        $this->defvalue = $defvalue;
        
        return $this;
    }
}
