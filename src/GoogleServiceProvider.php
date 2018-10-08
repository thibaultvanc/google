<?php

namespace Organit\Google;

use Organit\Zoho\Zoho;
use Illuminate\Support\ServiceProvider;

class GoogleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'view');

        // $this->publishes([
    //     __DIR__ . '/Config' => base_path('config/')
    // ]);
    }


    public function register()
    {
        $this->app['google'] = $this->app->singleton(function ($app) {
            return new Google;
        });
    }
}
