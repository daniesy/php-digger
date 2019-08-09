<?php


namespace Daniesy\Record;


class Cname extends Record
{

    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $domainName = "";

    public function has($value): bool
    {
        return $value === $this->domainName;
    }

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'domainName'];
    }
}