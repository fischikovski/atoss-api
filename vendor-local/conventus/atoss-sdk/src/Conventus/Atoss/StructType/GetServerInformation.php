<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getServerInformation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getServerInformation
 * @subpackage Structs
 */
class GetServerInformation extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $request = null;
    /**
     * The param
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $param = null;
    /**
     * Constructor method for getServerInformation
     * @uses GetServerInformation::setRequest()
     * @uses GetServerInformation::setParam()
     * @param string $request
     * @param string $param
     */
    public function __construct(?string $request = null, ?string $param = null)
    {
        $this
            ->setRequest($request)
            ->setParam($param);
    }
    /**
     * Get request value
     * @return string|null
     */
    public function getRequest(): ?string
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param string $request
     * @return \Conventus\Atoss\StructType\GetServerInformation
     */
    public function setRequest(?string $request = null): self
    {
        // validation for constraint: string
        if (!is_null($request) && !is_string($request)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($request, true), gettype($request)), __LINE__);
        }
        $this->request = $request;
        
        return $this;
    }
    /**
     * Get param value
     * @return string|null
     */
    public function getParam(): ?string
    {
        return $this->param;
    }
    /**
     * Set param value
     * @param string $param
     * @return \Conventus\Atoss\StructType\GetServerInformation
     */
    public function setParam(?string $param = null): self
    {
        // validation for constraint: string
        if (!is_null($param) && !is_string($param)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($param, true), gettype($param)), __LINE__);
        }
        $this->param = $param;
        
        return $this;
    }
}
