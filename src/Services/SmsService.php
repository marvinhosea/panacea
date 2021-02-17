<?php


namespace Panacea\Services;


class SmsService
{
    public static function sms(
        string $to,
        string $message,
        ?int $report_mask = 19,
        ?string $report_url = null,
        ?string $charset = null,
        ?string $data_coding = null,
        ?int $message_class = -1,
        ?string $auto_detect_encoding = null)
    {
        return $message;
    }
}
