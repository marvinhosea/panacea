<?php


namespace Panacea\Facades;


use Illuminate\Support\Facades\Facade;

class SMS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pSMS';
    }
}
