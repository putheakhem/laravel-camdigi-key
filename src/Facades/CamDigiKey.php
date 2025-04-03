<?php

declare(strict_types=1);

namespace PutheaKhem\LaravelCamdigiKey\Facades;

use Illuminate\Support\Facades\Facade;

final class CamDigiKey extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'camdigikey';
    }
}
