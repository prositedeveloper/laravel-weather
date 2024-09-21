<?php

namespace Prositedeveloper\LaravelWeather\Tests;

use Prositedeveloper\LaravelWeather\Providers\WeatherServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            WeatherServiceProvider::class
        ];
    }
}