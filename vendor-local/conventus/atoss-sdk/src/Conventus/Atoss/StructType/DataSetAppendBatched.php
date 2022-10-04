<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dataSetAppendBatched StructType
 * Meta information extracted from the WSDL
 * - type: tns:dataSetAppendBatched
 * @subpackage Structs
 */
class DataSetAppendBatched extends AbstractStructBase
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
     * Constructor method for dataSetAppendBatched
     * @uses DataSetAppendBatched::setDataset()
     * @uses DataSetAppendBatched::setRecords()
     * @param string $dataset
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $records
     */
    public function __construct(?string $dataset = null, ?\Conventus\Atoss\StructType\WebPropertyObjectList $records = null)
    {
        $this
            ->setDataset($dataset)
            ->setRecords($records);
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
     * @return \Conventus\Atoss\StructType\DataSetAppendBatched
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
     * @return \Conventus\Atoss\StructType\DataSetAppendBatched
     */
    public function setRecords(?\Conventus\Atoss\StructType\WebPropertyObjectList $records = null): self
    {
        $this->records = $records;
        
        return $this;
    }
}
