<?php
declare(strict_types=1);
namespace App\Atoss\Model;

class GetEmployeesResponse
{
    protected WebPropertyObjectList $return;

    /**
     * @return WebPropertyObjectList
     */
    public function getReturn(): WebPropertyObjectList
    {
        return $this->return;
    }

    /**
     * @param WebPropertyObjectList $return
     */
    public function setReturn(WebPropertyObjectList $return): void
    {
        $this->return = $return;
    }

    public function __get($name)
    {
        foreach ($this->getStringProperties() as $item) {
            if($item->key === $name) {
                return $item->value;
            }
        }
        return null;
    }
}