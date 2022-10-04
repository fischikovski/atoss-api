<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getVersioningInfoResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getVersioningInfoResponse
 * @subpackage Structs
 */
class GetVersioningInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    protected ?\Conventus\Atoss\StructType\WebPropertyObject $return = null;
    /**
     * Constructor method for getVersioningInfoResponse
     * @uses GetVersioningInfoResponse::setReturn()
     * @param \Conventus\Atoss\StructType\WebPropertyObject $return
     */
    public function __construct(?\Conventus\Atoss\StructType\WebPropertyObject $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Conventus\Atoss\StructType\WebPropertyObject|null
     */
    public function getReturn(): ?\Conventus\Atoss\StructType\WebPropertyObject
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Conventus\Atoss\StructType\WebPropertyObject $return
     * @return \Conventus\Atoss\StructType\GetVersioningInfoResponse
     */
    public function setReturn(?\Conventus\Atoss\StructType\WebPropertyObject $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
