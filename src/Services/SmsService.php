<?php


namespace Panacea\Services;


use Panacea\Core\Engine;
use Panacea\Exception\NotReachable;

class SmsService
{
    protected $engine;

    public function __construct()
    {
        $this->engine = Engine::init();
    }
    public function sms(string $message, string $from, string $to)
    {
        try {
            return $this->engine->sendSMS($to, $message, $from);
        } catch (NotReachable $e) {
            throw  new \Exception($e->getMessage());
        }
    }
}
