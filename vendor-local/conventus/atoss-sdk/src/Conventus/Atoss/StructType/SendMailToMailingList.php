<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMailToMailingList StructType
 * Meta information extracted from the WSDL
 * - type: tns:sendMailToMailingList
 * @subpackage Structs
 */
class SendMailToMailingList extends AbstractStructBase
{
    /**
     * The mailinglist
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailinglist = null;
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
     * Constructor method for sendMailToMailingList
     * @uses SendMailToMailingList::setMailinglist()
     * @uses SendMailToMailingList::setSubject()
     * @uses SendMailToMailingList::setBody()
     * @param string $mailinglist
     * @param string $subject
     * @param string $body
     */
    public function __construct(?string $mailinglist = null, ?string $subject = null, ?string $body = null)
    {
        $this
            ->setMailinglist($mailinglist)
            ->setSubject($subject)
            ->setBody($body);
    }
    /**
     * Get mailinglist value
     * @return string|null
     */
    public function getMailinglist(): ?string
    {
        return $this->mailinglist;
    }
    /**
     * Set mailinglist value
     * @param string $mailinglist
     * @return \Conventus\Atoss\StructType\SendMailToMailingList
     */
    public function setMailinglist(?string $mailinglist = null): self
    {
        // validation for constraint: string
        if (!is_null($mailinglist) && !is_string($mailinglist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailinglist, true), gettype($mailinglist)), __LINE__);
        }
        $this->mailinglist = $mailinglist;
        
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
     * @return \Conventus\Atoss\StructType\SendMailToMailingList
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
     * @return \Conventus\Atoss\StructType\SendMailToMailingList
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
