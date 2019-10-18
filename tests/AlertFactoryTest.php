<?php

namespace Manojkiran\Alert\Tests;

use Manojkiran\Alert\AlertFactory;
use PHPUnit\Framework\TestCase;

class AlertFactoryTest extends TestCase
{
    /**
     * 
     **/
    public function testItGetThePassedAlert()
    {
        $alertFactory = new AlertFactory(['Hello World']);
        $alert = $alertFactory->sendAlert();
        $this->assertSame('Hello World',$alert);
    }

    /**
     * 
     **/
    public function testItReturnsThePredefinedAlert()
    {
        $alertFactory = new AlertFactory();
        $alert = $alertFactory->sendAlert();
        $defaultAlerts = $alertFactory->alerts;
        $this->assertContains($alert,$defaultAlerts);
    }
}
