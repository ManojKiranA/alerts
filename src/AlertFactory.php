<?php

namespace Manojkiran\Alert;

use GuzzleHttp\Client;

class AlertFactory
{
    protected $client;

    const API_END_POINT = 'http://api.icndb.com/jokes/random/';

    public function __construct(Client $client = null)
    {
        $this->client = $client ?? new Client();
    }

    public function sendAlert()
    {
        $getRequest = $this->client->get($this::API_END_POINT);
        $response = json_decode($getRequest->getBody());
        return $response->value->joke;
    }
}
