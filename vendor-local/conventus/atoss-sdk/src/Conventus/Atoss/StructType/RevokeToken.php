<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for revokeToken StructType
 * Meta information extracted from the WSDL
 * - type: tns:revokeToken
 * @subpackage Structs
 */
class RevokeToken extends AbstractStructBase
{
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * Constructor method for revokeToken
     * @uses RevokeToken::setToken()
     * @param string $token
     */
    public function __construct(?string $token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Conventus\Atoss\StructType\RevokeToken
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
}
