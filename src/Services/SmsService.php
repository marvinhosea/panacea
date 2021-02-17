<?php


namespace Panacea\Services;


use Panacea\Core\Engine;

class SmsService
{
    protected $engine;

    public function __construct()
    {
        $this->engine = Engine::init();
    }
    public function sms(string $to, string $message)
    {
        return $message;
    }
}
