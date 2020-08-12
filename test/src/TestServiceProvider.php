<?php

namespace Anindita\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'test');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        $this->publishes([
            __DIR__.'/config/test.php' => config_path('test.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/test.php', 'test'
        );
    }
}
