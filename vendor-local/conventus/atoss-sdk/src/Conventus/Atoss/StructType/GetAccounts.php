<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAccounts StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAccounts
 * @subpackage Structs
 */
class GetAccounts extends AbstractStructBase
{
    /**
     * The account
     * @var int|null
     */
    protected ?int $account = null;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fields = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $order = null;
    /**
     * The options
     * @var int|null
     */
    protected ?int $options = null;
    /**
     * Constructor method for getAccounts
     * @uses GetAccounts::setAccount()
     * @uses GetAccounts::setFields()
     * @uses GetAccounts::setFilter()
     * @uses GetAccounts::setOrder()
     * @uses GetAccounts::setOptions()
     * @param int $account
     * @param string $fields
     * @param string $filter
     * @param string $order
     * @param int $options
     */
    public function __construct(?int $account = null, ?string $fields = null, ?string $filter = null, ?string $order = null, ?int $options = null)
    {
        $this
            ->setAccount($account)
            ->setFields($fields)
            ->setFilter($filter)
            ->setOrder($order)
            ->setOptions($options);
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
     * @return \Conventus\Atoss\StructType\GetAccounts
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
     * Get fields value
     * @return string|null
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param string $fields
     * @return \Conventus\Atoss\StructType\GetAccounts
     */
    public function setFields(?string $fields = null): self
    {
        // validation for constraint: string
        if (!is_null($fields) && !is_string($fields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fields, true), gettype($fields)), __LINE__);
        }
        $this->fields = $fields;
        
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Conventus\Atoss\StructType\GetAccounts
     */
    public function setFilter(?string $filter = null): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        
        return $this;
    }
    /**
     * Get order value
     * @return string|null
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param string $order
     * @return \Conventus\Atoss\StructType\GetAccounts
     */
    public function setOrder(?string $order = null): self
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        
        return $this;
    }
    /**
     * Get options value
     * @return int|null
     */
    public function getOptions(): ?int
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param int $options
     * @return \Conventus\Atoss\StructType\GetAccounts
     */
    public function setOptions(?int $options = null): self
    {
        // validation for constraint: int
        if (!is_null($options) && !(is_int($options) || ctype_digit($options))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($options, true), gettype($options)), __LINE__);
        }
        $this->options = $options;
        
        return $this;
    }
}
