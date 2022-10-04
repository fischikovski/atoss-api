<?php
declare(strict_types=1);
namespace App\Atoss\Model;

class WebPropertyObjectList
{
    protected $objects = array();

    /**
     * @return array|WebPropertyObject[]
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * @param mixed $objects
     */
    public function setObjects($objects): void
    {
        $this->objects = $objects;
    }
}