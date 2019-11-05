<?php


namespace Daniesy\Record;


class Caa extends Record
{
    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $flags = 0;
    public $tag = "";
    public $domain = "";

    protected function mapping(): array
    {
       return ['host', 'ttl', 'class', 'type', 'flags', 'tag', 'domain'];
    }

    public function has($value): bool
    {
        return $this->domain === $value;
    }

}