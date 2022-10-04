<?php
declare(strict_types=1);
namespace App\Atoss\Model;

class StringProperties
{
    protected $entry;

    /**
     * @return mixed
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param mixed $entry
     */
    public function setEntry($entry): void
    {
        $this->entry = $entry;
    }
}