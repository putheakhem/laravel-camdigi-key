<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;
use PutheaKhem\LaravelCamdigiKey\CamDigiKey;
use PutheaKhem\LaravelCamdigiKey\Console\SetupCamDigiKey;
use PutheaKhem\LaravelCamdigiKey\Facades\CamDigiKey as CamDigiKeyFacade;

it('registers the service provider', function () {
    expect(app()->bound('camdigikey'))->toBeTrue();
});

it('resolves camdigikey from container', function () {
    $instance = app('camdigikey');

    expect($instance)
        ->toBeInstanceOf(CamDigiKey::class);
});

it('resolves camdigikey as singleton', function () {
    $instance1 = app('camdigikey');
    $instance2 = app('camdigikey');

    expect($instance1)->toBe($instance2);
});

it('facade resolves to correct instance', function () {
    $facade = CamDigiKeyFacade::getFacadeRoot();

    expect($facade)
        ->toBeInstanceOf(CamDigiKey::class);
});

it('merges configuration', function () {
    expect(config('camdigikey.camdigikey.api_url'))
        ->toBe('https://test.camdigikey.gov.kh')
        ->and(config('camdigikey.camdigikey.success_url'))
        ->toBe('https://test.app.com/callback');
});

it('service provider registers commands', function () {
    $provider = app()->getProvider('PutheaKhem\\LaravelCamdigiKey\\CamDigiKeyServiceProvider');
    
    expect($provider)->not->toBeNull();
});

it('publishes config file', function () {
    $configPath = __DIR__.'/../../config/camdigikey.php';

    expect(file_exists($configPath))->toBeTrue();
});
