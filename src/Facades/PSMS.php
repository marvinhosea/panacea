<?php


namespace Panacea\Facades;


use Illuminate\Support\Facades\Facade;

class PSMS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pSMS';
    }
}
