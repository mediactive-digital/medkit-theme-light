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
        $this->loadViewsFrom(__DIR__.'/views', 'medKitTheme');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/medKitTheme'),
        ]);
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

    }
}
