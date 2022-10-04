<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBadges StructType
 * Meta information extracted from the WSDL
 * - type: tns:getBadges
 * @subpackage Structs
 */
class GetBadges extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $employee = null;
    /**
     * The project
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $project = null;
    /**
     * Constructor method for getBadges
     * @uses GetBadges::setId()
     * @uses GetBadges::setEmployee()
     * @uses GetBadges::setProject()
     * @param string $id
     * @param string[] $employee
     * @param string $project
     */
    public function __construct(?string $id = null, ?array $employee = null, ?string $project = null)
    {
        $this
            ->setId($id)
            ->setEmployee($employee)
            ->setProject($project);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Conventus\Atoss\StructType\GetBadges
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get employee value
     * @return string[]
     */
    public function getEmployee(): ?array
    {
        return $this->employee;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeeForArrayConstraintsFromSetEmployee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBadgesEmployeeItem) {
            // validation for constraint: itemType
            if (!is_string($getBadgesEmployeeItem)) {
                $invalidValues[] = is_object($getBadgesEmployeeItem) ? get_class($getBadgesEmployeeItem) : sprintf('%s(%s)', gettype($getBadgesEmployeeItem), var_export($getBadgesEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The employee property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set employee value
     * @throws InvalidArgumentException
     * @param string[] $employee
     * @return \Conventus\Atoss\StructType\GetBadges
     */
    public function setEmployee(?array $employee = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeeArrayErrorMessage = self::validateEmployeeForArrayConstraintsFromSetEmployee($employee))) {
            throw new InvalidArgumentException($employeeArrayErrorMessage, __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
    /**
     * Add item to employee value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Conventus\Atoss\StructType\GetBadges
     */
    public function addToEmployee(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The employee property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->employee[] = $item;
        
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
     * @return \Conventus\Atoss\StructType\GetBadges
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
}
