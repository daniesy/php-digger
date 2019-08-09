<?php


namespace Daniesy\Record;


class Ns extends Record
{

    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $nameServer = "";

    public function has($value): bool
    {
        return $this->nameServer === $value;
    }

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'nameServer'];
    }
}