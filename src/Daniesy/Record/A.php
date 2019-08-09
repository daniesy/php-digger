<?php

namespace Daniesy\Record;

class A extends Record
{
    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $ip = "";

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'ip'];
    }

    public function has($value): bool
    {
        return $this->ip === $value;
    }
}