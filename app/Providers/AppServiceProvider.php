<?php

namespace App\Providers;

use App\Routing\Redirector;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('redirect', function ($redirectorOriginal, $app){
            $redirector = new Redirector($app['url']);

            if(isset($app['session.store']))
            {
                $redirector->setSession($app['session.store']);
            }
            return $redirector;
        });
    }
}
