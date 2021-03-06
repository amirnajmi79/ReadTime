<?php

namespace AmirNajmi\ReadTime;

use Illuminate\Support\ServiceProvider;

class ReadTimeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'amirnajmi');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'amirnajmi');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/readtime.php', 'readtime');

        // Register the service the package provides.
        $this->app->singleton('readtime', function ($app) {
            return new ReadTime;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['readtime'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/readtime.php' => config_path('readtime.php'),
        ], 'readtime.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/amirnajmi'),
        ], 'readtime.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/amirnajmi'),
        ], 'readtime.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/amirnajmi'),
        ], 'readtime.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
