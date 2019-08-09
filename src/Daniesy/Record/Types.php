<?php


namespace Daniesy\Record;


class Types
{
    const ANY = "ANY";
    const A = "A";
    const AAAA = "AAAA";
    const TXT = "TXT";
    const CNAME = "CNAME";
    const MX = "MX";
    const NS = "NS";

    const TYPES = [self::ANY, self::A, self::AAAA, self::TXT, self::CNAME, self::MX, self::NS];

    public static function has(string $type) : bool
    {
        return in_array($type, self::TYPES);
    }
}