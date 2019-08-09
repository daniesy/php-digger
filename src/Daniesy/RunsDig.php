<?php


namespace Daniesy;


trait RunsDig
{
    protected function execute(string $host, string $type, int $timeout = 5) : array
    {
        $output = [];
        $type = strtoupper($type);
        $command = sprintf('dig @8.8.8.8 +noall +answer +time=%d %s %s',
            $timeout,
            $this->clean($type),
            $this->clean($host)
        );

        exec($command, $output);
        return $output;
    }

    protected function clean(string $value) : string
    {
        return escapeshellarg($value);
    }
}