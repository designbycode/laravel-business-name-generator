<?php

namespace Designbycode\LaravelBusinessNameGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class BusinessNameGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Designbycode\LaravelBusinessNameGenerator\BusinessNameGenerator::class;
    }
}
