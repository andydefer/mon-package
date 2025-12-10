<?php

namespace AndyKani\MonPackage;

use Illuminate\Support\ServiceProvider;

class MonPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publier la configuration
        $this->publishes([
            __DIR__ . '/../config/monpackage.php' => $this->app->basePath('config/monpackage.php'),
        ], 'config');

        // Charger les routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Charger les vues
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'monpackage');
    }

    public function register()
    {
        // Merge config pour éviter de casser l’existant
        $this->mergeConfigFrom(
            __DIR__ . '/../config/monpackage.php',
            'monpackage'
        );
    }
}
