<?php


namespace Daniesy\Record;


use MongoDB\BSON\Type;

class Txt extends Record
{
    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $value = "";

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'value'];
    }

    public function has($value): bool
    {
        return $this->value === $value;
    }
}