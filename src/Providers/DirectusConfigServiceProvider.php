<?php

namespace BoxyBird\DirectusConfig\Providers;

use Illuminate\Support\ServiceProvider;
use BoxyBird\DirectusConfig\Middleware\DirectusAuthentication;

class DirectusConfigServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/config.php' => config_path('directus-config.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php',
            'directus_config'
        );

        $this->app->router->aliasMiddleware(
            'auth.directus',
            DirectusAuthentication::class
        );
    }
}
