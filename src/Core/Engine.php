<?php


namespace Panacea\Core;


class Engine
{
    protected $core;

    public function __construct(string $username, string $password)
    {
        $this->core = new PanaceaAPI();
        $this->core->setUsername($username);
        $this->core->setPassword($password);
    }

    public static function init()
    {
        $username = config('panacea-sms.username');
        $password = config('panacea-sms.password');

        return new self($username, $password);
    }

    public function sendSMS(
        $to,
        $message,
        ?int $report_mask = 19,
        ?string $report_url = null,
        ?string $charset = null,
        ?string $data_coding = null,
        ?int $message_class = -1,
        ?string $auto_detect_encoding = null)
    {
        $this->core->message_send($to, $message);
    }

}
