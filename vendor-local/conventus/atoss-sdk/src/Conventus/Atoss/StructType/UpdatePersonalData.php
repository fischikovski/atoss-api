<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePersonalData StructType
 * Meta information extracted from the WSDL
 * - type: tns:updatePersonalData
 * @subpackage Structs
 */
class UpdatePersonalData extends AbstractStructBase
{
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $employee = null;
    /**
     * The dateofbirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dateofbirth = null;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The lastname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lastname = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The telephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $telephone = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for updatePersonalData
     * @uses UpdatePersonalData::setEmployee()
     * @uses UpdatePersonalData::setDateofbirth()
     * @uses UpdatePersonalData::setFirstname()
     * @uses UpdatePersonalData::setLastname()
     * @uses UpdatePersonalData::setStreet()
     * @uses UpdatePersonalData::setPostcode()
     * @uses UpdatePersonalData::setCity()
     * @uses UpdatePersonalData::setTelephone()
     * @uses UpdatePersonalData::setMobile()
     * @uses UpdatePersonalData::setFax()
     * @uses UpdatePersonalData::setEmail()
     * @param string $employee
     * @param string $dateofbirth
     * @param string $firstname
     * @param string $lastname
     * @param string $street
     * @param string $postcode
     * @param string $city
     * @param string $telephone
     * @param string $mobile
     * @param string $fax
     * @param string $email
     */
    public function __construct(?string $employee = null, ?string $dateofbirth = null, ?string $firstname = null, ?string $lastname = null, ?string $street = null, ?string $postcode = null, ?string $city = null, ?string $telephone = null, ?string $mobile = null, ?string $fax = null, ?string $email = null)
    {
        $this
            ->setEmployee($employee)
            ->setDateofbirth($dateofbirth)
            ->setFirstname($firstname)
            ->setLastname($lastname)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setTelephone($telephone)
            ->setMobile($mobile)
            ->setFax($fax)
            ->setEmail($email);
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
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
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
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
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
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
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
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
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
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get telephone value
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setTelephone(?string $telephone = null): self
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephone, true), gettype($telephone)), __LINE__);
        }
        $this->telephone = $telephone;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Conventus\Atoss\StructType\UpdatePersonalData
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
