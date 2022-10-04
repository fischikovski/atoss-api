<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dataSetUpdateBatched StructType
 * Meta information extracted from the WSDL
 * - type: tns:dataSetUpdateBatched
 * @subpackage Structs
 */
class DataSetUpdateBatched extends AbstractStructBase
{
    /**
     * The dataset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dataset = null;
    /**
     * The records
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObjectList|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObjectList $records = null;
    /**
     * The filters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObjectList|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObjectList $filters = null;
    /**
     * Constructor method for dataSetUpdateBatched
     * @uses DataSetUpdateBatched::setDataset()
     * @uses DataSetUpdateBatched::setRecords()
     * @uses DataSetUpdateBatched::setFilters()
     * @param string $dataset
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $records
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $filters
     */
    public function __construct(?string $dataset = null, ?\Conventus\Atoss\StructType\WebPropertyObjectList $records = null, ?\Conventus\Atoss\StructType\WebPropertyObjectList $filters = null)
    {
        $this
            ->setDataset($dataset)
            ->setRecords($records)
            ->setFilters($filters);
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
     * @return \Conventus\Atoss\StructType\DataSetUpdateBatched
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
     * Get records value
     * @return \Conventus\Atoss\StructType\WebPropertyObjectList|null
     */
    public function getRecords(): ?\Conventus\Atoss\StructType\WebPropertyObjectList
    {
        return $this->records;
    }
    /**
     * Set records value
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $records
     * @return \Conventus\Atoss\StructType\DataSetUpdateBatched
     */
    public function setRecords(?\Conventus\Atoss\StructType\WebPropertyObjectList $records = null): self
    {
        $this->records = $records;
        
        return $this;
    }
    /**
     * Get filters value
     * @return \Conventus\Atoss\StructType\WebPropertyObjectList|null
     */
    public function getFilters(): ?\Conventus\Atoss\StructType\WebPropertyObjectList
    {
        return $this->filters;
    }
    /**
     * Set filters value
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $filters
     * @return \Conventus\Atoss\StructType\DataSetUpdateBatched
     */
    public function setFilters(?\Conventus\Atoss\StructType\WebPropertyObjectList $filters = null): self
    {
        $this->filters = $filters;
        
        return $this;
    }
}
