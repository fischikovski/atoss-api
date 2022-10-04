<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appendNotificationToken StructType
 * Meta information extracted from the WSDL
 * - type: tns:appendNotificationToken
 * @subpackage Structs
 */
class AppendNotificationToken extends AbstractStructBase
{
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The deviceOS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $deviceOS = null;
    /**
     * Constructor method for appendNotificationToken
     * @uses AppendNotificationToken::setToken()
     * @uses AppendNotificationToken::setEmployee()
     * @uses AppendNotificationToken::setDeviceOS()
     * @param string $token
     * @param string $employee
     * @param string $deviceOS
     */
    public function __construct(?string $token = null, ?string $employee = null, ?string $deviceOS = null)
    {
        $this
            ->setToken($token)
            ->setEmployee($employee)
            ->setDeviceOS($deviceOS);
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
     * @return \Conventus\Atoss\StructType\AppendNotificationToken
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
     * @return \Conventus\Atoss\StructType\AppendNotificationToken
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
     * Get deviceOS value
     * @return string|null
     */
    public function getDeviceOS(): ?string
    {
        return $this->deviceOS;
    }
    /**
     * Set deviceOS value
     * @param string $deviceOS
     * @return \Conventus\Atoss\StructType\AppendNotificationToken
     */
    public function setDeviceOS(?string $deviceOS = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceOS) && !is_string($deviceOS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceOS, true), gettype($deviceOS)), __LINE__);
        }
        $this->deviceOS = $deviceOS;
        
        return $this;
    }
}
