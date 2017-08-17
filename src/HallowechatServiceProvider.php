<?php

namespace Hallo;

use App\User;
use Hallo\Wxpay;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class HallowechatServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Wxpay', function(){
            return new Wxpay();
        });
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.


    }
}
