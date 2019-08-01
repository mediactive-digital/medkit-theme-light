<?php

namespace MediactiveDigital\MedKitTheme;
use MediactiveDigital\MedKitTheme\Commands\InstallCommand;

use Illuminate\Support\ServiceProvider;

class MedKitThemeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'mediactivedigital');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'mediactivedigital');
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
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/medkittheme.php', 'medkittheme');

        // Register the service the package provides.
        $this->app->singleton('medkittheme', function ($app) {
            return new MedKitTheme;
        });

        $this->commands([
            InstallCommand::class,
        ]);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['medkittheme'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/medkittheme.php' => config_path('medkittheme.php'),
        ], 'medkittheme.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/mediactivedigital'),
        ], 'medkittheme.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/mediactivedigital'),
        ], 'medkittheme.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/mediactivedigital'),
        ], 'medkittheme.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
