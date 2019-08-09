<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Daniesy\Digger;

$results = (new Digger)->getRecords('ping-pong.dev', 'A');
foreach($results as $result) {
    var_dump($result);
}