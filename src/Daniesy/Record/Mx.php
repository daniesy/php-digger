<?php


namespace Daniesy\Record;


class Mx extends Record
{

    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $priority = 0;
    public $server = "";

    public function has($value): bool
    {
        return $value === $this->server;
    }

    protected function mapping(): array
    {
        return ['host', 'ttl', 'class', 'type', 'priority', 'server'];
    }
}