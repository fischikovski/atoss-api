<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFileFromUserHome StructType
 * Meta information extracted from the WSDL
 * - type: tns:getFileFromUserHome
 * @subpackage Structs
 */
class GetFileFromUserHome extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The filename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * Constructor method for getFileFromUserHome
     * @uses GetFileFromUserHome::setEmployee()
     * @uses GetFileFromUserHome::setFilename()
     * @param string $employee
     * @param string $filename
     */
    public function __construct(?string $employee = null, ?string $filename = null)
    {
        $this
            ->setEmployee($employee)
            ->setFilename($filename);
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
     * @return \Conventus\Atoss\StructType\GetFileFromUserHome
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
     * Get filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \Conventus\Atoss\StructType\GetFileFromUserHome
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        
        return $this;
    }
}
