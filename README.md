# DIGGER
[![Build Status](https://travis-ci.org/daniesy/php-digger.svg?branch=master)](https://travis-ci.org/daniesy/php-digger)

A simple way to fetch DNS Resource Records associated with a hostname.

### How to

Using digger is easy as 1, 2, 3.

	<?php
	require 'vendor/autoload.php';

	use Daniesy\Digger;
	use Daniesy\Record\Types;

	$records = (new Digger)->getRecords('ping-pong.dev', Types::A);
	foreach($records as $record) {
    	var_dump($record);
	}
	
	if($records->has('127.0.0.1')) {
		echo "The dns record is set";
	}

### Installation

You can install `Digger` with composer by running the following command.

`composer require daniesy/php-digger:dev-master`

### Parameters

- **host**
   The host you want to fetch the DNS records from
- **type**
   The type of DNS Records you want to get. At the moment, only the following records are supported: `A`, `AAAA`, `TXT`, `CNAME`, `MX`, `NS`. I'll add more at a later point.
   If you want to fetch all supported records in one query, set `ANY` as the type.
- **timeout**
   The timeout in seconds after which the call should fail. The default timeout is `5` seconds.
   
### Notice

In order for digger to work, `dig` needs to be installed on your machine. A [google search](https://www.google.com/search?q=how+to+install+dig) would help with this one.
