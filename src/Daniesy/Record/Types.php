<?php


namespace Daniesy\Record;


class Types
{
    const TYPE_A = "A";
    const TYPE_AAAA = "AAAA";
    const TYPE_TXT = "TXT";

    const TYPES = [self::TYPE_A, self::TYPE_AAAA, self::TYPE_TXT];

    public static function has(string $type) : bool
    {
        return in_array($type, self::TYPES);
    }
}