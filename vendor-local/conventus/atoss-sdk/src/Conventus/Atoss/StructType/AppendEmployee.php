<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appendEmployee StructType
 * Meta information extracted from the WSDL
 * - type: tns:appendEmployee
 * @subpackage Structs
 */
class AppendEmployee extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The lastname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastname = null;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The dateofbirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateofbirth = null;
    /**
     * The employeegroup
     * @var int|null
     */
    protected ?int $employeegroup = null;
    /**
     * The workingtimemodel
     * @var int|null
     */
    protected ?int $workingtimemodel = null;
    /**
     * The startregistration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startregistration = null;
    /**
     * The endregistration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endregistration = null;
    /**
     * The entrance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entrance = null;
    /**
     * The leave
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $leave = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The systemusername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $systemusername = null;
    /**
     * Constructor method for appendEmployee
     * @uses AppendEmployee::setEmployee()
     * @uses AppendEmployee::setLastname()
     * @uses AppendEmployee::setFirstname()
     * @uses AppendEmployee::setDateofbirth()
     * @uses AppendEmployee::setEmployeegroup()
     * @uses AppendEmployee::setWorkingtimemodel()
     * @uses AppendEmployee::setStartregistration()
     * @uses AppendEmployee::setEndregistration()
     * @uses AppendEmployee::setEntrance()
     * @uses AppendEmployee::setLeave()
     * @uses AppendEmployee::setLanguage()
     * @uses AppendEmployee::setSystemusername()
     * @param string $employee
     * @param string $lastname
     * @param string $firstname
     * @param string $dateofbirth
     * @param int $employeegroup
     * @param int $workingtimemodel
     * @param string $startregistration
     * @param string $endregistration
     * @param string $entrance
     * @param string $leave
     * @param string $language
     * @param string $systemusername
     */
    public function __construct(?string $employee = null, ?string $lastname = null, ?string $firstname = null, ?string $dateofbirth = null, ?int $employeegroup = null, ?int $workingtimemodel = null, ?string $startregistration = null, ?string $endregistration = null, ?string $entrance = null, ?string $leave = null, ?string $language = null, ?string $systemusername = null)
    {
        $this
            ->setEmployee($employee)
            ->setLastname($lastname)
            ->setFirstname($firstname)
            ->setDateofbirth($dateofbirth)
            ->setEmployeegroup($employeegroup)
            ->setWorkingtimemodel($workingtimemodel)
            ->setStartregistration($startregistration)
            ->setEndregistration($endregistration)
            ->setEntrance($entrance)
            ->setLeave($leave)
            ->setLanguage($language)
            ->setSystemusername($systemusername);
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
     * @return \Conventus\Atoss\StructType\AppendEmployee
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
     * Get lastname value
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    /**
     * Set lastname value
     * @param string $lastname
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setLastname(?string $lastname = null): self
    {
        // validation for constraint: string
        if (!is_null($lastname) && !is_string($lastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastname, true), gettype($lastname)), __LINE__);
        }
        $this->lastname = $lastname;
        
        return $this;
    }
    /**
     * Get firstname value
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    /**
     * Set firstname value
     * @param string $firstname
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setFirstname(?string $firstname = null): self
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
        }
        $this->firstname = $firstname;
        
        return $this;
    }
    /**
     * Get dateofbirth value
     * @return string|null
     */
    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth;
    }
    /**
     * Set dateofbirth value
     * @param string $dateofbirth
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setDateofbirth(?string $dateofbirth = null): self
    {
        // validation for constraint: string
        if (!is_null($dateofbirth) && !is_string($dateofbirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateofbirth, true), gettype($dateofbirth)), __LINE__);
        }
        $this->dateofbirth = $dateofbirth;
        
        return $this;
    }
    /**
     * Get employeegroup value
     * @return int|null
     */
    public function getEmployeegroup(): ?int
    {
        return $this->employeegroup;
    }
    /**
     * Set employeegroup value
     * @param int $employeegroup
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setEmployeegroup(?int $employeegroup = null): self
    {
        // validation for constraint: int
        if (!is_null($employeegroup) && !(is_int($employeegroup) || ctype_digit($employeegroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($employeegroup, true), gettype($employeegroup)), __LINE__);
        }
        $this->employeegroup = $employeegroup;
        
        return $this;
    }
    /**
     * Get workingtimemodel value
     * @return int|null
     */
    public function getWorkingtimemodel(): ?int
    {
        return $this->workingtimemodel;
    }
    /**
     * Set workingtimemodel value
     * @param int $workingtimemodel
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setWorkingtimemodel(?int $workingtimemodel = null): self
    {
        // validation for constraint: int
        if (!is_null($workingtimemodel) && !(is_int($workingtimemodel) || ctype_digit($workingtimemodel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingtimemodel, true), gettype($workingtimemodel)), __LINE__);
        }
        $this->workingtimemodel = $workingtimemodel;
        
        return $this;
    }
    /**
     * Get startregistration value
     * @return string|null
     */
    public function getStartregistration(): ?string
    {
        return $this->startregistration;
    }
    /**
     * Set startregistration value
     * @param string $startregistration
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setStartregistration(?string $startregistration = null): self
    {
        // validation for constraint: string
        if (!is_null($startregistration) && !is_string($startregistration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startregistration, true), gettype($startregistration)), __LINE__);
        }
        $this->startregistration = $startregistration;
        
        return $this;
    }
    /**
     * Get endregistration value
     * @return string|null
     */
    public function getEndregistration(): ?string
    {
        return $this->endregistration;
    }
    /**
     * Set endregistration value
     * @param string $endregistration
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setEndregistration(?string $endregistration = null): self
    {
        // validation for constraint: string
        if (!is_null($endregistration) && !is_string($endregistration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endregistration, true), gettype($endregistration)), __LINE__);
        }
        $this->endregistration = $endregistration;
        
        return $this;
    }
    /**
     * Get entrance value
     * @return string|null
     */
    public function getEntrance(): ?string
    {
        return $this->entrance;
    }
    /**
     * Set entrance value
     * @param string $entrance
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setEntrance(?string $entrance = null): self
    {
        // validation for constraint: string
        if (!is_null($entrance) && !is_string($entrance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entrance, true), gettype($entrance)), __LINE__);
        }
        $this->entrance = $entrance;
        
        return $this;
    }
    /**
     * Get leave value
     * @return string|null
     */
    public function getLeave(): ?string
    {
        return $this->leave;
    }
    /**
     * Set leave value
     * @param string $leave
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setLeave(?string $leave = null): self
    {
        // validation for constraint: string
        if (!is_null($leave) && !is_string($leave)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leave, true), gettype($leave)), __LINE__);
        }
        $this->leave = $leave;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get systemusername value
     * @return string|null
     */
    public function getSystemusername(): ?string
    {
        return $this->systemusername;
    }
    /**
     * Set systemusername value
     * @param string $systemusername
     * @return \Conventus\Atoss\StructType\AppendEmployee
     */
    public function setSystemusername(?string $systemusername = null): self
    {
        // validation for constraint: string
        if (!is_null($systemusername) && !is_string($systemusername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemusername, true), gettype($systemusername)), __LINE__);
        }
        $this->systemusername = $systemusername;
        
        return $this;
    }
}
