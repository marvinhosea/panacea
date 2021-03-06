<?php


namespace Panacea;


use Carbon\Laravel\ServiceProvider;
use Panacea\Services\SmsService;

class PanaceaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishResources();
    }

    public function register()
    {
        $this->registerFacades();
    }

    private function registerFacades()
    {
        $this->app->bind('pSMS', function (){
            return new SmsService();
        });
    }

    private function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/panacea.php' => config_path('panacea-sms.php')
        ], 'panacea-config');
    }
}
