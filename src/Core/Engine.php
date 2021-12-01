<?php


namespace Panacea\Core;


use Panacea\Exception\NotReachable;
use Panacea\Exception\PanaceaSmsError;

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
        $from,
        ?int $report_mask = 19,
        ?string $report_url = null,
        ?string $charset = null,
        ?string $data_coding = null,
        ?int $message_class = -1,
        ?string $auto_detect_encoding = null)
    {
        try {
            $response = $this->core->message_send($to, $message, $from, $report_mask, $report_url, $charset, $data_coding, $message_class, $auto_detect_encoding);
            if ($response['status'] !== 1){
                throw new PanaceaSmsError($response['message'] . ' ~ '. $response['details']);
            }

            return $response;
        } catch (\Exception $exception){
            throw new NotReachable($exception->getMessage());
        }
    }

}
