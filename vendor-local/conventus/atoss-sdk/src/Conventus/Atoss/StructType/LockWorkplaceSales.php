<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lockWorkplaceSales StructType
 * Meta information extracted from the WSDL
 * - type: tns:lockWorkplaceSales
 * @subpackage Structs
 */
class LockWorkplaceSales extends AbstractStructBase
{
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The fromdate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fromdate = null;
    /**
     * The todate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $todate = null;
    /**
     * Constructor method for lockWorkplaceSales
     * @uses LockWorkplaceSales::setWorkplace()
     * @uses LockWorkplaceSales::setFromdate()
     * @uses LockWorkplaceSales::setTodate()
     * @param string $workplace
     * @param string $fromdate
     * @param string $todate
     */
    public function __construct(?string $workplace = null, ?string $fromdate = null, ?string $todate = null)
    {
        $this
            ->setWorkplace($workplace)
            ->setFromdate($fromdate)
            ->setTodate($todate);
    }
    /**
     * Get workplace value
     * @return string|null
     */
    public function getWorkplace(): ?string
    {
        return $this->workplace;
    }
    /**
     * Set workplace value
     * @param string $workplace
     * @return \Conventus\Atoss\StructType\LockWorkplaceSales
     */
    public function setWorkplace(?string $workplace = null): self
    {
        // validation for constraint: string
        if (!is_null($workplace) && !is_string($workplace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplace, true), gettype($workplace)), __LINE__);
        }
        $this->workplace = $workplace;
        
        return $this;
    }
    /**
     * Get fromdate value
     * @return string|null
     */
    public function getFromdate(): ?string
    {
        return $this->fromdate;
    }
    /**
     * Set fromdate value
     * @param string $fromdate
     * @return \Conventus\Atoss\StructType\LockWorkplaceSales
     */
    public function setFromdate(?string $fromdate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromdate) && !is_string($fromdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromdate, true), gettype($fromdate)), __LINE__);
        }
        $this->fromdate = $fromdate;
        
        return $this;
    }
    /**
     * Get todate value
     * @return string|null
     */
    public function getTodate(): ?string
    {
        return $this->todate;
    }
    /**
     * Set todate value
     * @param string $todate
     * @return \Conventus\Atoss\StructType\LockWorkplaceSales
     */
    public function setTodate(?string $todate = null): self
    {
        // validation for constraint: string
        if (!is_null($todate) && !is_string($todate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($todate, true), gettype($todate)), __LINE__);
        }
        $this->todate = $todate;
        
        return $this;
    }
}
