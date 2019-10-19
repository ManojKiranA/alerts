<?php

namespace Manojkiran\Alert\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Manojkiran\Alert\AlertFactory;
use GuzzleHttp\Handler\MockHandler;

class AlertFactoryTest extends TestCase
{
    public function testItGetThePassedAlert()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
                "type": "success",
                "value": {
                "id": 594,
                "joke": "Chuck Norris built the hospital he was born in.",
                "categories": []
                }
                }'),
        ]);
        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);
        $alertFactory = new AlertFactory($client);
        $alert = $alertFactory->sendAlert();
        $this->assertSame('Chuck Norris built the hospital he was born in.', $alert);
    }
}
