<?php

declare(strict_types=1);

namespace PutheaKhem\LaravelCamdigiKey\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use PutheaKhem\LaravelCamdigiKey\CamDigiKeyServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CamDigiKeyServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'CamDigiKey' => \PutheaKhem\LaravelCamdigiKey\Facades\CamDigiKey::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('camdigikey.camdigikey.api_url', 'https://test.camdigikey.gov.kh');
        $app['config']->set('camdigikey.camdigikey.success_url', 'https://test.app.com/callback');
    }
}
