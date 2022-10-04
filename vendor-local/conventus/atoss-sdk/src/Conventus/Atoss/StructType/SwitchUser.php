<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for switchUser StructType
 * Meta information extracted from the WSDL
 * - type: tns:switchUser
 * @subpackage Structs
 */
class SwitchUser extends AbstractStructBase
{
    /**
     * The user
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $user = null;
    /**
     * The badge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $badge = null;
    /**
     * Constructor method for switchUser
     * @uses SwitchUser::setUser()
     * @uses SwitchUser::setBadge()
     * @param string $user
     * @param string $badge
     */
    public function __construct(?string $user = null, ?string $badge = null)
    {
        $this
            ->setUser($user)
            ->setBadge($badge);
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Conventus\Atoss\StructType\SwitchUser
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get badge value
     * @return string|null
     */
    public function getBadge(): ?string
    {
        return $this->badge;
    }
    /**
     * Set badge value
     * @param string $badge
     * @return \Conventus\Atoss\StructType\SwitchUser
     */
    public function setBadge(?string $badge = null): self
    {
        // validation for constraint: string
        if (!is_null($badge) && !is_string($badge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($badge, true), gettype($badge)), __LINE__);
        }
        $this->badge = $badge;
        
        return $this;
    }
}
