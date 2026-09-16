<?php

declare(strict_types=1);

namespace PutheaKhem\LaravelCamdigiKey;

use Illuminate\Support\ServiceProvider;
use PutheaKhem\LaravelCamdigiKey\Console\SetupCamDigiKey;

final class CamDigiKeyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/camdigikey.php', 'camdigikey');

        $this->app->singleton('camdigikey', function () {
            return new CamDigiKey();
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupCamDigiKey::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../config/camdigikey.php' => config_path('camdigikey.php'),
        ], 'config');
    }
}
