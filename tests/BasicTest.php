<?php

use Daniesy\Digger;
use Daniesy\Record\Records;
use Daniesy\Record\Types;
use PHPUnit\Framework\TestCase;


class BasicTest extends TestCase
{
    public function testARecords()
    {
        $results = (new Digger)->getRecords('ping-pong.dev', Types::A);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(2, $results);
        $this->assertTrue($results->has('104.31.64.149'));
        $this->assertTrue($results->has('104.31.65.149'));
        $this->assertFalse($results->has('14.31.65.149'));
    }

    public function testAAAARecords()
    {
        $results = (new Digger)->getRecords('ping-pong.dev', Types::AAAA);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(2, $results);
        $this->assertTrue($results->has('2606:4700:3037::681f:4095'));
        $this->assertTrue($results->has('2606:4700:3037::681f:4095'));
        $this->assertFalse($results->has('2606:47300:3037::681f:4195'));
    }

    public function testMXRecords()
    {
        $results = (new Digger)->getRecords('mailgun.ping-pong.dev', Types::MX);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(2, $results);
        $this->assertTrue($results->has('mxa.mailgun.org.'));
        $this->assertTrue($results->has('mxb.mailgun.org.'));
        $this->assertFalse($results->has('mxc.mailgun.org.'));
    }

    public function testNSRecords()
    {
        $results = (new Digger)->getRecords('ping-pong.dev', Types::NS);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(2, $results);
        $this->assertTrue($results->has('mira.ns.cloudflare.com.'));
        $this->assertTrue($results->has('terry.ns.cloudflare.com.'));
        $this->assertFalse($results->has('banana'));
    }

    public function testTXTRecords()
    {
        $results = (new Digger)->getRecords('ping-pong.dev', Types::TXT);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(3, $results);
        $this->assertTrue($results->has('ca3-0af80d5094ed4818a87817f250fa8aec'));
        $this->assertTrue($results->has('c32215855a403ca2b71c6467a4419731-946a91770eee10104a19f6eb31b20004'));
        $this->assertFalse($results->has('banana'));
    }

    public function testCNAMERecords()
    {
        $results = (new Digger)->getRecords('email.mailgun.ping-pong.dev', Types::CNAME);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(1, $results);
        $this->assertTrue($results->has('mailgun.org.'));
        $this->assertFalse($results->has('banana'));
    }

    public function testANYRecords()
    {
        $results = (new Digger)->getRecords('attacksimulator.com', Types::ANY);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(13, $results);
        $this->assertTrue($results->has('google-site-verification=ZuDv79kcrxqvmVVNkWROtWXjlHmoIrJA3ld29-rt1tY'));
        $this->assertTrue($results->has('94.130.135.206'));
        $this->assertTrue($results->has('ns-666.awsdns-19.net.'));
        $this->assertTrue($results->has('aspmx.l.google.com.'));
        $this->assertFalse($results->has('hidden'));
    }

    public function testCAARecord()
    {
        $results = (new Digger)->getRecords('ping-pong.site', Types::CAA);        
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(6, $results);
        $this->assertTrue($results->has('letsencrypt.org'));
    }

    public function testSRVRecord()
    {
        $results = (new Digger)->getRecords('_test._tcp.ping-pong.site', Types::SRV);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(1, $results);
        $this->assertTrue($results->has('ping-pong.dev.'));
    }

//     public function testPTRRecord()
//     {
//         $results = (new Digger)->getRecords('chatchup.com', Types::PTR);
//         $this->assertInstanceOf(Records::class, $results);
//         $this->assertCount(1, $results);
//         $this->assertTrue($results->has('test.chatchup.com.'));
//     }

    public function testSOARecord()
    {
        $results = (new Digger)->getRecords('ping-pong.site', Types::SOA);
        $this->assertInstanceOf(Records::class, $results);
        $this->assertCount(1, $results);
        $this->assertTrue($results->has('mira.ns.cloudflare.com.'));
    }
}
