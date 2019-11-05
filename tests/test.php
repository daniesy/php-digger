<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Daniesy\Digger;
use Daniesy\Record\Types;

//$results = (new Digger)->getRecords('ping-pong.dev', Types::A);
//foreach($results as $result) {
//    var_dump($result);
//}
//
//$results = (new Digger)->getRecords('email.mailgun.ping-pong.dev', Types::CNAME);
//var_dump($results);
//
//$results = (new Digger)->getRecords('mailgun.ping-pong.dev', Types::MX);
//var_dump($results);
//
//$results = (new Digger)->getRecords('google.com', Types::NS);
//var_dump($results);
//
//$results = (new Digger)->getRecords('google.com', Types::ANY);
//var_dump(($results));

//$results = (new Digger)->getRecords('_test._tcp.chatchup.com', Types::SRV);
//var_dump(($results));