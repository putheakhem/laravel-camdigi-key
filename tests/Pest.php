<?php

declare(strict_types=1);

use PutheaKhem\LaravelCamdigiKey\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

uses()->beforeEach(function () {
    Mockery::close();
})->afterEach(function () {
    Mockery::close();
})->in('Unit', 'Feature');
