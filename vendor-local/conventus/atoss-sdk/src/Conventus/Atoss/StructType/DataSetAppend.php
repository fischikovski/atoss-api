<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dataSetAppend StructType
 * Meta information extracted from the WSDL
 * - type: tns:dataSetAppend
 * @subpackage Structs
 */
class DataSetAppend extends AbstractStructBase
{
    /**
     * The dataset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dataset = null;
    /**
     * The record
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $record = null;
    /**
     * Constructor method for dataSetAppend
     * @uses DataSetAppend::setDataset()
     * @uses DataSetAppend::setRecord()
     * @param string $dataset
     * @param \Conventus\Atoss\StructType\WebPropertyObject $record
     */
    public function __construct(?string $dataset = null, ?\Conventus\Atoss\StructType\WebPropertyObject $record = null)
    {
        $this
            ->setDataset($dataset)
            ->setRecord($record);
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
     * @return \Conventus\Atoss\StructType\DataSetAppend
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
     * Get record value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getRecord(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->record;
    }
    /**
     * Set record value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $record
     * @return \Conventus\Atoss\StructType\DataSetAppend
     */
    public function setRecord(?\Conventus\Atoss\StructType\WebPropertyObject $record = null): self
    {
        $this->record = $record;
        
        return $this;
    }
}
