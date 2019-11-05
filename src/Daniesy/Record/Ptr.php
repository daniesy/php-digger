<?php


namespace Daniesy\Record;


class Ptr extends Record
{
    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $domain = "";

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'domain'];
    }

    public function has($value): bool
    {
        return $this->domain === $value;
    }
}