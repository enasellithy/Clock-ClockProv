<?php

namespace Clock\ClockProv;

use Illuminate\Support\ServiceProvider;

class ClockProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*if(!file_exists(base_path('config')))
        {
            $this->publishes([__DIR__.'/tools'=>base_path('config').'/set_clock.php']);
        }*/
        $this->publishes([__DIR__.'/tools'=>base_path('config')]);
        $this->publishes([__DIR__.'/blades'=>base_path('resources/views')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->singleton(Clock::class, function ($app) {
            return new Clock($app['config']['riak']);
        });
        /*$this->app['clock'] = $this->app->share(function($app){
            return new Clock;
        });*/
    }
}
