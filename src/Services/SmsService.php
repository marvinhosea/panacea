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
    public function sms(string $to, string $message)
    {
        try {
            return $this->engine->sendSMS($to, $message);
        } catch (NotReachable $e) {
            throw  new \Exception($e->getMessage());
        }
    }
}
