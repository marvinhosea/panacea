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

}
