<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateApplication StructType
 * Meta information extracted from the WSDL
 * - type: tns:updateApplication
 * @subpackage Structs
 */
class UpdateApplication extends AbstractStructBase
{
    /**
     * The application
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The maturity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maturity = null;
    /**
     * The substitute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $substitute = null;
    /**
     * Constructor method for updateApplication
     * @uses UpdateApplication::setApplication()
     * @uses UpdateApplication::setPriority()
     * @uses UpdateApplication::setMaturity()
     * @uses UpdateApplication::setSubstitute()
     * @param string $application
     * @param int $priority
     * @param string $maturity
     * @param string $substitute
     */
    public function __construct(?string $application = null, ?int $priority = null, ?string $maturity = null, ?string $substitute = null)
    {
        $this
            ->setApplication($application)
            ->setPriority($priority)
            ->setMaturity($maturity)
            ->setSubstitute($substitute);
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Conventus\Atoss\StructType\UpdateApplication
     */
    public function setApplication(?string $application = null): self
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($application, true), gettype($application)), __LINE__);
        }
        $this->application = $application;
        
        return $this;
    }
    /**
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Conventus\Atoss\StructType\UpdateApplication
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
        return $this;
    }
    /**
     * Get maturity value
     * @return string|null
     */
    public function getMaturity(): ?string
    {
        return $this->maturity;
    }
    /**
     * Set maturity value
     * @param string $maturity
     * @return \Conventus\Atoss\StructType\UpdateApplication
     */
    public function setMaturity(?string $maturity = null): self
    {
        // validation for constraint: string
        if (!is_null($maturity) && !is_string($maturity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maturity, true), gettype($maturity)), __LINE__);
        }
        $this->maturity = $maturity;
        
        return $this;
    }
    /**
     * Get substitute value
     * @return string|null
     */
    public function getSubstitute(): ?string
    {
        return $this->substitute;
    }
    /**
     * Set substitute value
     * @param string $substitute
     * @return \Conventus\Atoss\StructType\UpdateApplication
     */
    public function setSubstitute(?string $substitute = null): self
    {
        // validation for constraint: string
        if (!is_null($substitute) && !is_string($substitute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($substitute, true), gettype($substitute)), __LINE__);
        }
        $this->substitute = $substitute;
        
        return $this;
    }
}
