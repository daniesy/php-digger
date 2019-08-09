<?php

namespace Daniesy\Record;

abstract class Record
{
    public function __construct(array $data)
    {
        $mapping = $this->mapping();
        foreach($data as $index => $value) {
            if (isset($mapping[$index]) && property_exists($this, $mapping[$index])) {
                $this->{$mapping[$index]} = trim($value, "\"");
            }
        }
    }

    abstract public function has($value) : bool;
    abstract protected function mapping() : array;
}