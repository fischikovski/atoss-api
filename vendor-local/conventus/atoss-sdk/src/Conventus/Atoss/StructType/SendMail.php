<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMail StructType
 * Meta information extracted from the WSDL
 * - type: tns:sendMail
 * @subpackage Structs
 */
class SendMail extends AbstractStructBase
{
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The cc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cc = null;
    /**
     * The bcc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bcc = null;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $body = null;
    /**
     * Constructor method for sendMail
     * @uses SendMail::setTo()
     * @uses SendMail::setCc()
     * @uses SendMail::setBcc()
     * @uses SendMail::setSubject()
     * @uses SendMail::setBody()
     * @param string $to
     * @param string $cc
     * @param string $bcc
     * @param string $subject
     * @param string $body
     */
    public function __construct(?string $to = null, ?string $cc = null, ?string $bcc = null, ?string $subject = null, ?string $body = null)
    {
        $this
            ->setTo($to)
            ->setCc($cc)
            ->setBcc($bcc)
            ->setSubject($subject)
            ->setBody($body);
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Conventus\Atoss\StructType\SendMail
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
    /**
     * Get cc value
     * @return string|null
     */
    public function getCc(): ?string
    {
        return $this->cc;
    }
    /**
     * Set cc value
     * @param string $cc
     * @return \Conventus\Atoss\StructType\SendMail
     */
    public function setCc(?string $cc = null): self
    {
        // validation for constraint: string
        if (!is_null($cc) && !is_string($cc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc, true), gettype($cc)), __LINE__);
        }
        $this->cc = $cc;
        
        return $this;
    }
    /**
     * Get bcc value
     * @return string|null
     */
    public function getBcc(): ?string
    {
        return $this->bcc;
    }
    /**
     * Set bcc value
     * @param string $bcc
     * @return \Conventus\Atoss\StructType\SendMail
     */
    public function setBcc(?string $bcc = null): self
    {
        // validation for constraint: string
        if (!is_null($bcc) && !is_string($bcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcc, true), gettype($bcc)), __LINE__);
        }
        $this->bcc = $bcc;
        
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Conventus\Atoss\StructType\SendMail
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
    /**
     * Get body value
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }
    /**
     * Set body value
     * @param string $body
     * @return \Conventus\Atoss\StructType\SendMail
     */
    public function setBody(?string $body = null): self
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->body = $body;
        
        return $this;
    }
}
