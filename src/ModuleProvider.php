<?php

namespace B2B\Module;

use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/module.php' => config_path('module.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'module');
    }

    public function register(): void
    {
        parent::register();
    }
}