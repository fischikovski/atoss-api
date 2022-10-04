<?php
declare(strict_types=1);
namespace App\Atoss\Model;

class WebPropertyObject
{
    protected BinaryProperties $binaryProperties;

    protected StringProperties $stringProperties;

    /**
     * @return BinaryProperties
     */
    public function getBinaryProperties(): BinaryProperties
    {
        return $this->binaryProperties;
    }

    /**
     * @param BinaryProperties $binaryProperties
     */
    public function setBinaryProperties(BinaryProperties $binaryProperties): void
    {
        $this->binaryProperties = $binaryProperties;
    }

    /**
     * @return StringProperties
     */
    public function getStringProperties(): StringProperties
    {
        return $this->stringProperties;
    }

    /**
     * @param StringProperties $stringProperties
     */
    public function setStringProperties(StringProperties $stringProperties): void
    {
        $this->stringProperties = $stringProperties;
    }
}