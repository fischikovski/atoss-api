<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transferPlanVersions StructType
 * Meta information extracted from the WSDL
 * - type: tns:transferPlanVersions
 * @subpackage Structs
 */
class TransferPlanVersions extends AbstractStructBase
{
    /**
     * The source
     * @var int|null
     */
    protected ?int $source = null;
    /**
     * The target
     * @var int|null
     */
    protected ?int $target = null;
    /**
     * The datefrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datefrom = null;
    /**
     * The dateto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateto = null;
    /**
     * The cleartarget
     * @var int|null
     */
    protected ?int $cleartarget = null;
    /**
     * The clearsource
     * @var int|null
     */
    protected ?int $clearsource = null;
    /**
     * The skipconflicts
     * @var int|null
     */
    protected ?int $skipconflicts = null;
    /**
     * Constructor method for transferPlanVersions
     * @uses TransferPlanVersions::setSource()
     * @uses TransferPlanVersions::setTarget()
     * @uses TransferPlanVersions::setDatefrom()
     * @uses TransferPlanVersions::setDateto()
     * @uses TransferPlanVersions::setCleartarget()
     * @uses TransferPlanVersions::setClearsource()
     * @uses TransferPlanVersions::setSkipconflicts()
     * @param int $source
     * @param int $target
     * @param string $datefrom
     * @param string $dateto
     * @param int $cleartarget
     * @param int $clearsource
     * @param int $skipconflicts
     */
    public function __construct(?int $source = null, ?int $target = null, ?string $datefrom = null, ?string $dateto = null, ?int $cleartarget = null, ?int $clearsource = null, ?int $skipconflicts = null)
    {
        $this
            ->setSource($source)
            ->setTarget($target)
            ->setDatefrom($datefrom)
            ->setDateto($dateto)
            ->setCleartarget($cleartarget)
            ->setClearsource($clearsource)
            ->setSkipconflicts($skipconflicts);
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
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
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
    /**
     * Get target value
     * @return int|null
     */
    public function getTarget(): ?int
    {
        return $this->target;
    }
    /**
     * Set target value
     * @param int $target
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
     */
    public function setTarget(?int $target = null): self
    {
        // validation for constraint: int
        if (!is_null($target) && !(is_int($target) || ctype_digit($target))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($target, true), gettype($target)), __LINE__);
        }
        $this->target = $target;
        
        return $this;
    }
    /**
     * Get datefrom value
     * @return string|null
     */
    public function getDatefrom(): ?string
    {
        return $this->datefrom;
    }
    /**
     * Set datefrom value
     * @param string $datefrom
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
     */
    public function setDatefrom(?string $datefrom = null): self
    {
        // validation for constraint: string
        if (!is_null($datefrom) && !is_string($datefrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datefrom, true), gettype($datefrom)), __LINE__);
        }
        $this->datefrom = $datefrom;
        
        return $this;
    }
    /**
     * Get dateto value
     * @return string|null
     */
    public function getDateto(): ?string
    {
        return $this->dateto;
    }
    /**
     * Set dateto value
     * @param string $dateto
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
     */
    public function setDateto(?string $dateto = null): self
    {
        // validation for constraint: string
        if (!is_null($dateto) && !is_string($dateto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateto, true), gettype($dateto)), __LINE__);
        }
        $this->dateto = $dateto;
        
        return $this;
    }
    /**
     * Get cleartarget value
     * @return int|null
     */
    public function getCleartarget(): ?int
    {
        return $this->cleartarget;
    }
    /**
     * Set cleartarget value
     * @param int $cleartarget
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
     */
    public function setCleartarget(?int $cleartarget = null): self
    {
        // validation for constraint: int
        if (!is_null($cleartarget) && !(is_int($cleartarget) || ctype_digit($cleartarget))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cleartarget, true), gettype($cleartarget)), __LINE__);
        }
        $this->cleartarget = $cleartarget;
        
        return $this;
    }
    /**
     * Get clearsource value
     * @return int|null
     */
    public function getClearsource(): ?int
    {
        return $this->clearsource;
    }
    /**
     * Set clearsource value
     * @param int $clearsource
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
     */
    public function setClearsource(?int $clearsource = null): self
    {
        // validation for constraint: int
        if (!is_null($clearsource) && !(is_int($clearsource) || ctype_digit($clearsource))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($clearsource, true), gettype($clearsource)), __LINE__);
        }
        $this->clearsource = $clearsource;
        
        return $this;
    }
    /**
     * Get skipconflicts value
     * @return int|null
     */
    public function getSkipconflicts(): ?int
    {
        return $this->skipconflicts;
    }
    /**
     * Set skipconflicts value
     * @param int $skipconflicts
     * @return \Conventus\Atoss\StructType\TransferPlanVersions
     */
    public function setSkipconflicts(?int $skipconflicts = null): self
    {
        // validation for constraint: int
        if (!is_null($skipconflicts) && !(is_int($skipconflicts) || ctype_digit($skipconflicts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($skipconflicts, true), gettype($skipconflicts)), __LINE__);
        }
        $this->skipconflicts = $skipconflicts;
        
        return $this;
    }
}
