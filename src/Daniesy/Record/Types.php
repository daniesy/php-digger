<?php


namespace Daniesy\Record;


class Types
{
    const A = "A";
    const AAAA = "AAAA";
    const ANY = "ANY";
    const CNAME = "CNAME";
    const CAA = "CAA";
    const MX = "MX";
    const NS = "NS";
    const PTR = "PTR";
    const SRV = "SRV";
    const TXT = "TXT";

    const TYPES = [self::ANY, self::A, self::AAAA, self::TXT, self::CNAME, self::MX, self::NS, self::CAA, self::SRV, self::PTR];

    public static function has(string $type) : bool
    {
        return in_array($type, self::TYPES);
    }
}