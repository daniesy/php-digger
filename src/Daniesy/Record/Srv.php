<?php


namespace Daniesy\Record;


class Srv extends Record
{

    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $priority = 0;
    public $weight = 0;
    public $port = 0;
    public $target = "";

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'priority', 'weight', 'port', 'target'];
    }

    public function has($value): bool
    {
        return $this->target === $value;
    }
}