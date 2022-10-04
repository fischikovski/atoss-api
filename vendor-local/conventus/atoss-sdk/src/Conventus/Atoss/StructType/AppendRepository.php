<?php

declare(strict_types=1);

namespace Conventus\Atoss\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appendRepository StructType
 * Meta information extracted from the WSDL
 * - type: tns:appendRepository
 * @subpackage Structs
 */
class AppendRepository extends AbstractStructBase
{
    /**
     * The pck
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pck = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The interactive
     * @var int|null
     */
    protected ?int $interactive = null;
    /**
     * The active
     * @var int|null
     */
    protected ?int $active = null;
    /**
     * The clientscript
     * @var int|null
     */
    protected ?int $clientscript = null;
    /**
     * The state
     * @var int|null
     */
    protected ?int $state = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The author
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $author = null;
    /**
     * The format
     * @var int|null
     */
    protected ?int $format = null;
    /**
     * Constructor method for appendRepository
     * @uses AppendRepository::setPck()
     * @uses AppendRepository::setTitle()
     * @uses AppendRepository::setDescription()
     * @uses AppendRepository::setType()
     * @uses AppendRepository::setInteractive()
     * @uses AppendRepository::setActive()
     * @uses AppendRepository::setClientscript()
     * @uses AppendRepository::setState()
     * @uses AppendRepository::setVersion()
     * @uses AppendRepository::setAuthor()
     * @uses AppendRepository::setFormat()
     * @param string $pck
     * @param string $title
     * @param string $description
     * @param int $type
     * @param int $interactive
     * @param int $active
     * @param int $clientscript
     * @param int $state
     * @param int $version
     * @param string $author
     * @param int $format
     */
    public function __construct(?string $pck = null, ?string $title = null, ?string $description = null, ?int $type = null, ?int $interactive = null, ?int $active = null, ?int $clientscript = null, ?int $state = null, ?int $version = null, ?string $author = null, ?int $format = null)
    {
        $this
            ->setPck($pck)
            ->setTitle($title)
            ->setDescription($description)
            ->setType($type)
            ->setInteractive($interactive)
            ->setActive($active)
            ->setClientscript($clientscript)
            ->setState($state)
            ->setVersion($version)
            ->setAuthor($author)
            ->setFormat($format);
    }
    /**
     * Get pck value
     * @return string|null
     */
    public function getPck(): ?string
    {
        return $this->pck;
    }
    /**
     * Set pck value
     * @param string $pck
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setPck(?string $pck = null): self
    {
        // validation for constraint: string
        if (!is_null($pck) && !is_string($pck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pck, true), gettype($pck)), __LINE__);
        }
        $this->pck = $pck;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get interactive value
     * @return int|null
     */
    public function getInteractive(): ?int
    {
        return $this->interactive;
    }
    /**
     * Set interactive value
     * @param int $interactive
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setInteractive(?int $interactive = null): self
    {
        // validation for constraint: int
        if (!is_null($interactive) && !(is_int($interactive) || ctype_digit($interactive))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($interactive, true), gettype($interactive)), __LINE__);
        }
        $this->interactive = $interactive;
        
        return $this;
    }
    /**
     * Get active value
     * @return int|null
     */
    public function getActive(): ?int
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param int $active
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setActive(?int $active = null): self
    {
        // validation for constraint: int
        if (!is_null($active) && !(is_int($active) || ctype_digit($active))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get clientscript value
     * @return int|null
     */
    public function getClientscript(): ?int
    {
        return $this->clientscript;
    }
    /**
     * Set clientscript value
     * @param int $clientscript
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setClientscript(?int $clientscript = null): self
    {
        // validation for constraint: int
        if (!is_null($clientscript) && !(is_int($clientscript) || ctype_digit($clientscript))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($clientscript, true), gettype($clientscript)), __LINE__);
        }
        $this->clientscript = $clientscript;
        
        return $this;
    }
    /**
     * Get state value
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param int $state
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setState(?int $state = null): self
    {
        // validation for constraint: int
        if (!is_null($state) && !(is_int($state) || ctype_digit($state))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get author value
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }
    /**
     * Set author value
     * @param string $author
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setAuthor(?string $author = null): self
    {
        // validation for constraint: string
        if (!is_null($author) && !is_string($author)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($author, true), gettype($author)), __LINE__);
        }
        $this->author = $author;
        
        return $this;
    }
    /**
     * Get format value
     * @return int|null
     */
    public function getFormat(): ?int
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param int $format
     * @return \Conventus\Atoss\StructType\AppendRepository
     */
    public function setFormat(?int $format = null): self
    {
        // validation for constraint: int
        if (!is_null($format) && !(is_int($format) || ctype_digit($format))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
}
