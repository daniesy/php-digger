<?php


namespace Daniesy\Record;


class Types
{
    const ANY = "ANY";
    const A = "A";
    const AAAA = "AAAA";
    const TXT = "TXT";
    const CNAME = "CNAME";
    const CAA = "CAA";
    const MX = "MX";
    const NS = "NS";
    const SRV = "SRV";

    const TYPES = [self::ANY, self::A, self::AAAA, self::TXT, self::CNAME, self::MX, self::NS, self::CAA, self::SRV];

    public static function has(string $type) : bool
    {
        return in_array($type, self::TYPES);
    }
}