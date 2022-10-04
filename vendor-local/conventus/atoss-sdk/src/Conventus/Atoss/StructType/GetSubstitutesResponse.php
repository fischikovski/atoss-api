<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSubstitutesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getSubstitutesResponse
 * @subpackage Structs
 */
class GetSubstitutesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObjectList|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObjectList $return = null;
    /**
     * Constructor method for getSubstitutesResponse
     * @uses GetSubstitutesResponse::setReturn()
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $return
     */
    public function __construct(?\Conventus\Atoss\StructType\WebPropertyObjectList $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Conventus\Atoss\StructType\WebPropertyObjectList|null
     */
    public function getReturn(): ?\Conventus\Atoss\StructType\WebPropertyObjectList
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Conventus\Atoss\StructType\WebPropertyObjectList $return
     * @return \Conventus\Atoss\StructType\GetSubstitutesResponse
     */
    public function setReturn(?\Conventus\Atoss\StructType\WebPropertyObjectList $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
