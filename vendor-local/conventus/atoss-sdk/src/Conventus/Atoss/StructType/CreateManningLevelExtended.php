<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createManningLevelExtended StructType
 * Meta information extracted from the WSDL
 * - type: tns:createManningLevelExtended
 * @subpackage Structs
 */
class CreateManningLevelExtended extends AbstractStructBase
{
    /**
     * The workplace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workplace = null;
    /**
     * The shift
     * @var int|null
     */
    protected ?int $shift = null;
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
     * The qualifications
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $qualifications = null;
    /**
     * The efficiency
     * @var float|null
     */
    protected ?float $efficiency = null;
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The level
     * @var float|null
     */
    protected ?float $level = null;
    /**
     * The creation
     * @var int|null
     */
    protected ?int $creation = null;
    /**
     * The merge
     * @var int|null
     */
    protected ?int $merge = null;
    /**
     * The minlevel
     * @var int|null
     */
    protected ?int $minlevel = null;
    /**
     * The maxlevel
     * @var int|null
     */
    protected ?int $maxlevel = null;
    /**
     * The pause
     * Meta information extracted from the WSDL
     * - base: xs:double
     * - minOccurs: 0
     * - type: tns:duration
     * @var float|null
     */
    protected ?float $pause = null;
    /**
     * The pausestart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pausestart = null;
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The shortcut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shortcut = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The patternnumber
     * @var int|null
     */
    protected ?int $patternnumber = null;
    /**
     * The planversion
     * @var int|null
     */
    protected ?int $planversion = null;
    /**
     * Constructor method for createManningLevelExtended
     * @uses CreateManningLevelExtended::setWorkplace()
     * @uses CreateManningLevelExtended::setShift()
     * @uses CreateManningLevelExtended::setFrom()
     * @uses CreateManningLevelExtended::setTo()
     * @uses CreateManningLevelExtended::setQualifications()
     * @uses CreateManningLevelExtended::setEfficiency()
     * @uses CreateManningLevelExtended::setProject()
     * @uses CreateManningLevelExtended::setDate()
     * @uses CreateManningLevelExtended::setLevel()
     * @uses CreateManningLevelExtended::setCreation()
     * @uses CreateManningLevelExtended::setMerge()
     * @uses CreateManningLevelExtended::setMinlevel()
     * @uses CreateManningLevelExtended::setMaxlevel()
     * @uses CreateManningLevelExtended::setPause()
     * @uses CreateManningLevelExtended::setPausestart()
     * @uses CreateManningLevelExtended::setAccount()
     * @uses CreateManningLevelExtended::setRemark()
     * @uses CreateManningLevelExtended::setShortcut()
     * @uses CreateManningLevelExtended::setDescription()
     * @uses CreateManningLevelExtended::setPatternnumber()
     * @uses CreateManningLevelExtended::setPlanversion()
     * @param string $workplace
     * @param int $shift
     * @param string $from
     * @param string $to
     * @param int[] $qualifications
     * @param float $efficiency
     * @param string $project
     * @param string $date
     * @param float $level
     * @param int $creation
     * @param int $merge
     * @param int $minlevel
     * @param int $maxlevel
     * @param float $pause
     * @param string $pausestart
     * @param int $account
     * @param string $remark
     * @param string $shortcut
     * @param string $description
     * @param int $patternnumber
     * @param int $planversion
     */
    public function __construct(?string $workplace = null, ?int $shift = null, ?string $from = null, ?string $to = null, ?array $qualifications = null, ?float $efficiency = null, ?string $project = null, ?string $date = null, ?float $level = null, ?int $creation = null, ?int $merge = null, ?int $minlevel = null, ?int $maxlevel = null, ?float $pause = null, ?string $pausestart = null, ?int $account = null, ?string $remark = null, ?string $shortcut = null, ?string $description = null, ?int $patternnumber = null, ?int $planversion = null)
    {
        $this
            ->setWorkplace($workplace)
            ->setShift($shift)
            ->setFrom($from)
            ->setTo($to)
            ->setQualifications($qualifications)
            ->setEfficiency($efficiency)
            ->setProject($project)
            ->setDate($date)
            ->setLevel($level)
            ->setCreation($creation)
            ->setMerge($merge)
            ->setMinlevel($minlevel)
            ->setMaxlevel($maxlevel)
            ->setPause($pause)
            ->setPausestart($pausestart)
            ->setAccount($account)
            ->setRemark($remark)
            ->setShortcut($shortcut)
            ->setDescription($description)
            ->setPatternnumber($patternnumber)
            ->setPlanversion($planversion);
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
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
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
     * Get shift value
     * @return int|null
     */
    public function getShift(): ?int
    {
        return $this->shift;
    }
    /**
     * Set shift value
     * @param int $shift
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setShift(?int $shift = null): self
    {
        // validation for constraint: int
        if (!is_null($shift) && !(is_int($shift) || ctype_digit($shift))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shift, true), gettype($shift)), __LINE__);
        }
        $this->shift = $shift;
        
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
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
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
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
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
     * Get qualifications value
     * @return int[]
     */
    public function getQualifications(): ?array
    {
        return $this->qualifications;
    }
    /**
     * This method is responsible for validating the values passed to the setQualifications method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQualifications method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQualificationsForArrayConstraintsFromSetQualifications(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createManningLevelExtendedQualificationsItem) {
            // validation for constraint: itemType
            if (!(is_int($createManningLevelExtendedQualificationsItem) || ctype_digit($createManningLevelExtendedQualificationsItem))) {
                $invalidValues[] = is_object($createManningLevelExtendedQualificationsItem) ? get_class($createManningLevelExtendedQualificationsItem) : sprintf('%s(%s)', gettype($createManningLevelExtendedQualificationsItem), var_export($createManningLevelExtendedQualificationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The qualifications property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set qualifications value
     * @throws InvalidArgumentException
     * @param int[] $qualifications
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setQualifications(?array $qualifications = null): self
    {
        // validation for constraint: array
        if ('' !== ($qualificationsArrayErrorMessage = self::validateQualificationsForArrayConstraintsFromSetQualifications($qualifications))) {
            throw new InvalidArgumentException($qualificationsArrayErrorMessage, __LINE__);
        }
        $this->qualifications = $qualifications;
        
        return $this;
    }
    /**
     * Add item to qualifications value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function addToQualifications(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The qualifications property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->qualifications[] = $item;
        
        return $this;
    }
    /**
     * Get efficiency value
     * @return float|null
     */
    public function getEfficiency(): ?float
    {
        return $this->efficiency;
    }
    /**
     * Set efficiency value
     * @param float $efficiency
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setEfficiency(?float $efficiency = null): self
    {
        // validation for constraint: float
        if (!is_null($efficiency) && !(is_float($efficiency) || is_numeric($efficiency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($efficiency, true), gettype($efficiency)), __LINE__);
        }
        $this->efficiency = $efficiency;
        
        return $this;
    }
    /**
     * Get project value
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->project;
    }
    /**
     * Set project value
     * @param string $project
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setProject(?string $project = null): self
    {
        // validation for constraint: string
        if (!is_null($project) && !is_string($project)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($project, true), gettype($project)), __LINE__);
        }
        $this->project = $project;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get level value
     * @return float|null
     */
    public function getLevel(): ?float
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param float $level
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setLevel(?float $level = null): self
    {
        // validation for constraint: float
        if (!is_null($level) && !(is_float($level) || is_numeric($level))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        
        return $this;
    }
    /**
     * Get creation value
     * @return int|null
     */
    public function getCreation(): ?int
    {
        return $this->creation;
    }
    /**
     * Set creation value
     * @param int $creation
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setCreation(?int $creation = null): self
    {
        // validation for constraint: int
        if (!is_null($creation) && !(is_int($creation) || ctype_digit($creation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creation, true), gettype($creation)), __LINE__);
        }
        $this->creation = $creation;
        
        return $this;
    }
    /**
     * Get merge value
     * @return int|null
     */
    public function getMerge(): ?int
    {
        return $this->merge;
    }
    /**
     * Set merge value
     * @param int $merge
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setMerge(?int $merge = null): self
    {
        // validation for constraint: int
        if (!is_null($merge) && !(is_int($merge) || ctype_digit($merge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($merge, true), gettype($merge)), __LINE__);
        }
        $this->merge = $merge;
        
        return $this;
    }
    /**
     * Get minlevel value
     * @return int|null
     */
    public function getMinlevel(): ?int
    {
        return $this->minlevel;
    }
    /**
     * Set minlevel value
     * @param int $minlevel
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setMinlevel(?int $minlevel = null): self
    {
        // validation for constraint: int
        if (!is_null($minlevel) && !(is_int($minlevel) || ctype_digit($minlevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minlevel, true), gettype($minlevel)), __LINE__);
        }
        $this->minlevel = $minlevel;
        
        return $this;
    }
    /**
     * Get maxlevel value
     * @return int|null
     */
    public function getMaxlevel(): ?int
    {
        return $this->maxlevel;
    }
    /**
     * Set maxlevel value
     * @param int $maxlevel
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setMaxlevel(?int $maxlevel = null): self
    {
        // validation for constraint: int
        if (!is_null($maxlevel) && !(is_int($maxlevel) || ctype_digit($maxlevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxlevel, true), gettype($maxlevel)), __LINE__);
        }
        $this->maxlevel = $maxlevel;
        
        return $this;
    }
    /**
     * Get pause value
     * @return float|null
     */
    public function getPause(): ?float
    {
        return $this->pause;
    }
    /**
     * Set pause value
     * @param float $pause
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setPause(?float $pause = null): self
    {
        // validation for constraint: float
        if (!is_null($pause) && !(is_float($pause) || is_numeric($pause))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pause, true), gettype($pause)), __LINE__);
        }
        $this->pause = $pause;
        
        return $this;
    }
    /**
     * Get pausestart value
     * @return string|null
     */
    public function getPausestart(): ?string
    {
        return $this->pausestart;
    }
    /**
     * Set pausestart value
     * @param string $pausestart
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setPausestart(?string $pausestart = null): self
    {
        // validation for constraint: string
        if (!is_null($pausestart) && !is_string($pausestart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pausestart, true), gettype($pausestart)), __LINE__);
        }
        $this->pausestart = $pausestart;
        
        return $this;
    }
    /**
     * Get account value
     * @return int|null
     */
    public function getAccount(): ?int
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param int $account
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setAccount(?int $account = null): self
    {
        // validation for constraint: int
        if (!is_null($account) && !(is_int($account) || ctype_digit($account))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get shortcut value
     * @return string|null
     */
    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }
    /**
     * Set shortcut value
     * @param string $shortcut
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setShortcut(?string $shortcut = null): self
    {
        // validation for constraint: string
        if (!is_null($shortcut) && !is_string($shortcut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortcut, true), gettype($shortcut)), __LINE__);
        }
        $this->shortcut = $shortcut;
        
        return $this;
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
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
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
     * Get patternnumber value
     * @return int|null
     */
    public function getPatternnumber(): ?int
    {
        return $this->patternnumber;
    }
    /**
     * Set patternnumber value
     * @param int $patternnumber
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setPatternnumber(?int $patternnumber = null): self
    {
        // validation for constraint: int
        if (!is_null($patternnumber) && !(is_int($patternnumber) || ctype_digit($patternnumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($patternnumber, true), gettype($patternnumber)), __LINE__);
        }
        $this->patternnumber = $patternnumber;
        
        return $this;
    }
    /**
     * Get planversion value
     * @return int|null
     */
    public function getPlanversion(): ?int
    {
        return $this->planversion;
    }
    /**
     * Set planversion value
     * @param int $planversion
     * @return \Conventus\Atoss\StructType\CreateManningLevelExtended
     */
    public function setPlanversion(?int $planversion = null): self
    {
        // validation for constraint: int
        if (!is_null($planversion) && !(is_int($planversion) || ctype_digit($planversion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($planversion, true), gettype($planversion)), __LINE__);
        }
        $this->planversion = $planversion;
        
        return $this;
    }
}
