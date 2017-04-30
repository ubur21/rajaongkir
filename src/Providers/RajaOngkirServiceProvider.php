<?php

namespace Dulabs\RajaOngkir\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

use Dulabs\RajaOngkir\RajaOngkir;

class RajaOngkirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('RajaOngkir', function()
        {
            return new RajaOngkir;
        });
    }
}
