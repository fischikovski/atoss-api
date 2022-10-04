<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for startExternalImport StructType
 * Meta information extracted from the WSDL
 * - type: tns:startExternalImport
 * @subpackage Structs
 */
class StartExternalImport extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The source
     * @var int|null
     */
    protected ?int $source = null;
    /**
     * Constructor method for startExternalImport
     * @uses StartExternalImport::setDescription()
     * @uses StartExternalImport::setSource()
     * @param string $description
     * @param int $source
     */
    public function __construct(?string $description = null, ?int $source = null)
    {
        $this
            ->setDescription($description)
            ->setSource($source);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Conventus\Atoss\StructType\StartExternalImport
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get source value
     * @return int|null
     */
    public function getSource(): ?int
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param int $source
     * @return \Conventus\Atoss\StructType\StartExternalImport
     */
    public function setSource(?int $source = null): self
    {
        // validation for constraint: int
        if (!is_null($source) && !(is_int($source) || ctype_digit($source))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;
        
        return $this;
    }
}
