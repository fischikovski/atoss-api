<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transferPlanningPatternIgnoreExisting StructType
 * Meta information extracted from the WSDL
 * - type: tns:transferPlanningPatternIgnoreExisting
 * @subpackage Structs
 */
class TransferPlanningPatternIgnoreExisting extends AbstractStructBase
{
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The model
     * @var int|null
     */
    protected ?int $model = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The from
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The what
     * @var int|null
     */
    protected ?int $what = null;
    /**
     * The transferindependent
     * @var int|null
     */
    protected ?int $transferindependent = null;
    /**
     * The keepExisting
     * @var bool|null
     */
    protected ?bool $keepExisting = null;
    /**
     * Constructor method for transferPlanningPatternIgnoreExisting
     * @uses TransferPlanningPatternIgnoreExisting::setWorkplace()
     * @uses TransferPlanningPatternIgnoreExisting::setModel()
     * @uses TransferPlanningPatternIgnoreExisting::setVersion()
     * @uses TransferPlanningPatternIgnoreExisting::setFrom()
     * @uses TransferPlanningPatternIgnoreExisting::setTo()
     * @uses TransferPlanningPatternIgnoreExisting::setWhat()
     * @uses TransferPlanningPatternIgnoreExisting::setTransferindependent()
     * @uses TransferPlanningPatternIgnoreExisting::setKeepExisting()
     * @param string $workplace
     * @param int $model
     * @param int $version
     * @param string $from
     * @param string $to
     * @param int $what
     * @param int $transferindependent
     * @param bool $keepExisting
     */
    public function __construct(?string $workplace = null, ?int $model = null, ?int $version = null, ?string $from = null, ?string $to = null, ?int $what = null, ?int $transferindependent = null, ?bool $keepExisting = null)
    {
        $this
            ->setWorkplace($workplace)
            ->setModel($model)
            ->setVersion($version)
            ->setFrom($from)
            ->setTo($to)
            ->setWhat($what)
            ->setTransferindependent($transferindependent)
            ->setKeepExisting($keepExisting);
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
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
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
     * Get model value
     * @return int|null
     */
    public function getModel(): ?int
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param int $model
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setModel(?int $model = null): self
    {
        // validation for constraint: int
        if (!is_null($model) && !(is_int($model) || ctype_digit($model))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($model, true), gettype($model)), __LINE__);
        }
        $this->model = $model;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
    /**
     * Get what value
     * @return int|null
     */
    public function getWhat(): ?int
    {
        return $this->what;
    }
    /**
     * Set what value
     * @param int $what
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setWhat(?int $what = null): self
    {
        // validation for constraint: int
        if (!is_null($what) && !(is_int($what) || ctype_digit($what))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($what, true), gettype($what)), __LINE__);
        }
        $this->what = $what;
        
        return $this;
    }
    /**
     * Get transferindependent value
     * @return int|null
     */
    public function getTransferindependent(): ?int
    {
        return $this->transferindependent;
    }
    /**
     * Set transferindependent value
     * @param int $transferindependent
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setTransferindependent(?int $transferindependent = null): self
    {
        // validation for constraint: int
        if (!is_null($transferindependent) && !(is_int($transferindependent) || ctype_digit($transferindependent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transferindependent, true), gettype($transferindependent)), __LINE__);
        }
        $this->transferindependent = $transferindependent;
        
        return $this;
    }
    /**
     * Get keepExisting value
     * @return bool|null
     */
    public function getKeepExisting(): ?bool
    {
        return $this->keepExisting;
    }
    /**
     * Set keepExisting value
     * @param bool $keepExisting
     * @return \Conventus\Atoss\StructType\TransferPlanningPatternIgnoreExisting
     */
    public function setKeepExisting(?bool $keepExisting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keepExisting) && !is_bool($keepExisting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepExisting, true), gettype($keepExisting)), __LINE__);
        }
        $this->keepExisting = $keepExisting;
        
        return $this;
    }
}
