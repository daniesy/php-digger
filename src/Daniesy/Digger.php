<?php

namespace Daniesy;

use Daniesy\Record\Records;
use Daniesy\Record\Types;

class Digger
{
    use RunsDig;

    /**
     * Get records of a specific type for a provided hostname
     *
     * @param string $hostname
     * @param string $type
     * @param int $timeout
     * @return Records
     * @throws RecordNotSupportedException
     */
    public function getRecords(string $hostname, string $type, int $timeout = 5) : Records
    {
        if (!Types::has($type)) {
            throw new RecordNotSupportedException();
        }

        $output = $this->execute($hostname, $type, $timeout);
        return new Records($type, $output);
    }
    
}