<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \PagSeguro\Library::initialize();
        \PagSeguro\Configuration\Configure::setEnvironment('sandbox');
        \PagSeguro\Configuration\Configure::setLog(true, __DIR__.'/logFilename.log');
        \PagSeguro\Configuration\Configure::setCharset('UTF-8');
    }
}
