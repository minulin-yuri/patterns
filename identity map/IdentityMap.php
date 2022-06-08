<?php

namespace Model\Repository;

class IdentityMap
{
    private $identityMap = [];

    public function addToMap($obj)
    {
        $this->identityMap[$obj->getId()] = $obj;
    }

    public function getFromMap(int $id)
    {
        if (isset($this->identityMap[$id])) {
            return $this->identityMap[$id];
        }
        return null;
    }

    public function getFromMapByParam(string $param, string $value)
    {
        foreach ($this->identityMap as $key => $map) {
            if ($map[$param] === $value) {
                return $this->identityMap[$key];
            }
        }
        return null;
    }
}
