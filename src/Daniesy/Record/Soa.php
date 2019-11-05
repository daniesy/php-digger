<?php


namespace Daniesy\Record;


class Soa extends Record
{
    public $host = "";
    public $ttl = 0;
    public $class = "";
    public $type = "";
    public $nameServer = "";
    public $email = "";
    public $serialNumber = "";
    public $refresh = "";
    public $retry = "";
    public $expiry = "";
    public $nxDomainTtl = "";

    protected function mapping(): array
    {
        return [ "host", "ttl", "class", "type", "nameServer", "email", "serialNumber", "refresh", "retry", "expiry", "nxDomainTtl" ];
    }

    public function has($value): bool
    {
        return $this->nameServer === $value;
    }
}