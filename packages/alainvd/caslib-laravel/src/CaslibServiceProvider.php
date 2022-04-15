<?php

namespace Alainvd\Caslib;

use Illuminate\Support\ServiceProvider;

class CaslibServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //Publish config file
        $this->publishes([
            __DIR__ . '/../config/caslib.php' => config_path('caslib.php')
        ]);

    }

    public function register()
    {
        $this->app->singleton('caslib', function(){
            return new CaslibManager(config('caslib'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('caslib');
    }
}
