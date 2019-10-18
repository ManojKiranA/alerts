<?php

namespace Manojkiran\Alert;

class AlertFactory
{
    public $alerts = [
        'After taking a steroids test doctors informed Chuck Norris that he had tested positive. He laughed upon receiving this information, and said &quot;of course my urine tested positive, what do you think they make steroids from?',
        'Bill Gates thinks he\'s Chuck Norris. Chuck Norris actually laughed. Once.',
        'Chuck Norris can unit test entire applications with a single assert.',
        'No one has ever pair-programmed with Chuck Norris and lived to tell about it.',
    ];

    public function __construct(array $alerts = null)
    {
        if ($alerts):
                $this->alerts = $alerts;
        endif;
    }

    public function sendAlert()
    {
        return $this->alerts[array_rand($this->alerts)];
    }
}
