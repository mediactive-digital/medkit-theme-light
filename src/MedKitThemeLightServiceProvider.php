<?php

namespace MediactiveDigital\MedKitThemeLight;
use MediactiveDigital\MedKitThemeLight\Commands\InstallCommand;

use Illuminate\Support\ServiceProvider;

class MedKitThemeLightServiceProvider extends ServiceProvider
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
        $this->mergeConfigFrom(__DIR__.'/../config/medkitthemelight.php', 'medkitthemelight');

        // Register the service the package provides.
        $this->app->singleton('medkitthemelight', function ($app) {
            return new MedKitThemeLight;
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
        return ['medkitthemelight'];
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
            __DIR__.'/../config/medkitthemelight.php' => config_path('medkitthemelight.php'),
        ], 'medkitthemelight.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/mediactivedigital'),
        ], 'medkitthemelight.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/mediactivedigital'),
        ], 'medkitthemelight.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/mediactivedigital'),
        ], 'medkitthemelight.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
