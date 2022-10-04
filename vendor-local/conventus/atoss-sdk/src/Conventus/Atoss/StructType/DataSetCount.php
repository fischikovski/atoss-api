<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dataSetCount StructType
 * Meta information extracted from the WSDL
 * - type: tns:dataSetCount
 * @subpackage Structs
 */
class DataSetCount extends AbstractStructBase
{
    /**
     * The dataset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dataset = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $filter = null;
    /**
     * Constructor method for dataSetCount
     * @uses DataSetCount::setDataset()
     * @uses DataSetCount::setFilter()
     * @param string $dataset
     * @param \Conventus\Atoss\StructType\WebPropertyObject $filter
     */
    public function __construct(?string $dataset = null, ?\Conventus\Atoss\StructType\WebPropertyObject $filter = null)
    {
        $this
            ->setDataset($dataset)
            ->setFilter($filter);
    }
    /**
     * Get dataset value
     * @return string|null
     */
    public function getDataset(): ?string
    {
        return $this->dataset;
    }
    /**
     * Set dataset value
     * @param string $dataset
     * @return \Conventus\Atoss\StructType\DataSetCount
     */
    public function setDataset(?string $dataset = null): self
    {
        // validation for constraint: string
        if (!is_null($dataset) && !is_string($dataset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataset, true), gettype($dataset)), __LINE__);
        }
        $this->dataset = $dataset;
        
        return $this;
    }
    /**
     * Get filter value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getFilter(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $filter
     * @return \Conventus\Atoss\StructType\DataSetCount
     */
    public function setFilter(?\Conventus\Atoss\StructType\WebPropertyObject $filter = null): self
    {
        $this->filter = $filter;
        
        return $this;
    }
}
