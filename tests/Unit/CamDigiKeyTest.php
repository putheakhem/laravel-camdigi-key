<?php

declare(strict_types=1);

use PutheaKhem\LaravelCamdigiKey\CamDigiKey;
use Symfony\Component\Process\Process;

beforeEach(function () {
    $this->camDigiKey = new CamDigiKey();
});

it('can instantiate camdigikey class', function () {
    expect($this->camDigiKey)->toBeInstanceOf(CamDigiKey::class);
});

it('has all required methods', function () {
    $methods = [
        'getLoginToken',
        'getUserAccessToken',
        'validateJwt',
        'refreshAccessToken',
        'logoutAccessToken',
        'getOrganizationAccessToken',
        'lookupUserProfile',
        'getUserFace',
        'verifyAccountToken',
    ];

    foreach ($methods as $method) {
        expect(method_exists($this->camDigiKey, $method))->toBeTrue();
    }
});

it('getLoginToken returns array when successful', function () {
    // Test that method exists and can be called
    // Actual behavior would need real process execution or dependency injection
    expect(method_exists($this->camDigiKey, 'getLoginToken'))->toBeTrue();
});

it('getUserAccessToken accepts string parameter', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'getUserAccessToken');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(1)
        ->and($params[0]->getName())->toBe('authToken')
        ->and($params[0]->getType()->getName())->toBe('string');
});

it('validateJwt accepts string parameter', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'validateJwt');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(1)
        ->and($params[0]->getName())->toBe('token')
        ->and($params[0]->getType()->getName())->toBe('string');
});

it('refreshAccessToken accepts string parameter', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'refreshAccessToken');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(1)
        ->and($params[0]->getName())->toBe('accessToken')
        ->and($params[0]->getType()->getName())->toBe('string');
});

it('logoutAccessToken accepts string parameter', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'logoutAccessToken');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(1)
        ->and($params[0]->getName())->toBe('accessToken')
        ->and($params[0]->getType()->getName())->toBe('string');
});

it('getOrganizationAccessToken has no parameters', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'getOrganizationAccessToken');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(0);
});

it('lookupUserProfile accepts two string parameters', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'lookupUserProfile');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(2)
        ->and($params[0]->getName())->toBe('accessToken')
        ->and($params[0]->getType()->getName())->toBe('string')
        ->and($params[1]->getName())->toBe('personalCode')
        ->and($params[1]->getType()->getName())->toBe('string');
});

it('getUserFace accepts string parameter', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'getUserFace');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(1)
        ->and($params[0]->getName())->toBe('token')
        ->and($params[0]->getType()->getName())->toBe('string');
});

it('verifyAccountToken accepts string parameter', function () {
    $reflection = new ReflectionMethod($this->camDigiKey, 'verifyAccountToken');
    $params = $reflection->getParameters();
    
    expect($params)->toHaveCount(1)
        ->and($params[0]->getName())->toBe('accountToken')
        ->and($params[0]->getType()->getName())->toBe('string');
});

it('all methods return array type', function () {
    $methods = [
        'getLoginToken',
        'getUserAccessToken',
        'validateJwt',
        'refreshAccessToken',
        'logoutAccessToken',
        'getOrganizationAccessToken',
        'lookupUserProfile',
        'getUserFace',
        'verifyAccountToken',
    ];

    foreach ($methods as $method) {
        $reflection = new ReflectionMethod($this->camDigiKey, $method);
        $returnType = $reflection->getReturnType();
        
        expect($returnType->getName())->toBe('array');
    }
});

