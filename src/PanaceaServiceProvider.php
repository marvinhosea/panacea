<?php


namespace Panacea;


use Carbon\Laravel\ServiceProvider;

class PanaceaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd('this is working');
    }
}
