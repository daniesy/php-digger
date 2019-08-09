<?php

namespace Daniesy\Record;

abstract class Record
{
    public function __construct(array $data)
    {
        $mapping = $this->mapping();
        foreach($data as $index => $value) {
            if (isset($mapping[$index]) && property_exists($this, $mapping[$index])) {
                $this->{$mapping[$index]} = $value;
            }
        }
    }

    public static function parseOutput(array $output, string $type) : Records
    {
        $results = [];
        foreach ($output as $line) {
            $data = explode(' ', preg_replace('!\s+!', ' ', $line));
            $className = '\\Daniesy\\Record\\' .ucfirst(strtolower($type));
            $results[] = new $className($data);
        }

        return new Records($results);
    }

    abstract public function has($value) : bool;
    abstract protected function mapping() : array;
}